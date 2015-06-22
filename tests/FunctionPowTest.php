<?php

/**
 * Class FunctionPowTest
 * @link http://php.net/manual/en/function.pow.php
 */
class FunctionPowTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionPow()
    {
        $this->assertEquals(256, pow(2, 8));
        $this->assertEquals(1, pow(-1, 20));
        $this->assertEquals(1, pow(0, 0));
        $this->assertNan(pow(-1, 5.5));
    }
}
