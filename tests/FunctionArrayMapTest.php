<?php

/**
 * Class FunctionArrayMapTest
 * @link http://php.net/manual/en/function.array-map.php
 */
class FunctionArrayMapTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayMap()
    {
        $this->assertEquals(
            array(0 => 1, 1 => 8, 2 => 27, 3 => 64, 4 => 125),
            array_map("cube", array(1, 2, 3, 4, 5))
        );
    }

    /**
     * @requires PHP 5.3
     */
    public function testFunctionArrayLambda()
    {
        if (version_compare(phpversion(), '5.3.0', '>=') === true) {
            $func = function ($value) {
                return $value * 2;
            };
            $this->assertEquals(array(0 => 2, 1 => 4, 2 => 6, 3 => 8, 4 => 10), array_map($func, range(1, 5)));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.3.0');
        }
    }

    public function testFunctionArrayLambdaArrayOfArrays()
    {
        $a = array(1, 2, 3, 4, 5);
        $b = array("one", "two", "three", "four", "five");
        $c = array("uno", "dos", "tres", "cuatro", "cinco");
        $output = array(
            0 => array(0 => 1, 1 => 'one', 2 => 'uno'),
            1 => array(0 => 2, 1 => 'two', 2 => 'dos'),
            2 => array(0 => 3, 1 => 'three', 2 => 'tres'),
            3 => array(0 => 4, 1 => 'four', 2 => 'cuatro'),
            4 => array(0 => 5, 1 => 'five', 2 => 'cinco')
        );
        $this->assertEquals($output, array_map(null, $a, $b, $c));
    }
}

if (function_exists('cube') === false) {
    function cube($n)
    {
        return ($n * $n * $n);
    }
}
