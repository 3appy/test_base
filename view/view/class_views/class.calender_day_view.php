<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.calender_day_view.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 01.01.2014, 21:06:32 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include basic_calender
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.basic_calender.php');

/**
 * //require_once('../../../data/class.time_table_item_list.php');
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.calender_day.php');

/* user defined includes */
// section 127-0-0-1-964a67c:1410da3236e:-8000:0000000000000C43-includes begin
// section 127-0-0-1-964a67c:1410da3236e:-8000:0000000000000C43-includes end

/* user defined constants */
// section 127-0-0-1-964a67c:1410da3236e:-8000:0000000000000C43-constants begin
// section 127-0-0-1-964a67c:1410da3236e:-8000:0000000000000C43-constants end

/**
 * Short description of class calender_day_view
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class calender_day_view
    extends basic_calender
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute calender_day
     *
     * @access public
     * @var calender_day
     */
    public $calender_day = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  year
     * @param  month
     * @param  day
     * @version 1.0
     */
    public function set_calender_day($year, $month, $day)
    {
     date_default_timezone_set('Europe/Berlin');
     
     $day_time = new DateTime();
     $day_time->setdate($year, $month, $day );
     
     $this->calender_day = new calender_day();
     $this->calender_day->set_day_time( $day_time );
     $this->calender_day->fill_day_by_day( $this->get_frame() );
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_header()
    {
     $month = $this->calender_day->get_month();
     return
     $this->calender_day->get_day() .'. '.
     $this->month_names->get_item( $month -1 ) .' '.
     $this->calender_day->get_year();
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_calender()
    {
     return
     "<table class=\"calendar\">" .
     "<thead>" .
     $this->get_link_header() .
     "</thead>" .
     "</table>" .
     "<table class=\"calendar\">" .
     $this->get_table_header() .
     $this->get_table_body() .
     "</table>";
    }
    
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_table_header()
    {
     return
     "<thead>" .
     $this->get_table_top_header() .
     "</thead>";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_table_body()
    {
     $time_element_list = $this->calender_day->get_time_element_list();
     $return_string = "<tbody>";
     
     $element_count = $time_element_list->get_item_count();
     
     for ($n = 0; $n < $element_count; $n++)
     {
     $time_element = $time_element_list->get_item($n);
     $return_string = $return_string .
     "<tr>" .
     "<td >" .
     $time_element->get_number_description() .
     "</td>" .
     "<td >" .
     $time_element->get_time_description() .
     "</td>" .
     "<td >" .
     "   " .
     "</td>" .
     "</tr>";
     }
     return $return_string . "</tbody>";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_link_header()
    {
    $control_base = $this->get_frame() . '_control_base';
    return
    "<tr>" .
    "<th>" .
     "<a href=\"" .
     $_SESSION[$control_base] . $this->get_control_frame() .
     "?y=" .
     "&m=" .
     "&d=" .
     "&modus=" . "month" .
     "\">" . $this->language['monthview'] . "</a>" .
    "</th>" .
    "<th>"  .
     "<a href=\"" .
     $_SESSION[$control_base] . $this->get_control_frame() .
     "?y=" .
     "&m=" .
     "&d=" .
     "&modus=" . "week" .
     "\">" . $this->language['weekview'] . "</a>" .
    "</th>" .
    "<th>" .
    $this->language['dayview'] .
    "</th>" .
    "</tr>";
    }


    public function get_table_top_header()
    {
     $next_day_time  = $this->calender_day->get_next_day_time();
     $prev_day_time  = $this->calender_day->get_prev_day_time();
     $control_base = $this->get_frame() . '_control_base';
     
     $top_header =
     "<tr>" .
     "<th>" .
     "<a class =\"mytdclass\" href=\"" .
     $_SESSION[$control_base] . $this->get_control_frame() .
     "?y=" . $prev_day_time->format("Y") .
     "&m=" . $prev_day_time->format("m") .
     "&d=" . $prev_day_time->format("d") .
     "&modus=" . "day" .
     "\">" . "<" . "</a>" .
     "</th>" .
     
     "<th>" .
     $this->get_header() .
     "</th>" .
     
     "<th>" .
     "<a class =\"mytdclass\" href=\"" .
     $_SESSION[$control_base] . $this->get_control_frame() .
     "?y=" . $next_day_time->format("Y") .
     "&m=" . $next_day_time->format("m") .
     "&d=" . $next_day_time->format("d") .
     "&modus=" . "day" .
     "\">" . ">" . "</a>" .
     "</th>" .
     "</tr>";
     return $top_header;
    }
}?>