<?php

/**
 * Class FunctionLtrimTest
 * @link http://php.net/manual/en/function.ltrim.php
 */
class FunctionLtrimTest extends PHPUnit_Framework_TestCase
{
    public function testFunctioLtrim()
    {
        $text = "\t\tThese are a few words :) ...  ";
        $binary = "\x09Example string\x0A";
        $hello  = "Hello World";
        $this->assertEquals('These are a few words :) ...  ', ltrim($text));
        $this->assertEquals('These are a few words :) ...  ', ltrim($text, " \t."));
        $this->assertEquals('o World', ltrim($hello, "Hdle"));
        $clean = ltrim($binary, "\x00..\x1F");
        $this->assertEquals("Example string\x0A", $clean);
    }
}
