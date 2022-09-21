<?php

class CalculatorTest extends \PHPUnit\Framework\TestCase {
    public function testAdd() {

        $calculator = new App\Calculator;

        // add test
        $addResult = $calculator->add(20,20);
        $this->assertEquals(40, $addResult);

        // right shift test
        $rightShiftResult = $calculator->rightShift(5);
        $this->assertEquals(2, $rightShiftResult);
        
        // right shift test
        $leftShiftResult = $calculator->leftShift(5);
        $this->assertEquals(10, $leftShiftResult);

        // and test
        $andResult = $calculator->and(5, 10);
        $this->assertEquals(TRUE, $andResult);

        // or test
        $andResult = $calculator->and(8, 10);
        $this->assertEquals(TRUE, $andResult);
    }


}