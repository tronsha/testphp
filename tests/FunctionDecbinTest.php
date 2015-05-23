<?php

/**
 * Class FunctionDecbinTest
 * @link http://php.net/manual/en/function.decbin.php
 */
class FunctionDecbinTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionDecbin()
    {
        $this->assertEquals('1100', decbin(12));
        $this->assertEquals('11010', decbin(26));
    }
}
