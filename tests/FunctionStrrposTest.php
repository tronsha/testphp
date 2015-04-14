<?php

/**
 * Class FunctionStrrposTest
 * @link http://php.net/manual/en/function.strrpos.php
 */
class FunctionStrrposTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStrrpos()
    {
        $foo = "0123456789a123456789b123456789c";
        $this->assertEquals(17, strrpos($foo, '7', -5));
        $this->assertEquals(27, strrpos($foo, '7', 20));
        $this->assertFalse(strrpos($foo, '7', 28));
    }
}
