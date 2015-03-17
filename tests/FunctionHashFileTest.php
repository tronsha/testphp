<?php

/**
 * Class FunctionHashFileTest
 * @link http://php.net/manual/en/function.hash-file.php
 */
class FunctionHashFileTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        file_put_contents('example.txt', 'The quick brown fox jumped over the lazy dog.');
    }

    protected function tearDown()
    {
        unlink('example.txt');
    }

    public function testFunctionHashFile()
    {
        if (version_compare(phpversion(), '5.1.2', '>=') === true) {
            $this->assertEquals('5c6ffbdd40d9556b73a21e63c3e0e904', hash_file('md5', 'example.txt'));
        } else {
            $this->markTestIncomplete(phpversion() . ' < 5.1.2');
        }
    }
}
