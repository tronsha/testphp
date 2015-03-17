<?php

/**
 * Class FunctionHashUpdateStreamTest
 * @link http://php.net/manual/en/function.hash-init.php
 */
class FunctionHashUpdateStreamTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionHashUpdateStream()
    {
        if (version_compare(phpversion(), '5.1.2', '>=') === true) {
            $fp = tmpfile();
            fwrite($fp, 'The quick brown fox jumped over the lazy dog.');
            rewind($fp);
            $ctx = hash_init('md5');
            hash_update_stream($ctx, $fp);
            $this->assertEquals('5c6ffbdd40d9556b73a21e63c3e0e904', hash_final($ctx));
        } else {
            $info = phpversion() . ' < 5.1.2';
        }
    }
}
