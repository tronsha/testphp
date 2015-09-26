<?php

/**
 * Class FunctionCtypeDigitTest
 * @link http://php.net/manual/en/function.ctype-digit.php
 */
class FunctionCtypeDigitTest extends PHPUnit_Framework_TestCase
{
    public function testFunctioCtypeDigit()
    {
        $strings = array('1820.20', '10002', 'wsl!12');
        $this->assertFalse(ctype_digit($strings[0]));
        $this->assertTrue(ctype_digit($strings[1]));
        $this->assertFalse(ctype_digit($strings[2]));
    }

    public function testFunctioCtypeDigitComparing()
    {
        $numeric_string = '42';
        $integer = 42;
        $this->assertTrue(ctype_digit($numeric_string));
        $this->assertFalse(ctype_digit($integer));
        $this->assertTrue(is_numeric($numeric_string));
        $this->assertTrue(is_numeric($integer));
    }
}
