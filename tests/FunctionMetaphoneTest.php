<?php

/**
 * Class FunctionMetaphoneTest
 * @link http://php.net/manual/en/function.metaphone.php
 */
class FunctionMetaphoneTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionMetaphone()
    {
        $this->assertEquals('PRKRMNK', metaphone('programming'));
        $this->assertEquals('PRKRMR', metaphone('programmer'));
        $this->assertEquals('PRKRM', metaphone('programming', 5));
        $this->assertEquals('PRKRM', metaphone('programmer', 5));
    }
}
