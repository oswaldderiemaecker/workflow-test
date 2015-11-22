<?php


class ExampleTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testMe()
    {
        $class1 = new \Application\App1\Class1();
        $class1->method1();
        $class1->method2();
        $this->assertTrue(true);
    }
}