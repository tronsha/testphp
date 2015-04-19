<?php

/**
 * Class FunctionStrWordCountTest
 * @link http://php.net/manual/en/function.str-word-count.php
 */
class FunctionStrWordCountTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStrWordCount()
    {
        $str = "Hello fri3nd, you're looking          good today!";
        $this->assertEquals(7, str_word_count($str, 0));
        $this->assertEquals(7, count(str_word_count($str, 1)));
        if (version_compare(phpversion(), '5.1.0', '>=') === true) {
            $this->assertEquals(6, count(str_word_count($str, 1, 'àáãç3')));
        } else {
            $info = phpversion() . ' < 5.1.0';
        }
    }
}
