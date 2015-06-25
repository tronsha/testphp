<?php

/**
 * Class FunctionSrandTest
 * @link http://php.net/manual/en/function.srand.php
 */
class FunctionSrandTest extends PHPUnit_Framework_TestCase
{
    public function make_seed()
    {
        list($usec, $sec) = explode(' ', microtime());
        return (float) $sec + ((float) $usec * 100000);
    }

    public function testFunctionSrand()
    {
        srand($this->make_seed());
        $randval = rand(5, 15);
        $this->assertTrue($randval >= 5 && $randval <= 15);
    }
}


