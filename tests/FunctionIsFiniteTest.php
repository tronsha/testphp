<?php

/**
 * Class FunctionIsFiniteTest
 * @link http://php.net/manual/en/function.is-finite.php
 */
class FunctionIsFiniteTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionIsFinite()
    {
        $this->assertTrue(is_finite(2));
        $this->assertFalse(is_finite(log(0)));
    }
}
