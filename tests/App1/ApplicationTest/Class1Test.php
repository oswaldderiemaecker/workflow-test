<?php

namespace App1\ApplicationTest;

require_once __DIR__ . '/../../../src/App1/Class1.php';

class Class1Test extends \PHPUnit_Framework_TestCase
{
    /* @var $instance \App1\Class1 */
    protected $instance;

    public function setUp()
    {
        $this->instance = new \App1\Class1();
    }

    public function testMethod1()
    {
        $this->instance->method1();
        $this->assertTrue(true);
    }

    public function testMethod2()
    {
        $this->instance->method1();
        $this->assertTrue(true);
    }
}