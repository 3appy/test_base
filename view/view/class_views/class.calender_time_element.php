<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.calender_time_element.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 01.01.2014, 20:50:08 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author Bernd Schröder
 * @version 1.0
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section 10-5-26-52-45815c4a:1412fe54125:-8000:0000000000000D31-includes begin
// section 10-5-26-52-45815c4a:1412fe54125:-8000:0000000000000D31-includes end

/* user defined constants */
// section 10-5-26-52-45815c4a:1412fe54125:-8000:0000000000000D31-constants begin
// section 10-5-26-52-45815c4a:1412fe54125:-8000:0000000000000D31-constants end

/**
 * Short description of class calender_time_element
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class calender_time_element
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute time_number
     *
     * @access public
     * @var Integer
     */
    public $time_number = null;

    /**
     * Short description of attribute number_description
     *
     * @access public
     * @var String
     */
    public $number_description = null;

    /**
     * Short description of attribute time_description
     *
     * @access public
     * @var String
     */
    public $time_description = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  time_number
     * @version 1.0
     */
    public function __construct($time_number)
    {
     $this->time_number = $time_number;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_time_number()
    {
     return $this->time_number;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  time_number
     */
    public function set_time_number($time_number)
    {
     $this->time_number = $time_number;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     */
    public function get_number_description()
    {
     return $this->number_description;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  number_description
     */
    public function set_number_description($number_description)
    {
     $this->number_description = $number_description;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     */
    public function get_time_description()
    {
     return $this->time_description;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  time_description
     */
    public function set_time_description($time_description)
    {
     $this->time_description = $time_description;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     */
    public function get_number_description_by_week()
    {
     return $this->get_number_description();
    }
    /**
     *
     * @access public
     * @author Bernd SChröder
     */
    public function get_time_description_by_week()
    {
     return $this->get_time_description();
    }
}?>