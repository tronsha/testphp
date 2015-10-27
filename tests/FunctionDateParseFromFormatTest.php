<?php

/**
 * Class FunctionDateParseFromFormatTest
 * @link http://php.net/manual/en/function.date-parse-from-format.php
 */
class FunctionDateParseFromFormatTest extends PHPUnit_Framework_TestCase
{
    /**
     * @requires PHP 5.3
     */
    public function testDateParseFromFormat()
    {
        if (version_compare(phpversion(), '5.3.0', '>=') === true) {
            $date = "6.1.2009 13:00+01:00";
            $dateArray = date_parse_from_format("j.n.Y H:iP", $date);
            $this->assertEquals('2009', $dateArray['year']);
            $this->assertEquals('1', $dateArray['month']);
            $this->assertEquals('6', $dateArray['day']);
            $this->assertEquals('13', $dateArray['hour']);
            $this->assertEquals('0', $dateArray['minute']);
            $this->assertEquals('0', $dateArray['second']);
            $this->assertEquals('-60', $dateArray['zone']);
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.3.0');
        }
    }
}
