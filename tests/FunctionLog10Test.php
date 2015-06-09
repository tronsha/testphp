<?php

/**
 * Class FunctionLog10Test
 * @link http://php.net/manual/en/function.log10.php
 */
class FunctionLog10Test extends PHPUnit_Framework_TestCase
{
    public function testFunctionLog10()
    {
        $this->assertEquals(3, log10(1000));
    }
}
