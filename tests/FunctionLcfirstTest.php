<?php

/**
 * Class FunctionLcfirstTest
 * @link http://php.net/manual/en/function.lcfirst.php
 */
class FunctionLcfirstTest extends PHPUnit_Framework_TestCase
{
    /**
     * @requires PHP 5.3
     */
    public function testFunctionLcfirst()
    {
        if (version_compare(phpversion(), '5.3.0', '>=') === true) {
            $foo = 'HelloWorld';
            $foo = lcfirst($foo);
            $this->assertEquals('helloWorld', $foo);
            $bar = 'HELLO WORLD!';
            $bar = lcfirst($bar);
            $this->assertEquals('hELLO WORLD!', $bar);
            $bar = lcfirst(strtoupper($bar));
            $this->assertEquals('hELLO WORLD!', $bar);
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.3.0');
        }
    }
}
