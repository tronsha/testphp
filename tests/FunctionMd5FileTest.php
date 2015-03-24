<?php

/**
 * Class FunctionMd5FileTest
 * @link http://php.net/manual/en/function.md5-file.php
 */
class FunctionMd5FileTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        file_put_contents('example.txt', 'foo');
    }

    protected function tearDown()
    {
        unlink('example.txt');
    }

    public function testFunctionMd5File()
    {
        $file = 'example.txt';
        $this->assertEquals('MD5 file hash of example.txt: acbd18db4cc2f85cedef654fccc4a4d8',
            'MD5 file hash of ' . $file . ': ' . md5_file($file));
    }
}
