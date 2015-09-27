<?php

/**
 * Class FunctionCtypeGraphTest
 * @link http://php.net/manual/en/function.ctype-graph.php
 */
class FunctionCtypeGraphTest extends PHPUnit_Framework_TestCase
{
    public function testFunctioCtypeGraph()
    {
        $strings = array("asdf\n\r\t", 'arf12', 'LKA#@%.54');
        $this->assertFalse(ctype_graph($strings[0]));
        $this->assertTrue(ctype_graph($strings[1]));
        $this->assertTrue(ctype_graph($strings[2]));
    }
}
