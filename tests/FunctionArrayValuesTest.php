<?php

/**
 * Class FunctionArrayValuesTest
 * @link http://php.net/manual/en/function.array-values.php
 */
class FunctionArrayValuesTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayValues()
    {
        $array = array("size" => "XL", "color" => "gold");
        $this->assertEquals(array(0 => "XL", 1 => "gold"), array_values($array));
    }
}
