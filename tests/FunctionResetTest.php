<?php

/**
 * Class FunctionResetTest
 * @link http://php.net/manual/en/function.reset.php
 */
class FunctionResetTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionReset()
    {
        $array = array('step one', 'step two', 'step three', 'step four');
        $this->assertEquals('step one', current($array));
        next($array);
        next($array);
        $this->assertEquals('step three', current($array));
        reset($array);
        $this->assertEquals('step one', current($array));
    }
}
