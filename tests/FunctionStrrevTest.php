<?php

/**
 * Class FunctionStrrevTest
 * @link http://php.net/manual/en/function.strrev.php
 */
class FunctionStrrevTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStrrev()
    {
        $this->assertEquals('!dlrow olleH', strrev("Hello world!"));
    }
}
