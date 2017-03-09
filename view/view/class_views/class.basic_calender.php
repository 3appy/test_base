<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.basic_calender.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 01.01.2014, 19:15:02 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include table_element_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.table_element_list.php');

/* user defined includes */
// section 127-0-0-1-964a67c:1410da3236e:-8000:0000000000000C40-includes begin
// section 127-0-0-1-964a67c:1410da3236e:-8000:0000000000000C40-includes end

/* user defined constants */
// section 127-0-0-1-964a67c:1410da3236e:-8000:0000000000000C40-constants begin
// section 127-0-0-1-964a67c:1410da3236e:-8000:0000000000000C40-constants end

/**
 * Short description of class basic_calender
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class basic_calender
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute language
     *
     * @access protected
     * @var Integer
     */
    protected $language = null;

    /**
     * Short description of attribute month_names
     *
     * @access protected
     * @var table_element_list
     */
    protected $month_names = null;

    /**
     * Short description of attribute day_names
     *
     * @access protected
     * @var table_element_list
     */
    protected $day_names = null;

    /**
     * Short description of attribute control_frame
     *
     * @access public
     * @var String
     */
    public $control_frame = null;

    /**
     * Short description of attribute frame
     *
     * @access public
     * @var String
     */
    public $frame = null;

    /**
     * Short description of attribute owner_id
     *
     * @access private
     * @var Integer
     */
    private $owner_id = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  owner_id
     * @version 1.0
     */
    public function __construct($owner_id)
    {
     $this->owner_id = $owner_id;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  language
     * @version 1.0
     */
    public function set_language($language)
    {
     $this->language = $language;
     $this->fill_month_name();
     $this->fill_day_name();
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function fill_month_name()
    {
     $this->month_names = new table_element_list();
     for ($i = 1; $i <= 12; $i++)
     {
     $this->month_names->add_item( $this->language['month_' . $i] );
     }
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function fill_day_name()
    {
     $this->day_names = new table_element_list();
     for ($i = 1; $i <= 7; $i++)
     {
     $this->day_names->add_item( $this->language['day_' . $i] );
     }
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  control_frame
     * @version 1.0
     */
    public function set_control_frame($control_frame)
    {
     $this->control_frame = $control_frame;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_control_frame()
    {
     return $this->control_frame;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     */
    public function get_frame()
    {
     return $this->frame;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  frame
     */
    public function set_frame($frame)
    {
     $this->frame = $frame;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     */
    public function get_owner_id()
    {
     return $this->owner_id;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  owner_id
     */
    public function set_owner_id($owner_id)
    {
     $this->owner_id = $owner_id;
    }
}?>