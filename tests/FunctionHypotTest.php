<?php

/**
 * Class FunctionHypotTest
 * @link http://php.net/manual/en/function.hypot.php
 * @link http://en.wikipedia.org/wiki/Hypotenuse
 */
class FunctionHypotTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionHypot()
    {
        $a = 3;
        $b = 4;
        $this->assertEquals(sqrt(pow($a, 2) + pow($b, 2)), hypot($a, $b));
        $this->assertEquals(5, hypot(3, 4));
    }
}
