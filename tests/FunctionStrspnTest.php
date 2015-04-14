<?php

/**
 * Class FunctionStrspnTest
 * @link http://php.net/manual/en/function.strspn.php
 */
class FunctionStrspnTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStrspn()
    {
        $var = strspn("42 is the answer to the 128th question.", "1234567890");
        $this->assertEquals(2, $var);
        $this->assertEquals(0, strspn("foo", "o"));
        $this->assertEquals(2, strspn("foo", "o", 1, 2));
        $this->assertEquals(1, strspn("foo", "o", 1, 1));
    }
}
