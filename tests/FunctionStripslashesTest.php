<?php

/**
 * Class FunctionStripslashesTest
 * @link http://php.net/manual/en/function.stripslashes.php
 */
class FunctionStripslashesTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStripslashes()
    {
        $str = "Is your name O\'reilly?";
        $this->assertEquals("Is your name O'reilly?", stripslashes($str));
    }
}
