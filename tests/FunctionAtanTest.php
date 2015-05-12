<?php

/**
 * Class FunctionAtanTest
 * @link http://php.net/manual/en/function.atan.php
 * @link http://en.wikipedia.org/wiki/Inverse_trigonometric_functions
 */
class FunctionAtanTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionAtan()
    {
        $this->assertEquals(0, atan(0));
        $this->assertEquals(M_PI_4, atan(1));
        $this->assertEquals(M_PI / 3, atan(sqrt(3)));
    }
}
