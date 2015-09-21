<?php

/**
 * Class FunctionUsortTest
 * @link http://php.net/manual/en/function.usort.php
 */
class FunctionUsortTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionUsort()
    {
        $a = array(3, 2, 5, 6, 1);
        usort($a, "cmp");
        $this->expectOutputString("0: 1\n1: 2\n2: 3\n3: 5\n4: 6\n");
        foreach ($a as $key => $value) {
            echo "$key: $value\n";
        }
    }

    public function testFunctionUsortClosure()
    {
        $array[0] = array('key_a' => 'z', 'key_b' => 'c');
        $array[1] = array('key_a' => 'x', 'key_b' => 'b');
        $array[2] = array('key_a' => 'y', 'key_b' => 'a');
        usort($array, build_sorter('key_b'));
        $this->expectOutputString("y, a\nx, b\nz, c\n");
        foreach ($array as $item) {
            echo $item['key_a'] . ', ' . $item['key_b'] . "\n";
        }
    }
}

if (function_exists('cmp') === false) {
    function cmp($a, $b)
    {
        if ($a == $b) {
            return 0;
        }
        return ($a < $b) ? -1 : 1;
    }
}

if (function_exists('build_sorter') === false) {
    function build_sorter($key)
    {
        return function ($a, $b) use ($key) {
            return strnatcmp($a[$key], $b[$key]);
        };
    }
}
