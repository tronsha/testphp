<?php

/**
 * Class FunctionAddslashesTest
 * @link http://php.net/manual/en/function.addslashes.php
 */
class FunctionAddslashesTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionAddslashes()
    {
        $str = "Is your name O'Reilly?";
        $this->assertEquals("Is your name O\\'Reilly?", addslashes($str));
    }
}
