<?php

/**
 * Class FunctionImplodeTest
 * @link http://php.net/manual/en/function.implode.php
 */
class FunctionImplodeTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionImplode()
    {
        $array = array('lastname', 'email', 'phone');
        $comma_separated = implode(",", $array);
        $this->assertEquals('lastname,email,phone', $comma_separated);
        $this->assertEquals('', implode('hello', array()));
    }
}
