<?php

/**
 * Class FunctionAbsTest
 * @link http://php.net/manual/en/function.abs.php
 */
class FunctionAbsTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionAbs()
    {
        $this->assertEquals(4.2, abs(-4.2));
        $this->assertEquals(5, abs(5));
        $this->assertEquals(5, abs(-5));
    }
}
