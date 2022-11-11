<?php

namespace App;

class CalculatorTest extends \PHPUnit\Framework\TestCase
{
    public function testAdd()
    {

        $calculator = new Calculator;
        $result = $calculator->add(20, 20);

        $this->assertEquals(40, $result);
    }

    public function testRightShift()
    {

        $calculator = new Calculator;
        $result = $calculator->rightShift(5);

        $this->assertEquals(2, $result);
    }

    public function testLeftShift()
    {

        $calculator = new Calculator;
        $result = $calculator->leftShift(5);

        $this->assertEquals(10, $result);
    }

    public function testAnd()
    {

        $calculator = new Calculator;
        $result = $calculator->and(5, 10);

        $this->assertEquals(TRUE, $result);
    }

    public function testOr()
    {

        $calculator = new Calculator;
        $result = $calculator->or(5, 2);

        $this->assertEquals(TRUE, $result);
    }
}
