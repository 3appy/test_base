<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.calender_month.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 01.01.2014, 19:40:27 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include calender_week
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.calender_week.php');

/**
 * include table_element_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.table_element_list.php');

/* user defined includes */
// section 127-0-0-1-964a67c:1410da3236e:-8000:0000000000000CB6-includes begin
// section 127-0-0-1-964a67c:1410da3236e:-8000:0000000000000CB6-includes end

/* user defined constants */
// section 127-0-0-1-964a67c:1410da3236e:-8000:0000000000000CB6-constants begin
// section 127-0-0-1-964a67c:1410da3236e:-8000:0000000000000CB6-constants end

/**
 * Short description of class calender_month
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class calender_month
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute week_list
     *
     * @access private
     * @var table_element_list
     */
    private $week_list = null;

    /**
     * Short description of attribute month_time
     *
     * @access private
     * @var Integer
     */
    private $month_time = null;

    /**
     * Short description of attribute next_month_time
     *
     * @access private
     * @var Integer
     */
    private $next_month_time = null;

    /**
     * Short description of attribute prev_month_time
     *
     * @access private
     * @var Integer
     */
    private $prev_month_time = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  month_time
     * @version 1.0
     */
    public function set_month_time($month_time)
    {
     $this->month_time = $month_time;
     
     $this->next_month_time = clone $this->month_time;
     $this->prev_month_time = clone $this->month_time;
     $this->next_month_time->add( new DateInterval('P1M') );
     $this->prev_month_time->sub( new DateInterval('P1M') );
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function fill_month()
    {
     date_default_timezone_set('Europe/Berlin');
     
     $startstamp = mktime(0,0,0,$this->get_month(),1,$this->get_year());
     $max_days   = date("t",$startstamp);
     $start_week = date("W", $startstamp);
     $start_day   = date("N", $startstamp);
     
     $this->week_list = new table_element_list();
     for( $i = 1; $i < ( $max_days + $start_day ); ( $i = $i + 7 ) )
     {
     $datetime = new DateTime();
     $datetime->setISODate( $this->get_year(), $start_week, $i );
     $week = new calender_week();
     $week->set_week_time( $datetime );
     $week->fill_week();
     $this->week_list->add_item($week );
     }
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_week_list()
    {
     return $this->week_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_month()
    {
     return $this->month_time->format("m");
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_year()
    {
     return $this->month_time->format("Y");
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_prev_month_time()
    {
     return $this->prev_month_time;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_next_month_time()
    {
     return $this->next_month_time;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     */
    public function fill_day_by_month()
    {
     $element_count = $this->week_list->get_item_count();
     
     for ($n = 0; $n < $element_count; $n++)
     {
     $week =  $this->week_list->get_item( $n );
     $week->fill_day_by_month();
     }
    }
    
}?>