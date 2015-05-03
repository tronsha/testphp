<?php

/**
 * Class FunctionSha1FileTest
 * @link http://php.net/manual/en/function.sha1-file.php
 */
class FunctionSha1FileTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        file_put_contents('example.txt', 'apple');
    }

    protected function tearDown()
    {
        unlink('example.txt');
    }

    public function testFunctionSha1File()
    {
        $file = 'example.txt';
        $this->assertEquals('SHA1 file hash of example.txt: d0be2dc421be4fcd0172e5afceea3970e2f3d940',
            'SHA1 file hash of ' . $file . ': ' . sha1_file($file));
    }
}
