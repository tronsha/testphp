<?php

/**
 * Class FunctionAtan2Test
 * @link http://php.net/manual/en/function.atan2.php
 * @link http://en.wikipedia.org/wiki/Inverse_trigonometric_functions
 */
class FunctionAtan2Test extends PHPUnit_Framework_TestCase
{
    public function testFunctionAtan2()
    {
        $this->assertEquals(0, atan2(0, 1));
        $this->assertEquals(M_PI_4, atan2(1, 1));
        $this->assertEquals(M_PI / 3, atan2(sqrt(3), 1));
        $this->assertEquals(M_PI / 6, atan2(1, sqrt(3)));
    }
}
