<?php

/**
 * Class FunctionIsNanTest
 * @link http://php.net/manual/en/function.is-nan.php
 */
class FunctionIsNanTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionIsNan()
    {
        $this->assertTrue(is_nan(acos(8)));
    }
}
