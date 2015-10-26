<?php

/**
 * Class FunctionDateOffsetGetTest
 * @link http://php.net/manual/en/function.date-offset-get.php
 * @link hhttp://php.net/manual/en/datetime.getoffset.php
 */
class FunctionDateOffsetGetTest extends PHPUnit_Framework_TestCase
{
    /**
     * @requires PHP 5.2
     */
    public function testFunctionDateOffsetGet()
    {
        if (version_compare(phpversion(), '5.2.0', '>=') === true) {
            $winter = new DateTime('2010-12-21', new DateTimeZone('America/New_York'));
            $summer = new DateTime('2008-06-21', new DateTimeZone('America/New_York'));
            $this->assertEquals('-18000', $winter->getOffset());
            $this->assertEquals('-14400', $summer->getOffset());
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.2.0');
        }
    }

    /**
     * @requires PHP 5.2
     */
    public function testFunctionDateOffsetGetProcedural()
    {
        if (version_compare(phpversion(), '5.2.0', '>=') === true) {
            $winter = date_create('2010-12-21', timezone_open('America/New_York'));
            $summer = date_create('2008-06-21', timezone_open('America/New_York'));
            $this->assertEquals('-18000', date_offset_get($winter));
            $this->assertEquals('-14400', date_offset_get($summer));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.2.0');
        }
    }
}
