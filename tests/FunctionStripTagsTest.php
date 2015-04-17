<?php

/**
 * Class FunctionStripTagsTest
 * @link http://php.net/manual/en/function.strip-tags.php
 */
class FunctionStripTagsTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStripTags()
    {
        $text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
        $this->assertEquals('Test paragraph. Other text', strip_tags($text));
    }

    /**
     * @requires PHP 5.3.4
     */
    public function testFunctionStripTagsAllowableTags()
    {
        if (version_compare(phpversion(), '5.3.4', '>=') === true) {
            $text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
            $this->assertEquals('<p>Test paragraph.</p> <a href="#fragment">Other text</a>', strip_tags($text, '<p><a>'));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.3.4');
        }
    }
}
