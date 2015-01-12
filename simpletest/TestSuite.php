<?php

require_once(dirname(__FILE__) . '/../vendor/simpletest/simpletest/autorun.php');

class TestSuiteLogging extends TestSuite
{
    function __construct() {
        parent::__construct();
        $this->addFile('Test.php');
    }
}