<?php

/**
 * Class FunctionUcwordsTest
 * @link http://php.net/manual/en/function.ucwords.php
 */
class FunctionUcwordsTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionUcwords()
    {
        $foo = 'hello world!';
        $foo = ucwords($foo);
        $this->assertEquals('Hello World!', $foo);
        $bar = 'HELLO WORLD!';
        $bar = ucwords($bar);
        $this->assertEquals('HELLO WORLD!', $bar);
        $bar = ucwords(strtolower($bar));
        $this->assertEquals('Hello World!', $bar);
    }
}
