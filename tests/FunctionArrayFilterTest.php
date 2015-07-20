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

    /**
     * @requires PHP 5.6
     */
    public function testFunctionArrayFilterFlag()
    {
        if (version_compare(phpversion(), '5.6.0', '>=') === true) {
            $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4);
            $this->assertEquals(
                array('b' => 2),
                array_filter(
                    $arr,
                    function ($k) {
                        return $k == 'b';
                    },
                    ARRAY_FILTER_USE_KEY
                )
            );
            $this->assertEquals(
                array('b' => 2, 'd' => 4),
                array_filter(
                    $arr,
                    function ($v, $k) {
                        return $k == 'b' || $v == 4;
                    },
                    ARRAY_FILTER_USE_BOTH
                )
            );
        } else {
            $info = phpversion() . ' < 5.6.0';
        }
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
