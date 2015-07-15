<?php

/**
 * Class FunctionArrayColumnTest
 * @link http://php.net/manual/en/function.array-column.php
 */
class FunctionArrayColumnTest extends PHPUnit_Framework_TestCase
{
    /**
     * @requires PHP 5.5
     */
    public function testFunctionArrayColumn()
    {
        if (version_compare(phpversion(), '5.5.0', '>=') === true) {
            $records = array(
                array(
                    'id' => 2135,
                    'first_name' => 'John',
                    'last_name' => 'Doe',
                ),
                array(
                    'id' => 3245,
                    'first_name' => 'Sally',
                    'last_name' => 'Smith',
                ),
                array(
                    'id' => 5342,
                    'first_name' => 'Jane',
                    'last_name' => 'Jones',
                ),
                array(
                    'id' => 5623,
                    'first_name' => 'Peter',
                    'last_name' => 'Doe',
                )
            );
            $this->assertEquals(array('John', 'Sally', 'Jane', 'Peter'), array_column($records, 'first_name'));
            $this->assertEquals(array(2135 => 'Doe', 3245 => 'Smith', 5342 => 'Jones', 5623 => 'Doe'), array_column($records, 'last_name', 'id'));
        } else {
            $info = phpversion() . ' < 5.5.0';
        }
    }
}
