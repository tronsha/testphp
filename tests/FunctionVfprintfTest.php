<?php

/**
 * Class FunctionVfprintfTest
 * @link http://php.net/manual/en/function.vfprintf.php
 */
class FunctionVfprintfTest extends PHPUnit_Framework_TestCase
{
    protected $fp;

    protected function setUp()
    {
        $this->fp = fopen('example.txt', 'w');
        if (false === $this->fp) {
            $this->markTestSkipped('fopen fails');
        }
    }

    protected function tearDown()
    {
        unlink('example.txt');
    }

    public function testFunctionFprintf()
    {
        $year = 1979;
        $month = 4;
        $day = 28;
        vfprintf($this->fp, "%04d-%02d-%02d", array($year, $month, $day));
        $this->assertEquals('1979-04-28', file_get_contents('example.txt'));
    }
}
