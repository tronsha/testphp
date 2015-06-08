<?php

/**
 * Class FunctionLcgValueTest
 * @link http://php.net/manual/en/function.lcg-value.php
 */
class FunctionLcgValueTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionLcgValue()
    {
        $x = lcg_value();
        $this->assertTrue($x > 0);
        $this->assertTrue($x < 1);
    }
}
