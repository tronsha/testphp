<?php

/**
 * Class FunctionStrShuffleTest
 * @link http://php.net/manual/en/function.str-shuffle.php
 */
class FunctionStrShuffleTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStrShuffle()
    {
        $str = 'abc';
        $s = str_shuffle($str);
        $this->assertTrue($s == 'abc' || $s == 'acb' || $s == 'bac' || $s == 'bca' || $s == 'cab' || $s == 'cba');
    }
}
