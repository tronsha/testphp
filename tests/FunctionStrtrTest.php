<?php

/**
 * Class FunctionStrtrTest
 * @link http://php.net/manual/en/function.strtr.php
 */
class FunctionStrtrTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStrtr()
    {
        $trans = array("h" => "-", "hello" => "hi", "hi" => "hello");
        $this->assertEquals('hello all, I said hi', strtr("hi all, I said hello", $trans));
        $this->assertEquals('1001', strtr("baab", "ab", "01"));
        $trans = array("ab" => "01");
        $this->assertEquals('ba01', strtr("baab", $trans));
    }
}
