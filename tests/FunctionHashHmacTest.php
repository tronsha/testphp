<?php

/**
 * Class FunctionHashHmacTest
 * @link http://php.net/manual/en/function.hash-hmac.php
 */
class FunctionHashHmacTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionHashHmac()
    {
        if (version_compare(phpversion(), '5.1.2', '>=') === true) {
            $this->assertEquals('b8e7ae12510bdfb1812e463a7f086122cf37e4f7',
                hash_hmac('ripemd160', 'The quick brown fox jumped over the lazy dog.', 'secret'));
        } else {
            $info = phpversion() . ' < 5.1.2';
        }
    }
}
