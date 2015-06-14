<?php

/**
 * Class FunctionMtRandTest
 * @link http://php.net/manual/en/function.mt-rand.php
 */
class FunctionMtRandTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionMtRand()
    {
        $rand = mt_rand(5, 15);
        $this->assertTrue($rand >= 5 && $rand <= 15);
    }
}
