<?php

use PHPUnit\Framework\TestCase;

class ArrayTest extends TestCase
{
    public function testNegativeForassertIsArray()

    {
        $variable  =  array("not", "string");

        $this->assertIsArray(
            $variable,
            "variable is not an array"
        );
        $this->assertIsString(
            $variable,
            "variable is not a string"
        );
    }
}
