<?php

/**
 * Class FunctionPrintTest
 * @link http://php.net/manual/de/function.print.php
 */
class FunctionPrintTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionPrint()
    {
        $this->expectOutputString('foo');
        print 'foo';
    }
}
