<?php

/**
 * Class FunctionArrayReplaceRecursiveTest
 * @link http://php.net/manual/en/function.array-replace-recursive.php
 */
class FunctionArrayReplaceRecursiveTest extends PHPUnit_Framework_TestCase
{
    /**
     * @requires PHP 5.3
     */
    public function testFunctionArrayReplaceRecursive()
    {
        if (version_compare(phpversion(), '5.3.0', '>=') === true) {
            $base = array('citrus' => array("orange"), 'berries' => array("blackberry", "raspberry"));
            $replacements = array('citrus' => array('pineapple'), 'berries' => array('blueberry'));
            $basket = array_replace_recursive($base, $replacements);
            $this->assertEquals(
                array('citrus' => array(0 => 'pineapple'), 'berries' => array(0 => 'blueberry', 1 => 'raspberry')),
                $basket
            );
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.3.0');
        }
    }

    /**
     * @requires PHP 5.3
     */
    public function testFunctionArrayReplaceRecursiveBehavior()
    {
        if (version_compare(phpversion(), '5.3.0', '>=') === true) {
            $base = array(
                'citrus' => array("orange"),
                'berries' => array("blackberry", "raspberry"),
                'others' => 'banana'
            );
            $replacements = array(
                'citrus' => 'pineapple',
                'berries' => array('blueberry'),
                'others' => array('litchis')
            );
            $replacements2 = array(
                'citrus' => array('pineapple'),
                'berries' => array('blueberry'),
                'others' => 'litchis'
            );
            $basket = array_replace_recursive($base, $replacements, $replacements2);
            $this->assertEquals(
                array(
                    'citrus' => array(0 => 'pineapple'),
                    'berries' => array(0 => 'blueberry', 1 => 'raspberry'),
                    'others' => 'litchis'
                ),
                $basket
            );
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.3.0');
        }
    }
}
