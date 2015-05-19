<?php

/**
 * Class FunctionBindecTest
 * @link http://php.net/manual/en/function.bindec.php
 */
class FunctionBindecTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionBindec()
    {
        $this->assertEquals(51, bindec('110011'));
        $this->assertEquals(51, bindec('000110011'));
        $this->assertEquals(7, bindec('111'));
    }
}
