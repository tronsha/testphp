<?php

/**
 * Class FunctionPiTest
 * @link http://php.net/manual/en/function.pi.php
 */
class FunctionPiTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionPi()
    {
        $this->assertEquals(3.1415926535898, pi());
        $this->assertEquals(3.1415926535898, M_PI);
    }
}
