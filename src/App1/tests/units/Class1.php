<?php

namespace Application\App1\tests\units;

use \mageekguy\atoum;

include_once __DIR__ . '/../../Class1.php';

class Class1 extends atoum\test
{
    public function test1()
    {
        $class1 = new \Application\App1\Class1();
        $class1->method1();

        $this->string('test')->isEqualTo('test');
    }

    public function test2()
    {
        $class1 = new \Application\App1\Class1();
        $class1->method1();

        $this->string('test')->isEqualTo('test');
    }
}