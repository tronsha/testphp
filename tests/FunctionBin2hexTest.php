<?php

/**
 * Class FunctionBin2hexTest
 * @link http://php.net/manual/en/function.bin2hex.php
 */
class FunctionBin2hexTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionBin2hex()
    {
        $this->assertEquals('48656c6c6f', bin2hex('Hello'));
    }
}
