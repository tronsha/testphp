<?php

/**
 * Class FunctionStrncmpTest
 * @link http://php.net/manual/en/function.strncmp.php
 */
class FunctionStrncmpTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStrncmp()
    {
        $this->assertEquals(-32, (strncmp("Hello", "hello", 5)));
        $this->assertEquals(32, (strncmp("hello", "Hello", 5)));
        $this->assertEquals(0, (strncmp("Hello", "Hello", 5)));
        $this->assertEquals(4, (strncmp("Hello World", "Hello Sun", 8)));
        $this->assertEquals(0, (strncmp("Hello World", "Hello Sun", 5)));
    }
}
