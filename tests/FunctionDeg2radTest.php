<?php

/**
 * Class FunctionDeg2radTest
 * @link http://php.net/manual/en/function.deg2rad.php
 */
class FunctionDeg2radTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionnDeg2rad()
    {
        $this->assertEquals(0.785398163397, deg2rad(45));
        $this->assertTrue(deg2rad(45) === M_PI_4);
    }
}
