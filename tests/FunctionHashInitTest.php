<?php

/**
 * Class FunctionHashInitTest
 * @link http://php.net/manual/en/function.hash-init.php
 */
class FunctionHashInitTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionHashInit()
    {
        if (version_compare(phpversion(), '5.1.2', '>=') === true) {
            $ctx = hash_init('md5');
            hash_update($ctx, 'The quick brown fox ');
            hash_update($ctx, 'jumped over the lazy dog.');
            $this->assertEquals('5c6ffbdd40d9556b73a21e63c3e0e904', hash_final($ctx));
        } else {
            $info = phpversion() . ' < 5.1.2';
        }
    }
}
