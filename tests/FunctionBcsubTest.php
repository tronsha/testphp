<?php

/**
 * Class FunctionBcsubTest
 * @link http://php.net/manual/en/function.bcsub.php
 */
class FunctionBcsubTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionBcsub()
    {
        $a = '1.234';
        $b = '5';
        $this->assertEquals(-3, bcsub($a, $b));
        $this->assertEquals(-3.7660, bcsub($a, $b, 4));
    }
}
