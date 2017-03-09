<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.calender_week_view.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 01.01.2014, 21:00:24 with ArgoUML PHP module 
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
 * include calender_week
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.calender_week.php');

/* user defined includes */
// section 127-0-0-1-964a67c:1410da3236e:-8000:0000000000000C44-includes begin
// section 127-0-0-1-964a67c:1410da3236e:-8000:0000000000000C44-includes end

/* user defined constants */
// section 127-0-0-1-964a67c:1410da3236e:-8000:0000000000000C44-constants begin
// section 127-0-0-1-964a67c:1410da3236e:-8000:0000000000000C44-constants end

/**
 * Short description of class calender_week_view
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class calender_week_view
    extends basic_calender
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute calender_week
     *
     * @access public
     * @var calender_week
     */
    public $calender_week = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  year
     * @param  month
     * @version 1.0
     */
    public function set_calender_week($year, $month, $day)
    {
     date_default_timezone_set('Europe/Berlin');
     
     $week_time = new DateTime();
     $week_time->setdate($year, $month, $day );
     
     $this->calender_week = new calender_week();
     $this->calender_week->set_week_time( $week_time );
     $this->calender_week->fill_week();
     $this->calender_week->fill_day_by_week( $this->get_frame() );
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_header()
    {
     $return = 
     $this->language['week'] . " " .
     $this->calender_week->get_week(). " " .
     $this->calender_week->get_year();
     
     if ( $this->language['lang'] == "ge" )
     {
     $return = 
     $this->calender_week->get_week(). ". " .
     $this->language['week'] . ". " .
     $this->calender_week->get_year();
     }         
         
     return $return;
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
     $this->get_table_name_header() .
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
     $calender_day_list = $this->calender_week->get_day_list();
     $return_string = "<tbody>";

     $elementcount =
     $calender_day_list->get_item( 0 )
     ->get_time_element_list()->get_item_count();
     
     for ($n = 0; $n < $elementcount; $n++)
     {
     $calender_day = $calender_day_list->get_item( (int)0 );
     $time_element = $calender_day->get_time_element_list()->get_item($n);
     $return_string .= "<tr>" .
     "<td >" . $time_element->get_number_description_by_week() . "</td>";

     for ($i = 0; $i < $calender_day_list->get_item_count(); $i++)
     {
     $calender_day = $calender_day_list->get_item( $i );
     $time_element = $calender_day->get_time_element_list()->get_item($n);
     $return_string .= "<td >" .
     $time_element->get_time_description_by_week() . "</td>";
     }
     $return_string .= "</tr>";
     }
     return $return_string . "</tbody>";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_table_name_header()
    {
     $name_header = "<tr>" .
     "<th>" . $this->language['time_number'] . "</th>";
     for ($i = 0; $i < $this->day_names->get_item_count(); $i++)
     {
     $name_header = $name_header .
     "<th>" . $this->day_names->get_item( $i ) . "</th>";
     }
     $name_header = $name_header . "</tr>";
     return $name_header;
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
    "<th>" .
    $this->language['weekview'] . 
    "</th>" .
    "<th>"  .
     "<a href=\"" .
     $_SESSION[$control_base] . $this->get_control_frame() .
     "?y=" .
     "&m=" .
     "&d=" .
     "&modus=" . "day" .
     "\">" . $this->language['dayview'] . "</a>" .
    "</th>" .
    "</tr>";
    }


    public function get_table_top_header()
    {
     $next_week_time  = $this->calender_week->get_next_week_time();
     $prev_week_time  = $this->calender_week->get_prev_week_time();
     $control_base = $this->get_frame() . '_control_base';
     
     $top_header =
     "<tr>" .
     "<th>" .
     "<a class =\"mytdclass\" href=\"" .
     $_SESSION[$control_base] . $this->get_control_frame().
     "?y=" . $prev_week_time->format("Y") .
     "&m=" . $prev_week_time->format("m") .
     "&d=" . $prev_week_time->format("d") .
     "&modus=" . "week" .
     "\">" . "<" . "</a>" .
     "</th>" .
     
     "<th colspan=\"" . 6 . "\">" .
     $this->get_header() .
     "</th>" .
     
     "<th>" .
     "<a class =\"mytdclass\" href=\"" .
     $_SESSION[$control_base] . $this->get_control_frame().
     "?y=" . $next_week_time->format("Y") .
     "&m=" . $next_week_time->format("m") .
     "&d=" . $next_week_time->format("d") .
     "&modus=" . "week" .
     "\">" . ">" . "</a>" .
     "</th>" .
     "</tr>";
     return $top_header;
    }
}?>