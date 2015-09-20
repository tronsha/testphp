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
