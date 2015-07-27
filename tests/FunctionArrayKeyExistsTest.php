<?php

/**
 * Class FunctionArrayKeyExistsTest
 * @link http://php.net/manual/en/function.array-key-exists.php
 */
class FunctionArrayKeyExistsTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayKeyExists()
    {
        $search_array = array('first' => 1, 'second' => 4);
        $this->assertTrue(array_key_exists('first', $search_array));
    }

    public function testFunctionArrayKeyExistsVsIsset()
    {
        $search_array = array('first' => null, 'second' => 4);
        $this->assertFalse(isset($search_array['first']));
        $this->assertTrue(array_key_exists('first', $search_array));
    }

}
