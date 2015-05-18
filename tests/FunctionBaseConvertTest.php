<?php

/**
 * Class FunctionBaseConvertTest
 * @link http://php.net/manual/en/function.base-convert.php
 */
class FunctionBaseConvertTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionBaseConvert()
    {
        $hexadecimal = 'A37334';
        $this->assertEquals('101000110111001100110100', base_convert($hexadecimal, 16, 2));
    }
}
