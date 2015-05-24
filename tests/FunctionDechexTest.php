<?php

/**
 * Class FunctionDechexTest
 * @link http://php.net/manual/en/function.dechex.php
 */
class FunctionDechexTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionDechex()
    {
        $this->assertEquals('a', dechex(10));
        $this->assertEquals('2f', dechex(47));
    }
}
