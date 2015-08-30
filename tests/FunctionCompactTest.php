<?php

/**
 * Class FunctionCompactTest
 * @link http://php.net/manual/en/function.compact.php
 */
class FunctionCompactTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionCompact()
    {
        $city = "San Francisco";
        $state = "CA";
        $event = "SIGGRAPH";
        $location_vars = array("city", "state");
        $result = compact("event", "nothing_here", $location_vars);
        $this->assertEquals(array('event' => 'SIGGRAPH', 'city' => 'San Francisco', 'state' => 'CA'), $result);
    }
}
