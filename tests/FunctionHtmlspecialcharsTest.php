<?php

/**
 * Class FunctionHtmlspecialcharsTest
 * @link http://php.net/manual/en/function.htmlspecialchars.php
 */
class FunctionHtmlspecialcharsTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionHtmlspecialchars()
    {
        $new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
        $this->assertEquals('&lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;', $new);
    }
}
