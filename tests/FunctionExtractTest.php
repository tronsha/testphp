<?php

/**
 * Class FunctionExtractTest
 * @link http://php.net/manual/en/function.extract.php
 */
class FunctionExtractTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionExtract()
    {
        $size = "large";
        $var_array = array("color" => "blue", "size" => "medium", "shape" => "sphere");
        extract($var_array, EXTR_PREFIX_SAME, "wddx");
        $this->assertEquals('blue', $color);
        $this->assertEquals('large', $size);
        $this->assertEquals('sphere', $shape);
        $this->assertEquals('medium', $wddx_size);
    }
}
