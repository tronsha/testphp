<?php

/**
 * Class FunctionRad2degTest
 * @link http://php.net/manual/en/function.rad2deg.php
 */
class FunctionRad2degTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionRad2deg()
    {
        $this->assertEquals(45, rad2deg(M_PI_4));
    }
}
