<?php

/**
 * Class FunctionSinTest
 * @link http://php.net/manual/en/function.sin.php
 * @link http://en.wikipedia.org/wiki/Trigonometric_functions
 */
class FunctionSinTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionSin()
    {
        $this->assertEquals(0, sin(M_PI));
        $this->assertEquals(0.8660254037844386, sin(deg2rad(60)));
        $this->assertEquals(-0.30481062110221668, sin(60));
    }
}
