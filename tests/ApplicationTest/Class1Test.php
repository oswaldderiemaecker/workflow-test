<?php

namespace ApplicationTest;

class Class1Test extends \PHPUnit_Framework_TestCase
{
    /* @var $instance \Application\Class1 */
    protected $instance;

    public function setUp()
    {
        $this->instance = new \Application\Class1();
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