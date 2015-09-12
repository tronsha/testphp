<?php

/**
 * Class FunctionListTest
 * @link http://php.net/manual/en/function.list.php
 */
class FunctionListTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionList()
    {
        $info = array('coffee', 'brown', 'caffeine');
        list($drink, $color, $power) = $info;
        $this->assertEquals("coffee is brown and caffeine makes it special.\n", "$drink is $color and $power makes it special.\n");
        list($drink, , $power) = $info;
        $this->assertEquals("coffee has caffeine.\n", "$drink has $power.\n");
        list( , , $power) = $info;
        $this->assertEquals("I need caffeine!\n", "I need $power!\n");
        list($bar) = "abcde";
        $this->assertNull($bar);
    }

    public function testFunctionListPhp7()
    {
        list($a[], $a[], $a[]) = array(1, 2, 3);
        if (version_compare(phpversion(), '7.0.0-dev', '>=') === true) {
            $this->assertEquals(1, $a[0]);
            $this->assertEquals(2, $a[1]);
            $this->assertEquals(3, $a[2]);
        } else {
            $this->assertEquals(3, $a[0]);
            $this->assertEquals(2, $a[1]);
            $this->assertEquals(1, $a[2]);
        }
    }
}
