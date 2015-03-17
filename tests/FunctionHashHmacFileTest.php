<?php

/**
 * Class FunctionHashHmacFileTest
 * @link http://php.net/manual/en/function.hash-hmac-file.php
 */
class FunctionHashHmacFileTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        file_put_contents('example.txt', 'The quick brown fox jumped over the lazy dog.');
    }

    protected function tearDown()
    {
        unlink('example.txt');
    }

    public function testFunctionHashHmacFile()
    {
        if (version_compare(phpversion(), '5.1.2', '>=') === true) {
            $this->assertEquals('7eb2b5c37443418fc77c136dd20e859c', hash_hmac_file('md5', 'example.txt', 'secret'));
        } else {
            $this->markTestIncomplete(phpversion() . ' < 5.1.2');
        }
    }
}
