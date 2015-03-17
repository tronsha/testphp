<?php

/**
 * Class FunctionMd5FileTest
 * @link http://php.net/manual/en/function.md5-file.php
 */
class FunctionMd5FileTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        file_put_contents('php-5.3.0alpha2-Win32-VC9-x64.zip', 'foo');
    }

    protected function tearDown()
    {
        unlink('php-5.3.0alpha2-Win32-VC9-x64.zip');
    }

    public function testFunctionMd5File()
    {
        $file = 'php-5.3.0alpha2-Win32-VC9-x64.zip';
        $this->assertEquals('MD5 file hash of php-5.3.0alpha2-Win32-VC9-x64.zip: acbd18db4cc2f85cedef654fccc4a4d8',
            'MD5 file hash of ' . $file . ': ' . md5_file($file));
    }
}
