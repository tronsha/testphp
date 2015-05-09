<?php

/**
 * Class FunctionAsinTest
 * @link http://php.net/manual/en/function.asin.php
 * @link http://en.wikipedia.org/wiki/Inverse_trigonometric_functions
 */
class FunctionAsinTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionAsin()
    {

        $this->assertEquals(0.0, asin(0));
        $this->assertEquals(M_PI_2, asin(1));
        $this->assertEquals(-M_PI_2, asin(-1));
    }
}
