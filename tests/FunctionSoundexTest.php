<?php

/**
 * Class FunctionSoundexTest
 * @link http://php.net/manual/en/function.soundex.php
 */
class FunctionSoundexTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionSoundex()
    {
        $this->assertEquals('E460', soundex("Euler"));
        $this->assertEquals('E460', soundex("Ellery"));
        $this->assertEquals('G200', soundex("Gauss"));
        $this->assertEquals('G200', soundex("Ghosh"));
        $this->assertEquals('H416', soundex("Hilbert"));
        $this->assertEquals('H416', soundex("Heilbronn"));
        $this->assertEquals('K530', soundex("Knuth"));
        $this->assertEquals('K530', soundex("Kant"));
        $this->assertEquals('L300', soundex("Lloyd") );
        $this->assertEquals('L300', soundex("Ladd"));
        $this->assertEquals('L222', soundex("Lukasiewicz"));
        $this->assertEquals('L222', soundex("Lissajous"));
    }
}
