<?php

/**
 * Class FunctionRsortTest
 * @link http://php.net/manual/en/function.rsort.php
 */
class FunctionRsortTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionRsort()
    {
        $fruits = array("lemon", "orange", "banana", "apple");
        rsort($fruits);
        $this->expectOutputString("0 = orange\n1 = lemon\n2 = banana\n3 = apple\n");
        foreach ($fruits as $key => $val) {
            echo "$key = $val\n";
        }
    }
}
