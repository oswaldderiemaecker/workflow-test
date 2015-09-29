<?php

namespace Application\App2\tests\units;

use \mageekguy\atoum;

include_once __DIR__ . '/../../Class1.php';

class Class1 extends atoum\test
{
    public function test1()
    {
        $class1 = new \Application\App2\Class1();
        $class1->method1();
        $class1->method2();

        $this->string('test')->isEqualTo('test');
    }
}