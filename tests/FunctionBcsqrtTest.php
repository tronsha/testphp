<?php

/**
 * Class FunctionBcsqrtTest
 * @link http://php.net/manual/en/function.bcsqrt.php
 */
class FunctionBcsqrtTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionBcsqrt()
    {
        $this->assertEquals(1.414, bcsqrt('2', 3));
    }
}
