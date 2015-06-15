<?php

/**
 * Class FunctionMtSrandTest
 * @link http://php.net/manual/en/function.mt-srand.php
 */
class FunctionMtSrandTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionMtSrand()
    {
        function make_seed()
        {
            list($usec, $sec) = explode(' ', microtime());
            return (float) $sec + ((float) $usec * 100000);
        }
        mt_srand(make_seed());
        $rand = mt_rand(5, 15);
        $this->assertTrue($rand >= 5 && $rand <= 15);
    }
}
