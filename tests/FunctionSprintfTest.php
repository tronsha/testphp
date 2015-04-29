<?php

/**
 * Class FunctionSprintfTest
 * @link http://php.net/manual/en/function.sprintf.php
 */
class FunctionSprintfTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionSprintf()
    {
        $num = 5;
        $location = 'tree';
        $format = 'There are %d monkeys in the %s';
        $this->assertEquals('There are 5 monkeys in the tree', sprintf($format, $num, $location));
        $format = 'The %2$s contains %1$d monkeys';
        $this->assertEquals('The tree contains 5 monkeys', sprintf($format, $num, $location));
        $this->assertEquals('......123', sprintf("%'.9d", 123));
        $this->assertEquals('000000123', sprintf("%'.09d", 123));
        $format = 'The %2$s contains %1$04d monkeys';
        $this->assertEquals('The tree contains 0005 monkeys', sprintf($format, $num, $location));
    }
}
