<?php

/**
 * Class FunctionChrTest
 * @link http://php.net/manual/en/function.chr.php
 */
class FunctionChrTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionChr()
    {
        $this->assertEquals('x', chr(120));
    }
}
