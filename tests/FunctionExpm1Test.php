<?php

/**
 * Class FunctionExpm1Test
 * @link http://php.net/manual/en/function.expm1.php
 */
class FunctionExpm1Test extends PHPUnit_Framework_TestCase
{
    public function testFunctionnExpm1()
    {
        $this->assertEquals(0, expm1(0));
        $this->assertEquals(pow(M_E, 2) - 1, expm1(2));
    }
}
