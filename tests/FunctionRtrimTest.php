<?php

/**
 * Class FunctionRtrimTest
 * @link http://php.net/manual/en/function.rtrim.php
 */
class FunctionRtrimTest extends PHPUnit_Framework_TestCase
{
    public function testFunctioRtrim()
    {
        $text = "\t\tThese are a few words :) ...  ";
        $binary = "\x09Example string\x0A";
        $hello  = "Hello World";
        $this->assertEquals("\t\t" . 'These are a few words :) ...', rtrim($text));
        $this->assertEquals("\t\t" . 'These are a few words :)', rtrim($text, " \t."));
        $this->assertEquals('Hello Wor', rtrim($hello, "Hdle"));
        $this->assertEquals("\x09" . 'Example string', rtrim($binary, "\x00..\x1F"));
    }
}
