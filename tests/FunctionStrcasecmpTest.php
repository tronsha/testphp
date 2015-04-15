<?php

/**
 * Class FunctionStrcasecmpTest
 * @link http://php.net/manual/en/function.strcasecmp.php
 */
class FunctionStrcasecmpTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStrcasecmp()
    {
        $this->assertEquals(0, (strcasecmp("Hello", "hello")));
    }
}
