<?php

/**
 * Class FunctionWordwrapTest
 * @link http://php.net/manual/en/function.wordwrap.php
 */
class FunctionWordwrapTest extends PHPUnit_Framework_TestCase
{
    public function testFunctioWordwrap()
    {
        $text = "The quick brown fox jumped over the lazy dog.";
        $newtext = wordwrap($text, 20, "<br />\n");
        $this->assertEquals("The quick brown fox<br />\njumped over the lazy<br />\ndog.", $newtext);
        $text = "A very long woooooooooooord.";
        $newtext = wordwrap($text, 8, "\n", true);
        $this->assertEquals("A very\nlong\nwooooooo\nooooord.", $newtext);
    }
}
