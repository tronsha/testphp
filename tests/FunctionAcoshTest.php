<?php

/**
 * Class FunctionAcoshTest
 * @link http://php.net/manual/en/function.acosh.php
 */
class FunctionAcoshTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionAcosh()
    {
        $this->assertEquals(0, acosh(1));
        $x = 100;
        $this->assertEquals(log($x + sqrt(pow($x, 2) - 1), M_E), acosh($x));
    }
}
