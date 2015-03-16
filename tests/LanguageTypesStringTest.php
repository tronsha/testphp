<?php

/**
 * Class LanguageTypesStringTest
 * @link http://php.net/manual/en/language.types.string.php
 */
class LanguageTypesStringTest extends PHPUnit_Framework_TestCase
{
    public function testLanguageTypesStringSimpleSyntax()
    {
        $juice = "apple";
        $this->assertEquals('He drank some apple juice.', "He drank some $juice juice.");
        $juices = array("apple", "orange", "koolaid1" => "purple");
        $this->assertEquals('He drank some apple juice.', "He drank some $juices[0] juice.");
        $this->assertEquals('He drank some orange juice.', "He drank some $juices[1] juice.");
        $this->assertEquals('He drank some purple juice.', "He drank some $juices[koolaid1] juice.");
        $people = new people();
        $this->assertEquals('John Smith drank some apple juice.', "$people->john drank some $juices[0] juice.");
        $this->assertEquals('John Smith then said hello to Jane Smith.', "$people->john then said hello to $people->jane.");
        $this->assertEquals('John Smith\'s wife greeted Robert Paulsen.', "$people->john's wife greeted $people->robert.");
    }

    public function testLanguageTypesStringComplexSyntax()
    {
        $foo = new foo();
        $bar = 'bar';
        $baz = array('foo', 'bar', 'baz', 'quux');
        $this->assertEquals('I am bar.', "{$foo->$bar}");
        $this->assertEquals('I am bar.', "{$foo->$baz[1]}");
        $rootbeer = 'A & W';
        $ipa = 'Alexander Keith\'s';
        $this->assertEquals('I\'d like an A & W', "I'd like an {${beers::softdrink}}");
        $this->assertEquals('I\'d like an Alexander Keith\'s', "I'd like an {${beers::$ale}}");
    }

    public function testLanguageTypesStringConversionToNumbers()
    {
        $this->assertEquals(11.5, 1 + "10.5");
        $this->assertEquals(-1299, 1 + "-1.3e3");
        $this->assertEquals(1, 1 + "bob-1.3e3");
        $this->assertEquals(1, 1 + "bob3");
        $this->assertEquals(11, 1 + "10 Small Pigs");
        $this->assertEquals(14.2, 4 + "10.2 Little Piggies");
        $this->assertEquals(11, "10.0 pigs " + 1);
        $this->assertEquals(11, "10.0 pigs " + 1.0);
    }
}

class people
{
    public $john = "John Smith";
    public $jane = "Jane Smith";
    public $robert = "Robert Paulsen";
    public $smith = "Smith";
}

class foo
{
    var $bar = 'I am bar.';
}

class beers
{
    const softdrink = 'rootbeer';
    public static $ale = 'ipa';
}
