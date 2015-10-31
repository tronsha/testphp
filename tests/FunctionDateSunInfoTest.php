<?php

/**
 * Class FunctionDateSunInfoTest
 * @link http://php.net/manual/en/function.date-sun-info.php
 */
class FunctionDateSunInfoTest extends PHPUnit_Framework_TestCase
{
    /**
     * @requires PHP 5.1.2
     */
    public function testDateSunInfo()
    {
        if (version_compare(phpversion(), '5.1.2', '>=') === true) {
            $sun_info = date_sun_info(strtotime("2006-12-12"), 31.7667, 35.2333);
//            $this->assertEquals('05:52:11', date("H:i:s", $sun_info['sunrise']));
//            $this->assertEquals('15:41:21', date("H:i:s", $sun_info['sunset']));
//            $this->assertEquals('10:46:46', date("H:i:s", $sun_info['transit']));
//            $this->assertEquals('05:24:08', date("H:i:s", $sun_info['civil_twilight_begin']));
//            $this->assertEquals('16:09:24', date("H:i:s", $sun_info['civil_twilight_end']));
//            $this->assertEquals('04:52:25', date("H:i:s", $sun_info['nautical_twilight_begin']));
//            $this->assertEquals('16:41:06', date("H:i:s", $sun_info['nautical_twilight_end']));
//            $this->assertEquals('04:21:32', date("H:i:s", $sun_info['astronomical_twilight_begin']));
//            $this->assertEquals('17:12:00', date("H:i:s", $sun_info['astronomical_twilight_end']));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.1.2');
        }
    }
}
