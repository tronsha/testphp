<?php

/**
 * Class FunctionHtmlspecialcharsDecodeTest
 * @link http://php.net/manual/en/function.htmlspecialchars-decode.php
 */
class FunctionHtmlspecialcharsDecodeTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionHtmlspecialcharsDecode()
    {
        if (version_compare(phpversion(), '5.1.0', '>=') === true) {
            $str = "<p>this -&gt; &quot;</p>";
            $this->assertEquals('<p>this -> "</p>', htmlspecialchars_decode($str));
            $this->assertEquals('<p>this -> &quot;</p>', htmlspecialchars_decode($str, ENT_NOQUOTES));
        } else {
            $info = phpversion() . ' < 5.1.0';
        }
    }
}
