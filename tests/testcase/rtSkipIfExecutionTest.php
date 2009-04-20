<?php

require_once 'PHPUnit/Framework.php';
  require_once dirname(__FILE__) . '../../../src/rtAutoload.php';


  class rtSkipIfExecutionTest extends PHPUnit_Framework_TestCase
  {
    private $path_to_tests;
    
    public function setUp() {
     $this->php = trim(shell_exec("which php"));
     $path_to_tests = realpath(dirname(__FILE__) . '/../../phpt-tests');
     $this->sample_test = $path_to_tests . '/sample_skipif.phpt';
    }
    
    public function tearDown() {
      @unlink($this->path_to_tests. '/sample_skipif.skipif.php');
    }
    
    public function testFileRun() { 
     //Create a new test configuration
     $config = rtRuntestsConfiguration::getInstance(array('run-tests.php', '-p', $this->php, $this->sample_test));
     $config->configure();
     
     //Retrieve the array of test file names
     $testFiles = $config->getSetting('TestFiles');
 
     //Read the test file
     $testFile =new rtPhpTestFile();
     $testFile->doRead($testFiles[0]);
     $testFile->normaliseLineEndings();
     
     //Create a new test case
     $testCase = new rtPhpTest($testFile->getContents(), $testFile->getTestName(), $testFile->getSectionHeadings(), $config);      
     
     //Setup and set the local environment for the test case
     $testCase->executeTest($config);
     
     //Check that the test has been skipped
     $this->assertTrue(array_key_exists('skip', $testCase->getStatus()));          
    }
  }
    
?>