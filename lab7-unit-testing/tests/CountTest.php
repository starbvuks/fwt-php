<?php

use PHPUnit\Framework\TestCase;

class CountTest extends TestCase
{
    public function testNegativeForassertIsArray()

    {
        $variable  =  array("this", "is", "an", "array");
        $expectedCount = 3;

        $this->assertCount(
            $expectedCount,
            $variable,
            "Array doesn't contains 3 elements"
        );
    }
}
