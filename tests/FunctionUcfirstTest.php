<?php

/**
 * Class FunctionUcfirstTest
 * @link http://php.net/manual/en/function.ucfirst.php
 */
class FunctionUcfirstTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionUcfirst()
    {
        $foo = 'hello world!';
        $foo = ucfirst($foo);
        $this->assertEquals('Hello world!', $foo);
        $bar = 'HELLO WORLD!';
        $bar = ucfirst($bar);
        $this->assertEquals('HELLO WORLD!', $bar);
        $bar = ucfirst(strtolower($bar));
        $this->assertEquals('Hello world!', $bar);
    }
}
