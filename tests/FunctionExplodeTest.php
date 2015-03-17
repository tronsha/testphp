<?php

/**
 * Class FunctionExplodeTest
 * @link http://php.net/manual/en/function.explode.php
 */
class FunctionExplodeTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionExplode()
    {
        $pizza = "piece1 piece2 piece3 piece4 piece5 piece6";
        $teile = explode(" ", $pizza);
        $this->assertEquals('piece1', $teile[0]);
        $this->assertEquals('piece2', $teile[1]);
        $data = "foo:*:1023:1000::/home/foo:/bin/sh";
        list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
        $this->assertEquals('foo', $user);
        $this->assertEquals('*', $pass);
    }

    public function testFunctionExplodeReturn()
    {
        $input1 = "hello";
        $input2 = "hello,there";
        $this->assertEquals(array('hello'), explode(',', $input1));
        $this->assertEquals(array('hello', 'there'), explode(',', $input2));
    }

    public function testFunctionExplodeLimit()
    {
        $str = 'one|two|three|four';
        $this->assertEquals(array('one', 'two|three|four'), explode('|', $str, 2));
        if (version_compare(phpversion(), '5.1.0', '>=') === true) {
            $this->assertEquals(array('one', 'two', 'three'), explode('|', $str, -1));
        }
    }
}
