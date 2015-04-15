<?php

/**
 * Class FunctionStrpbrkTest
 * @link http://php.net/manual/en/function.strpbrk.php
 */
class FunctionStrpbrkTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStrpbrk()
    {
        $text = 'This is a Simple text.';
        $this->assertEquals('is is a Simple text.', strpbrk($text, 'mi'));
        $this->assertEquals('Simple text.', strpbrk($text, 'S'));
    }
}
