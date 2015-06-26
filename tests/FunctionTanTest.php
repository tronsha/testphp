<?php

/**
 * Class FunctionTanTest
 * @link http://php.net/manual/en/function.tan.php
 * @link http://en.wikipedia.org/wiki/Trigonometric_functions
 */
class FunctionTanTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionTan()
    {
        $this->assertEquals(1, tan(M_PI_4));
        $this->assertEquals(sin(M_PI) / cos(M_PI), tan(M_PI));
    }
}
