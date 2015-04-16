<?php

/**
 * Class FunctionStripcslashesTest
 * @link http://php.net/manual/en/function.stripcslashes.php
 */
class FunctionStripcslashesTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStripcslashes()
    {
        $str = 'I\x73 your\ name O\'reilly?';
        $this->assertEquals('Is your name O\'reilly?', stripcslashes($str));
    }
}
