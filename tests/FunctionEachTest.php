<?php

/**
 * Class FunctionEachTest
 * @link http://php.net/manual/en/function.each.php
 */
class FunctionEachTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionEach()
    {
        $foo = array("bob", "fred", "jussi", "jouni", "egon", "marliese");
        $bar = each($foo);
        $this->assertEquals(array(1 => 'bob', 'value' => 'bob', 0 => 0, 'key' => 0), $bar);
        $foo = array("Robert" => "Bob", "Seppo" => "Sepi");
        $bar = each($foo);
        $this->assertEquals(array(1 => 'Bob', 'value' => 'Bob', 0 => 'Robert', 'key' => 'Robert'), $bar);
        $fruit = array('a' => 'apple', 'b' => 'banana', 'c' => 'cranberry');
        reset($fruit);
        while (list($key, $val) = each($fruit)) {
            echo "$key => $val\n";
        }
        $this->expectOutputString("a => apple\nb => banana\nc => cranberry\n");
    }
}
