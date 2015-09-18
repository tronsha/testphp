<?php

/**
 * Class FunctionSortTest
 * @link http://php.net/manual/en/function.sort.php
 */
class FunctionSortTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionSort()
    {
        $fruits = array("lemon", "orange", "banana", "apple");
        sort($fruits);
        $this->expectOutputString("0 = apple\n1 = banana\n2 = lemon\n3 = orange\n");
        foreach ($fruits as $key => $val) {
            echo "$key = $val\n";
        }
    }

    /**
     * @requires PHP 5.4
     */
    public function testFunctionSortNatural()
    {
        if (version_compare(phpversion(), '5.4.0', '>=') === true) {
            $fruits = array("Orange1", "orange2", "Orange3", "orange20");
            sort($fruits, SORT_NATURAL | SORT_FLAG_CASE);
            $this->expectOutputString("0 = Orange1\n1 = orange2\n2 = Orange3\n3 = orange20\n");
            foreach ($fruits as $key => $val) {
                echo "$key = $val\n";
            }
        } else {
            $info = phpversion() . ' < 5.4.0';
        }
    }
}
