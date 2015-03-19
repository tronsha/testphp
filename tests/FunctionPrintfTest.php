<?php

/**
 * Class FunctionPrintfTest
 * @link http://php.net/manual/de/function.printf.php
 */
class FunctionPrintfTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionPrintfString()
    {
        $string = 'foo';
        $this->expectOutputString('foo');
        printf('%s', $string);
    }

    public function testFunctionPrintfFloat()
    {
        $int = 1;
        $this->expectOutputString('1.00');
        printf('%.2f', $int);
    }
}
