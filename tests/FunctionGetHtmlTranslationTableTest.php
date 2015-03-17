<?php

/**
 * Class FunctionGetHtmlTranslationTableTest
 * @link http://php.net/manual/en/function.get-html-translation-table.php
 */
class FunctionGetHtmlTranslationTableTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionGetHtmlTranslationTable()
    {
        if (version_compare(phpversion(), '5.4.0', '>=') === true) {
            $array = get_html_translation_table(HTML_ENTITIES, ENT_QUOTES | ENT_HTML5);
            $this->assertEquals('&quot;', $array['"']);
            $this->assertEquals('&num;', $array['#']);
            $this->assertEquals('&dollar;', $array['$']);
            $this->assertEquals('&percnt;', $array['%']);
            $this->assertEquals('&amp;', $array['&']);
        }
    }
}
