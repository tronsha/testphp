<?php

/**
 * Class FunctionArrayMergeRecursiveTest
 * @link http://php.net/manual/en/function.array-merge-recursive.php
 */
class FunctionArrayMergeRecursiveTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayMergeRecursive()
    {
        $ar1 = array("color" => array("favorite" => "red"), 5);
        $ar2 = array(10, "color" => array("favorite" => "green", "blue"));
        $result = array_merge_recursive($ar1, $ar2);
        $this->assertEquals(
            array('color' => array('favorite' => array(0 => 'red', 1 => 'green'), 0 => 'blue'), 0 => 5, 1 => 10),
            $result
        );
    }
}
