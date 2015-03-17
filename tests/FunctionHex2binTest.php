<?php

/**
 * Class FunctionHex2binTest
 * @link http://php.net/manual/en/function.hex2bin.php
 */
class FunctionHex2binTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionHex2bin()
    {
        if (version_compare(phpversion(), '5.4.0', '>=') === true) {
            $this->assertEquals('example hex data', hex2bin("6578616d706c65206865782064617461"));
        }
    }
}
