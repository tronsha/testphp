<?php

/**
 * Class FunctionOctdecTest
 * @link http://php.net/manual/en/function.octdec.php
 */
class FunctionOctdecTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionOctdec()
    {
        $this->assertEquals(63, octdec('77'));
        $this->assertEquals(45, octdec(decoct(45)));
    }
}
