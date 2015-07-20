<?php

/**
 * Class FunctionArrayFilterTest
 * @link http://php.net/manual/en/function.array-filter.php
 */
class FunctionArrayFilterTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayFilter()
    {
        $array1 = array("a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5);
        $array2 = array(6, 7, 8, 9, 10, 11, 12);
        $this->assertEquals(array('a' => 1, 'c' => 3, 'e' => 5), array_filter($array1, "odd"));
        $this->assertEquals(array(0 => 6, 2 => 8, 4 => 10, 6 => 12), array_filter($array2, "even"));
        $entry = array(0 => 'foo', 1 => false, 2 => -1, 3 => null, 4 => '');
        $this->assertEquals(array(0 => 'foo', 2 => -1), array_filter($entry));
    }
}

if (function_exists('odd') === false) {
    function odd($var)
    {
        return ($var & 1);
    }
}

if (function_exists('even') === false) {
    function even($var)
    {
        return (!($var & 1));
    }
}
