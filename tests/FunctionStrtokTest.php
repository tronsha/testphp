<?php

/**
 * Class FunctionStrtokTest
 * @link http://php.net/manual/en/function.strtok.php
 */
class FunctionStrtokTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStrtok()
    {
        $first_token  = strtok('/something', '/');
        $second_token = strtok('/');
        $this->assertEquals('something', $first_token);
        $this->assertFalse($second_token);
    }
}
