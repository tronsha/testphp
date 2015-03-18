<?php

/**
 * Class FunctionOrdTest
 * @link http://php.net/manual/en/function.ord.php
 */
class FunctionOrdTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionOrd()
    {
        $str = "\n";
        $this->assertEquals(10, ord($str));
    }
}
