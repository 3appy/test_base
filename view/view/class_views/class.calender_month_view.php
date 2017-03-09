<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.calender_month_view.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 01.01.2014, 19:40:12 with ArgoUML PHP module 
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
 * include calender_day
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.calender_day.php');

/**
 * include calender_month
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.calender_month.php');

/* user defined includes */
// section 127-0-0-1-964a67c:1410da3236e:-8000:0000000000000C47-includes begin
// section 127-0-0-1-964a67c:1410da3236e:-8000:0000000000000C47-includes end

/* user defined constants */
// section 127-0-0-1-964a67c:1410da3236e:-8000:0000000000000C47-constants begin
// section 127-0-0-1-964a67c:1410da3236e:-8000:0000000000000C47-constants end

/**
 * Short description of class calender_month_view
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class calender_month_view
    extends basic_calender
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute calender_month
     *
     * @access public
     * @var calender_month
     */
    public $calender_month = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_header()
    {
     $month = $this->calender_month->get_month();
     return
     $this->month_names->get_item( $month -1 ).' '.
     $this->calender_month->get_year();
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
     $calender_week_list = $this->calender_month->get_week_list();
     $return_string = "<tbody>";
     
     for ($i = 0; $i < $calender_week_list->get_item_count(); $i++)
     {
     $calender_week = $calender_week_list->get_item( $i );
     $return_string = $return_string . 
     $this->get_week_view( $calender_week );
     }
     return $return_string . "</tbody>";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  year
     * @param  month
     * @version 1.0
     */
    public function set_calender_month($year, $month)
    {
/*
      date_default_timezone_set('Europe/Berlin');
     $timezone = new DateTimeZone('Europe/Berlin' );
     
     if ( ( $year == 0 ) or ( $month == 0))
     {
     $date = mktime(0,0,0,date("m"), 1,date("Y"));
     $month_time = new DateTime();
     $month_time->createFromFormat('d/m/Y', $date, $timezone );
     }
     else
     {
     */
     $month_time = new DateTime();
     $month_time->setdate($year, $month, 1 );
//     }
     $this->calender_month = new calender_month();
     $this->calender_month->set_month_time( $month_time );
     $this->calender_month->fill_month();
     $this->calender_month->fill_day_by_month();
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
     "<th>" . $this->language['week'] . "</th>";
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
    $this->language['monthview'] .
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
     $prev_month_time = $this->calender_month->get_prev_month_time();
     $next_month_time = $this->calender_month->get_next_month_time();
     $control_base = $this->get_frame() . '_control_base';
     
     $top_header =
     "<tr>" .
     "<th>" .
     "<a class =\"mytdclass\" href=\"" .
     $_SESSION[$control_base] . $this->get_control_frame() .
     "?y=" . $prev_month_time->format("Y") .
     "&m=" . $prev_month_time->format("m") .
     "&d=" . 0 .
     "&modus=" . "month" .
     "\">" . "<" . "</a>" .
     "</th>" .
     
     "<th colspan=\"" . 6 . "\">" .
     $this->get_header() .
     "</th>" .
     
     "<th>" .
     "<a class =\"mytdclass\" href=\"" .
     $_SESSION[$control_base] . $this->get_control_frame() .
     "?y=" . $next_month_time->format("Y") .
     "&m=" . $next_month_time->format("m") .
     "&d=" . 0 .
     "&modus=" . "month" .
     "\">" . ">" . "</a>" .
     "</th>" .
     "</tr>";
     return $top_header;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  calender_week
     * @version 1.0
     */
    public function get_week_view($calender_week)
    {
     $week_time = $calender_week->get_week_time();
     $control_base = $this->get_frame() . '_control_base';
     
     $return_string = "<tr>" .
     "<td class =\"mytdclass\" >".
     "<a href=\"" .
     $_SESSION[$control_base] . $this->get_control_frame() .
     "?y=" . $week_time->format("Y") .
     "&m=" . $week_time->format("m") .
     "&d=" . $week_time->format("d") .
     "&modus=" . "week" .
     "\">" . $calender_week->get_week() . "</a>" .
     "</td>";
     
     $calender_day_list = $calender_week->get_day_list();
     for ($i = 0; $i < $calender_day_list->get_item_count(); $i++)
     {
     $calender_day = $calender_day_list->get_item( $i );
     if ( $calender_day->get_month() == $this->calender_month->get_month() )
     {
     $return_string = $return_string .
     "<td >" .
     "<a href=\"" .
     $_SESSION[$control_base] . $this->get_control_frame() .
     "?y=" . $calender_day->get_day_time()->format("Y") .
     "&m=" . $calender_day->get_day_time()->format("m") .
     "&d=" . $calender_day->get_day_time()->format("d") .
     "&modus=" . "day" .
     "\">" . $calender_day->get_date_by_month( TRUE ) . "</a>" .
     "</td>";
     }
     else
     {
     $return_string = $return_string .
     "<td class =\"mytdclass\" >".
     $calender_day->get_date_by_month( FALSE ) .
     "</td>";
     }
     }
     return $return_string . "</tr>";
    }
}?>