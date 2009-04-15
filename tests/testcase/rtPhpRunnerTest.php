<?php

 require_once 'PHPUnit/Framework.php';
 require_once dirname(__FILE__) . '../../../src/rtAutoload.php';

class rtPhpRunnerTest extends PHPUnit_Framework_TestCase {
  
  public function setUp() {
    $this->php = trim(shell_exec("which php"));
    $fh = fopen('/tmp/test.php', 'w');
    fwrite($fh, '<?php echo "hello world"; ?>');
    fclose($fh);
    
    $fh = fopen('/tmp/test2.php', 'w');
    fwrite($fh, '<?php echo stream_get_contents(STDIN); ?>');
    fclose($fh);
    
  }
  
  public function tearDown() {
    unlink('/tmp/test.php');
    unlink('/tmp/test2.php');
  }
  
  public function testSimple() {
    $PhpRunner = new rtPhpRunner($this->php.'  -n /tmp/test.php 2>&1',
                           array(),
                           '/tmp');
    
    
    $this->assertEquals("hello world", $PhpRunner->runphp());
  }
  
  public function testStdin() {
    $PhpRunner = new rtPhpRunner($this->php.'  -n /tmp/test2.php 2>&1',
                           array(),
                           '/tmp',
                           'hello');
      
    $this->assertEquals("hello", $PhpRunner->runphp());
  
  }
}

?>