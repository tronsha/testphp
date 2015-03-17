<?php

/**
 * Class FunctionHtmlEntityDecodeTest
 * @link http://php.net/manual/en/function.html-entity-decode.php
 */
class FunctionHtmlEntityDecodeTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionHtmlEntityDecode()
    {
        $orig = "I'll \"walk\" the <b>dog</b> now";
        $a = htmlentities($orig);
        $b = html_entity_decode($a);
        $this->assertEquals("I'll &quot;walk&quot; the &lt;b&gt;dog&lt;/b&gt; now", $a);
        $this->assertEquals("I'll \"walk\" the <b>dog</b> now", $b);
    }
}
