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
}

if (function_exists('cube') === false) {
    function cube($n)
    {
        return ($n * $n * $n);
    }
}
