<?php

/**
 * Class FunctionAcosTest
 * @link http://php.net/manual/en/function.acos.php
 * @link http://en.wikipedia.org/wiki/Inverse_trigonometric_functions
 */
class FunctionAcosTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionAcos()
    {
        $this->assertEquals(M_PI, acos(-1));
        $this->assertEquals(0, acos(1));
        $this->assertEquals(M_PI_2, acos(0));
    }
}
