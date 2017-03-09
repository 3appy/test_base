<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.calender_week.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 01.01.2014, 19:53:32 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include calender_day
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.calender_day.php');

/**
 * include calender_week_view
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.calender_week_view.php');

/**
 * include table_element_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.table_element_list.php');

/* user defined includes */
// section 127-0-0-1-964a67c:1410da3236e:-8000:0000000000000CBD-includes begin
// section 127-0-0-1-964a67c:1410da3236e:-8000:0000000000000CBD-includes end

/* user defined constants */
// section 127-0-0-1-964a67c:1410da3236e:-8000:0000000000000CBD-constants begin
// section 127-0-0-1-964a67c:1410da3236e:-8000:0000000000000CBD-constants end

/**
 * Short description of class calender_week
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class calender_week
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute day_list
     *
     * @access private
     * @var table_element_list
     */
    private $day_list = null;

    /**
     * Short description of attribute week_time
     *
     * @access private
     * @var Integer
     */
    private $week_time = null;

    /**
     * Short description of attribute prev_week_time
     *
     * @access private
     * @var Integer
     */
    private $prev_week_time = null;

    /**
     * Short description of attribute next_week_time
     *
     * @access private
     * @var Integer
     */
    private $next_week_time = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function fill_week()
    {
     $interval = new dateinterval('P1D');
     
     $week = new DatePeriod($this->week_time, $interval, 6);
     $this->day_list = new table_element_list();
     foreach($week as $day)
     {
     $calender_day = new calender_day();
     $calender_day->set_day_time( $day );
     $this->day_list->add_item( $calender_day );
     }
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  week_time
     */
    public function set_week_time($week_time)
    {
     $this->week_time = $week_time;
     
     $this->next_week_time = clone $this->week_time;
     $this->prev_week_time = clone $this->week_time;
     $this->next_week_time->add( new dateinterval('P1W') );
     $this->prev_week_time->sub( new dateinterval('P1W') );
    }
    /**
     *
     * @access public
     * @author Bernd SChröder
     * @version 1.0
     */
    public function get_day_list()
    {
     return $this->day_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_prev_week_time()
    {
     return $this->prev_week_time;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_next_week_time()
    {
     return $this->next_week_time;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_year()
    {
     return $this->week_time->format("Y");
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_week()
    {
     return $this->week_time->format("W");
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_week_time()
    {
     return $this->week_time;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     */
    public function fill_day_by_month()
    {
     for ($i = 0; $i < $this->day_list->get_item_count(); $i++)
     {
     $calender_day = $this->day_list->get_item( $i );
     $calender_day->fill_day_by_month();
     }
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     */
    public function fill_day_by_week( $frame )
    {
     for ($i = 0; $i < $this->day_list->get_item_count(); $i++)
     {
     $calender_day = $this->day_list->get_item( $i );
     $calender_day->fill_day_by_week( $frame );
     }
    }
    
}?>