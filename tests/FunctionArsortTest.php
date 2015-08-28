<?php

/**
 * Class FunctionArsortTest
 * @link http://php.net/manual/en/function.arsort.php
 */
class FunctionArsortTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArsort()
    {
        $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
        arsort($fruits);
        $this->expectOutputString("a = orange\nd = lemon\nb = banana\nc = apple\n");
        foreach ($fruits as $key => $val) {
            echo "$key = $val\n";
        }
    }
}
