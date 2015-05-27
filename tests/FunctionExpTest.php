<?php

/**
 * Class FunctionExpTest
 * @link http://php.net/manual/en/function.exp.php
 */
class FunctionExpTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionnExp()
    {
        $this->assertEquals(162754.79141900392, exp(12));
        $this->assertEquals(298.86740096706029, exp(5.7));
    }
}
