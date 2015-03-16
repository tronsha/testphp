<?php

/**
 * Class FunctionEchoTest
 * @link http://php.net/manual/de/function.echo.php
 */
class FunctionEchoTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionEcho()
    {
        $this->expectOutputString('foo');
        echo 'foo';
    }
}
