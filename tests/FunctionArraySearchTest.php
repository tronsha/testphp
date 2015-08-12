<?php

/**
 * Class FunctionArraySearchTest
 * @link http://php.net/manual/en/function.array-search.php
 */
class FunctionArraySearchTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArraySearch()
    {
        $array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
        $this->assertEquals(2, array_search('green', $array));
        $this->assertEquals(1, array_search('red', $array));
    }
}
