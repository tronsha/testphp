<?php

/**
 * Class FunctionHexdecTest
 * @link http://php.net/manual/en/function.hexdec.php
 */
class FunctionHexdecTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionHexdec()
    {
        $this->assertEquals(238, (hexdec("See")));
        $this->assertEquals(238, (hexdec("ee")));
        $this->assertEquals(10, (hexdec("that")));
        $this->assertEquals(160, (hexdec("a0")));
    }
}
