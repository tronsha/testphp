<?php

/**
 * Class FunctionStrReplaceTest
 * @link http://php.net/manual/en/function.str-replace.php
 */
class FunctionStrReplaceTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStrReplace()
    {
        $bodytag = str_replace("%body%", "black", "<body text='%body%'>");
        $this->assertEquals("<body text='black'>", $bodytag);
        $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
        $onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
        $this->assertEquals('Hll Wrld f PHP', $onlyconsonants);
        $phrase = "You should eat fruits, vegetables, and fiber every day.";
        $healthy = array("fruits", "vegetables", "fiber");
        $yummy = array("pizza", "beer", "ice cream");
        $newphrase = str_replace($healthy, $yummy, $phrase);
        $this->assertEquals('You should eat pizza, beer, and ice cream every day.', $newphrase);
        $str = str_replace("ll", "", "good golly miss molly!", $count);
        $this->assertEquals(2, $count);
        $str = "Line 1\nLine 2\rLine 3\r\nLine 4\n";
        $order = array("\r\n", "\n", "\r");
        $replace = '<br />';
        $newstr = str_replace($order, $replace, $str);
        $this->assertEquals('Line 1<br />Line 2<br />Line 3<br />Line 4<br />', $newstr);
        $search = array('A', 'B', 'C', 'D', 'E');
        $replace = array('B', 'C', 'D', 'E', 'F');
        $subject = 'A';
        $this->assertEquals('F', str_replace($search, $replace, $subject));
        $letters = array('a', 'p');
        $fruit = array('apple', 'pear');
        $text = 'a p';
        $output = str_replace($letters, $fruit, $text);
        $this->assertEquals('apearpearle pear', $output);
    }
}
