<?php

/**
 * Class FunctionArrayReduceTest
 * @link http://php.net/manual/en/function.array-reduce.php
 */
class FunctionArrayReduceTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayReduce()
    {
        $a = array(1, 2, 3, 4, 5);
        $x = array();
        $this->assertEquals(15, array_reduce($a, "sum"));
        $this->assertEquals(1200, (array_reduce($a, "multiplication", 10)));
        $this->assertEquals("No data to reduce", (array_reduce($x, "sum", "No data to reduce")));
    }
}

if (function_exists('sum') === false) {
    function sum($carry, $item)
    {
        $carry += $item;
        return $carry;
    }
}

if (function_exists('multiplication') === false) {
    function multiplication($carry, $item)
    {
        $carry *= $item;
        return $carry;
    }
}
