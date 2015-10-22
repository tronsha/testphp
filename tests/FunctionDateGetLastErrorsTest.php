<?php

/**
 * Class FunctionDateGetLastErrorsTest
 * @link http://php.net/manual/en/function.date-get-last-errors.php
 * @link http://php.net/manual/en/datetime.getlasterrors.php
 */
class FunctionDateGetLastErrorsTest extends PHPUnit_Framework_TestCase
{
    /**
     * @requires PHP 5.3
     */
    public function testFunctionDateGetLastErrors()
    {
        if (version_compare(phpversion(), '5.3.0', '>=') === true) {
            try {
                $date = new DateTime('asdfasdf');
            } catch (Exception $e) {
                $this->assertEquals(
                    array(
                        'warning_count' => 1,
                        'warnings' => array(6 => 'Double timezone specification'),
                        'error_count' => 1,
                        'errors' => array(0 => 'The timezone could not be found in the database')
                    ),
                    DateTime::getLastErrors()
                );
            }
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.3.0');
        }
    }

    /**
     * @requires PHP 5.3
     */
    public function testFunctionDateGetLastErrorsProcedural()
    {
        if (version_compare(phpversion(), '5.3.0', '>=') === true) {
            $date = date_create('asdfasdf');
            $this->assertEquals(
                array(
                    'warning_count' => 1,
                    'warnings' => array(6 => 'Double timezone specification'),
                    'error_count' => 1,
                    'errors' => array(0 => 'The timezone could not be found in the database')
                ),
                date_get_last_errors()
            );
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.3.0');
        }
    }
}
