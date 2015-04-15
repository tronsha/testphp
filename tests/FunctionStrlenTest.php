<?php

/**
 * Class FunctionStrlenTest
 * @link http://php.net/manual/en/function.strlen.php
 */
class FunctionStrlenTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStrlen()
    {
        $this->assertEquals(6, strlen('abcdef'));
        $this->assertEquals(7, strlen(' ab cd '));
    }
}
