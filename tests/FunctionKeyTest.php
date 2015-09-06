<?php

/**
 * Class FunctionKeyTest
 * @link http://php.net/manual/en/function.key.php
 */
class FunctionKeyTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionKey()
    {
        $array = array(
            'fruit1' => 'apple',
            'fruit2' => 'orange',
            'fruit3' => 'grape',
            'fruit4' => 'apple',
            'fruit5' => 'apple');
        $output = '';
        while ($fruit_name = current($array)) {
            if ($fruit_name == 'apple') {
                $output .= key($array);
            }
            next($array);
        }
        $this->assertEquals('fruit1fruit4fruit5', $output);
    }
}
