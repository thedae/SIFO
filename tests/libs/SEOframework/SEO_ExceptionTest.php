<?php
ini_set("include_path", "../libs/SEOframework".PATH_SEPARATOR."../../../libs/SEOframework".PATH_SEPARATOR.ini_get("include_path"));
require_once 'PHPUnit/Framework.php';

require_once '/var/www/seoframework/libs/SEOframework/Exceptions.php';

/**
 * Test class for SEO_Exception.
 * Generated by PHPUnit on 2009-11-01 at 12:17:02.
 */
class SEO_ExceptionTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var SEO_Exception
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new SEO_Exception;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }
}
?>
