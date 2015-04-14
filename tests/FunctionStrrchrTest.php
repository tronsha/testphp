<?php

/**
 * Class FunctionStrrchrTest
 * @link http://php.net/manual/en/function.strrchr.php
 */
class FunctionStrrchrTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStrrchr()
    {
        $this->assertEquals('/bin', substr(strrchr('/usr/local/bin:/usr/bin:/bin', ":"), 1));
        $this->assertEquals('Line 3', substr(strrchr("Line 1\nLine 2\nLine 3", 10), 1));
    }
}
