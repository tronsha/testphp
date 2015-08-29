<?php

/**
 * Class FunctionAsortTest
 * @link http://php.net/manual/en/function.asort.php
 */
class FunctionAsortTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionAsort()
    {
        $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
        asort($fruits);
        $this->expectOutputString("c = apple\nb = banana\nd = lemon\na = orange\n");
        foreach ($fruits as $key => $val) {
            echo "$key = $val\n";
        }
    }
}
