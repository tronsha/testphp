<?php

/**
 * Class FunctionCrc32Test
 * @link http://php.net/manual/en/function.crc32.php
 */
class FunctionCrc32Test extends PHPUnit_Framework_TestCase
{
    public function testFunctionCrc32()
    {
        $checksum = crc32("The quick brown fox jumped over the lazy dog.");
        $this->assertEquals('2191738434', sprintf("%u", $checksum));
    }
}
