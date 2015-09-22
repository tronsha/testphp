<?php

/**
 * Class FunctionUksortTest
 * @link http://php.net/manual/en/function.uksort.php
 */
class FunctionUksortTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionUksort()
    {
        $a = array("John" => 1, "the Earth" => 2, "an apple" => 3, "a banana" => 4);
        uksort($a, "cmpUksort");
        $this->expectOutputString("an apple: 3\na banana: 4\nthe Earth: 2\nJohn: 1\n");
        foreach ($a as $key => $value) {
            echo "$key: $value\n";
        }
    }
}

if (function_exists('cmp2') === false) {
    function cmpUksort($a, $b)
    {
        $a = preg_replace('@^(a|an|the) @', '', $a);
        $b = preg_replace('@^(a|an|the) @', '', $b);
        return strcasecmp($a, $b);
    }
}
