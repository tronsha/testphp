<?php

/**
 * Class FunctionUasortTest
 * @link http://php.net/manual/en/function.uasort.php
 */
class FunctionUasortTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionUasort()
    {
        $array = array('a' => 4, 'b' => 8, 'c' => -1, 'd' => -9, 'e' => 2, 'f' => 5, 'g' => 3, 'h' => -4);
        uasort($array, 'cmp');
        $this->assertEquals(
            'Array([d]=>-9[h]=>-4[c]=>-1[e]=>2[g]=>3[a]=>4[f]=>5[b]=>8)',
            preg_replace('/\s+/', '', print_r($array, true))
        );

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
