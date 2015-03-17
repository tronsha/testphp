<?php

/**
 * Class FunctionHashFinalTest
 * @link http://php.net/manual/en/function.hash-final.php
 */
class FunctionHashFinalTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionHashFinal()
    {
        if (version_compare(phpversion(), '5.1.2', '>=') === true) {
            $ctx = hash_init('sha1');
            hash_update($ctx, 'The quick brown fox jumped over the lazy dog.');
            $this->assertEquals('c0854fb9fb03c41cce3802cb0d220529e6eef94e', hash_final($ctx));
        } else {
            $this->markTestIncomplete(phpversion() . ' < 5.1.2');
        }
    }
}
