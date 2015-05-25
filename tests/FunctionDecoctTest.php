<?php

/**
 * Class FunctionDecoctTest
 * @link http://php.net/manual/en/function.decoct.php
 */
class FunctionDecoctTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionDecoct()
    {
        $this->assertEquals('17', decoct(15));
        $this->assertEquals('410', decoct(264));
    }
}
