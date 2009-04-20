<?php



/**
 * Execution of PHP code.
 *
 */
class rtPhpRunner {

  private $phpCommand;
  private $environmentVariables;
  private $currentWorkingDirectory;
  private $stdin;
  private $timeOut;

  
  public function __construct($phpCommand, $environmentVariables, $currentWorkingDirectory, $stdin = null, $timeOut = 60) {
    $this->phpCommand = $phpCommand;
    $this->environmentVariables = $environmentVariables;
    $this->currentWorkingDirectory = $currentWorkingDirectory;
    $this->timeOut = $timeOut;
    $this->stdin = $stdin;
  }
 

  /**
   * Runs the PHP code.
   *
   * @return string - the output from the code
   */
  public function runphp()
  {
    $data = '';

    $proc = proc_open($this->phpCommand, array(
    0 => array('pipe', 'r'),
    1 => array('pipe', 'w'),
    2 => array('pipe', 'w')
    ), $pipes, $this->currentWorkingDirectory, $this->environmentVariables, array('suppress_errors' => true, 'binary_pipes' => true));

    if (!$proc) {
      throw new rtPhpRunnerException('Failed to open process to run PHP code in rtPhpRunner');
    }

    if (!is_null($this->stdin)) {
      fwrite($pipes[0], (binary) $this->stdin);
    }
    fclose($pipes[0]);

    while (true) {
      /* hide errors from interrupted syscalls */
      $r = $pipes;
      $w = null;
      $e = null;
       
      $n = @stream_select($r, $w, $e, $this->timeOut);

      if ($n === false) {
        
        throw new rtPhpRunnerException('Stream select failure in rtPhpRunner');

      } else if ($n === 0) {
        
        proc_terminate($proc);
        throw new rtPhpRunnerException ('The process running test code has timed out in rtPhpRunner');

      } else if ($n > 0) {
        $line = fread($pipes[1], 8192);
        if (strlen($line) == 0) {
          /* EOF */
          break;
        }
        $data .= (binary) $line;
      }
    }

    /* check the process status. Note that this will always be FALSE on windows */
    $stat = proc_get_status($proc);
    if ($stat['signaled']) {
      throw new rtPhpRunnerException('The process was terminated by uncaught signal number in rtPhpRunners');
    }

    $code = proc_close($proc);
    return $data;
  }
}

?>