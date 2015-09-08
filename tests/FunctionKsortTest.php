<?php

/**
 * Class FunctionKsortTest
 * @link http://php.net/manual/en/function.ksort.php
 */
class FunctionKsortTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionKort()
    {
        $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
        ksort($fruits);
        $this->expectOutputString("a = orange\nb = banana\nc = apple\nd = lemon\n");
        foreach ($fruits as $key => $val) {
            echo "$key = $val\n";
        }
    }
}
