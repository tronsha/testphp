<?php

/**
 * Class FunctionVprintfTest
 * @link http://php.net/manual/en/function.vprintf.php
 */
class FunctionVprintfTest extends PHPUnit_Framework_TestCase
{
    public function testFunctioVprintf()
    {
        $this->expectOutputString('1988-08-01');
        $int = vprintf("%04d-%02d-%02d", explode('-', '1988-8-1'));
        $this->assertEquals(10, $int);
    }
}
