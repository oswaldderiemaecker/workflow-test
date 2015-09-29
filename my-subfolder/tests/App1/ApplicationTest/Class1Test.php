<?php

namespace App1\ApplicationTest;

class Class1Test extends \PHPUnit_Framework_TestCase
{
    /* @var $instance \Application\App1\Class1 */
    protected $instance;

    public function setUp()
    {
        $this->instance = new \Application\App1\Class1();
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