<?php

/**
 * Class FunctionTrimTest
 * @link http://php.net/manual/en/function.trim.php
 */
class FunctionTrimTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionTrim()
    {
        $text = "\t\tThese are a few words :) ...  ";
        $binary = "\x09Example string\x0A";
        $hello = "Hello World";
        $trimmed = trim($text);
        $this->assertEquals('These are a few words :) ...', $trimmed);
        $trimmed = trim($text, " \t.");
        $this->assertEquals('These are a few words :)', $trimmed);
        $trimmed = trim($hello, "Hdle");
        $this->assertEquals('o Wor', $trimmed);
        $trimmed = trim($hello, 'HdWr');
        $this->assertEquals('ello Worl', $trimmed);
        $clean = trim($binary, "\x00..\x1F");
        $this->assertEquals('Example string', $clean);
    }
}
