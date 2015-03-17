<?php

/**
 * Class FunctionHtmlentitiesTest
 * @link http://php.net/manual/en/function.htmlentities.php
 */
class FunctionHtmlentitiesTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionHtmlentities()
    {
        $str = "A 'quote' is <b>bold</b>";
        $this->assertEquals("A 'quote' is &lt;b&gt;bold&lt;/b&gt;", htmlentities($str));
        $this->assertEquals("A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;", htmlentities($str, ENT_QUOTES));
        $str = "\x8F!!!";
        $this->assertEquals('', htmlentities($str, ENT_QUOTES, "UTF-8"));
        $this->assertEquals('!!!', htmlentities($str, ENT_QUOTES | ENT_IGNORE, "UTF-8"));
    }
}
