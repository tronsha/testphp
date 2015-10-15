<?php

/**
 * Class FunctionCheckdateTest
 * @link http://php.net/manual/en/function.checkdate.php
 */
class FunctionCheckdateTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionCheckdate()
    {
        $this->assertTrue(checkdate(12, 31, 2000));
        $this->assertFalse(checkdate(2, 29, 2001));
    }
}
