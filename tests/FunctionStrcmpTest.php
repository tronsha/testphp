<?php

/**
 * Class FunctionStrcmpTest
 * @link http://php.net/manual/en/function.strcmp.php
 */
class FunctionStrcmpTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStrcmp()
    {
        $this->assertEquals(-32, (strcmp("Hello", "hello")));
        $this->assertEquals(32, (strcmp("hello", "Hello")));
        $this->assertEquals(0, (strcmp("Hello", "Hello")));
    }
}
