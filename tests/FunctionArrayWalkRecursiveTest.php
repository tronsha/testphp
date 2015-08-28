<?php

/**
 * Class FunctionArrayWalkRecursiveTest
 * @link http://php.net/manual/en/function.array-walk-recursive.php
 */
class FunctionArrayWalkRecursiveTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayWalkRecursive()
    {
        $sweet = array('a' => 'apple', 'b' => 'banana');
        $fruits = array('sweet' => $sweet, 'sour' => 'lemon');
        array_walk_recursive($fruits, 'test_print');
        $this->expectOutputString("a. apple\nb. banana\nsour. lemon\n");
    }
}

if (function_exists('test_print') === false) {
    function test_print($item, $key)
    {
        echo $key . '. ' . $item . "\n";
    }
}
