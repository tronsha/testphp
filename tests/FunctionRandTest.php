<?php

/**
 * Class FunctionRandTest
 * @link http://php.net/manual/en/function.rand.php
 */
class FunctionRandTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionRand()
    {
        $rand = rand(5, 15);
        $this->assertTrue($rand >= 5 && $rand <= 15);
    }
}
