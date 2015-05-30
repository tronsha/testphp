<?php

/**
 * Class FunctionFmodTest
 * @link http://php.net/manual/en/function.fmod.php
 */
class FunctionFmodTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionFmod()
    {
        $this->assertEquals(0.5, fmod(5.7, 1.3));
    }
}
