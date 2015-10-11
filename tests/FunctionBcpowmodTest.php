<?php

/**
 * Class FunctionBcpowmodTest
 * @link http://php.net/manual/en/function.bcpowmod.php
 */
class FunctionBcpowmodTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionBcpowmod()
    {
        $x = 2;
        $y = 3;
        $mod = 3;
        $a = bcpowmod($x, $y, $mod);
        $b = bcmod(bcpow($x, $y), $mod);
        $this->assertTrue($a == $b);
        $this->assertEquals(2, $a);
    }
}
