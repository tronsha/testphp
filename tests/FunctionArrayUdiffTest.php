<?php

/**
 * Class FunctionArrayUdiffTest
 * @link http://php.net/manual/en/function.array-udiff.php
 */
class FunctionArrayUdiffTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayUdiff()
    {
        $array1 = array(
            new stdclass,
            new stdclass,
            new stdclass,
            new stdclass,
        );
        $array2 = array(
            new stdclass,
            new stdclass,
        );
        $array1[0]->width = 11;
        $array1[0]->height = 3;
        $array1[1]->width = 7;
        $array1[1]->height = 1;
        $array1[2]->width = 2;
        $array1[2]->height = 9;
        $array1[3]->width = 5;
        $array1[3]->height = 7;
        $array2[0]->width = 7;
        $array2[0]->height = 5;
        $array2[1]->width = 9;
        $array2[1]->height = 2;

        $result = array_udiff($array1, $array2, 'compare_by_area');

        $this->assertEquals(
            'Array([0]=>stdClassObject([width]=>11[height]=>3)[1]=>stdClassObject([width]=>7[height]=>1))',
            preg_replace('/\s+/', '', print_r($result, true))
        );

    }
}

if (function_exists('compare_by_area') === false) {
    function compare_by_area($a, $b)
    {
        $areaA = $a->width * $a->height;
        $areaB = $b->width * $b->height;

        if ($areaA < $areaB) {
            return -1;
        } elseif ($areaA > $areaB) {
            return 1;
        } else {
            return 0;
        }
    }
}
