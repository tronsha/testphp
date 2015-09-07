<?php

/**
 * Class FunctionKrsortTest
 * @link http://php.net/manual/en/function.krsort.php
 */
class FunctionKrsortTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionKrsort()
    {
        $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
        krsort($fruits);
        $this->expectOutputString("d = lemon\nc = apple\nb = banana\na = orange\n");
        foreach ($fruits as $key => $val) {
            echo "$key = $val\n";
        }
    }
}
