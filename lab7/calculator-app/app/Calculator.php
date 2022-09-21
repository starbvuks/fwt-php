<?php

namespace App;

class Calculator{
    
    public function add($num1, $num2) {
        return $num1 + $num2;
    }   

    public function subtract($num1, $num2) {
        return $num1 - $num1;
    }

    public function multiply($num1, $num2) {
        return $num1 * $num2;
    }

    public function divide($num1, $num2) {
        return $num1 / $num2;
    }

    public function rightShift($num1) {
        return $num1 >> 1;
    }

    public function leftShift($num1) {
        return $num1 << 1;
    }

    public function and($num1, $num2) {
        if($num1 = 5 and $num2 = 10) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function or($num1, $num2) {
        if($num1 = 5 or $num2 = 10) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}