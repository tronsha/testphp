<?php

/**
 * Class FunctionNl2brTest
 * @link http://php.net/manual/en/function.nl2br.php
 */
class FunctionNl2brTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionNl2br()
    {
        $this->assertEquals("foo isn't<br />\n bar", nl2br("foo isn't\n bar"));
        if (version_compare(phpversion(), '5.3.0', '>=') === true) {
            $this->assertEquals("Welcome<br>\r\nThis is my HTML document",
                nl2br("Welcome\r\nThis is my HTML document", false));
        } else {
            $info = phpversion() . ' < 5.3.0';
        }
        $this->assertEquals("This<br />\r\nis<br />\n\ra<br />\nstring<br />\r", nl2br("This\r\nis\n\ra\nstring\r"));
    }
}
