<?php

/**
 * Class FunctionSscanfTest
 * @link http://php.net/manual/en/function.sscanf.php
 */
class FunctionSscanfTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionSscanf()
    {
        $this->assertEquals(array('2350001'), sscanf("SN/2350001", "SN/%d"));
        $this->assertEquals(array('Januar', 1, 2000), sscanf("Januar 01 2000", "%s %d %d"));
        $auth = "24\tLewis Carroll";
        $n = sscanf($auth, "%d\t%s %s", $id, $first, $last);
        $this->assertEquals(24, $id);
        $this->assertEquals('Lewis', $first);
        $this->assertEquals('Carroll', $last);
    }
}
