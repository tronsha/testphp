<?php

/**
 * Class FunctionLevenshteinTest
 * @link http://php.net/manual/en/function.levenshtein.php
 */
class FunctionLevenshteinTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionLevenshtein()
    {
        $input = 'carrrot';
        $words = array('apple', 'pineapple', 'banana', 'orange', 'radish', 'carrot', 'pea', 'bean', 'potato');
        $shortest = -1;
        foreach ($words as $word) {
            $lev = levenshtein($input, $word);
            if ($lev == 0) {
                $closest = $word;
                $shortest = 0;
                break;
            }
            if ($lev <= $shortest || $shortest < 0) {
                $closest = $word;
                $shortest = $lev;
            }
        }
        $this->assertEquals('Input word: carrrot', "Input word: $input");
        $this->expectOutputString('Did you mean: carrot?');
        if ($shortest == 0) {
            echo "Exact match found: $closest";
        } else {
            echo "Did you mean: $closest?";
        }
    }
}
