<?php

/**
 * Class FunctionArrayWalkTest
 * @link http://php.net/manual/en/function.array-walk.php
 */
class FunctionArrayWalkTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayWalk()
    {
        $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
        echo "Before ...:\n";
        array_walk($fruits, 'test_print');
        array_walk($fruits, 'test_alter', 'fruit');
        echo "... and after:\n";
        array_walk($fruits, 'test_print');
        $this->expectOutputString("Before ...:\nd. lemon\na. orange\nb. banana\nc. apple\n... and after:\nd. fruit: lemon\na. fruit: orange\nb. fruit: banana\nc. fruit: apple\n");
    }
}

if (function_exists('test_alter') === false) {
    function test_alter(&$item1, $key, $prefix)
    {
        $item1 = "$prefix: $item1";
    }
}

if (function_exists('test_print') === false) {
    function test_print($item, $key)
    {
        echo $key . ', ' . $item . "\n";
    }
}
