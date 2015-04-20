<?php

/**
 * Class FunctionStrSplitTest
 * @link http://php.net/manual/en/function.str-split.php
 */
class FunctionStrSplitTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStrSplit()
    {
        $str = "Hello Friend";

        $arr1 = str_split($str);
        $arr2 = str_split($str, 3);
        $this->assertEquals(array('H', 'e', 'l', 'l', 'o', ' ', 'F', 'r', 'i', 'e', 'n', 'd'), $arr1);
        $this->assertEquals(array('Hel', 'lo ', 'Fri', 'end'), $arr2);
    }
}
