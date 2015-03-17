<?php

/**
 * Class FunctionHashAlgosTest
 * @link http://php.net/manual/en/function.hash-algos.php
 */
class FunctionHashAlgosTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionHashAlgos()
    {
        if (version_compare(phpversion(), '5.1.2', '>=') === true) {
            $this->assertTrue(in_array('md5', hash_algos()));
        } else {
            $info = phpversion() . ' < 5.1.2';
        }
    }
}
