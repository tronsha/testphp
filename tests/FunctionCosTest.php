<?php

/**
 * Class FunctionCosTest
 * @link http://php.net/manual/en/function.cos.php
 * @link http://en.wikipedia.org/wiki/Trigonometric_functions
 */
class FunctionCosTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionCos()
    {
        $this->assertEquals(-1, cos(M_PI));
    }
}
