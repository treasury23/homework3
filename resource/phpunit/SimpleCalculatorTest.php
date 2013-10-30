<?php

use resource\cls\SimpleCalculator;

class SimpleCalculatorTest extends PHPUnit_Framework_TestCase
{
    public function testDecision()
    {
        $my = new SimpleCalculator(123, '+', 123);
        $this->assertEquals(123, $my->getNumber1());
        $this->assertEquals(246, $my->decision());
    }

    public function testFailure()
    {
        $my = new SimpleCalculator(123, '', 123);
        $this->assertEmpty($my->getOperator(), 'not empty');
    }
}
