<?php

/**
 * Class FunctionStrRepeatTest
 * @link http://php.net/manual/en/function.str-repeat.php
 */
class FunctionStrRepeatTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStrRepeat()
    {
        $this->assertEquals('-=-=-=-=-=-=-=-=-=-=', str_repeat("-=", 10));
    }
}
