<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.follower_view_task_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 25.01.2017, 15:43:20 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include standard_form
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.standard_form.php');

/* user defined includes */
// section 10-30--16-64-2db09b41:159ac94cdbb:-8000:0000000000000E17-includes begin
// section 10-30--16-64-2db09b41:159ac94cdbb:-8000:0000000000000E17-includes end

/* user defined constants */
// section 10-30--16-64-2db09b41:159ac94cdbb:-8000:0000000000000E17-constants begin
// section 10-30--16-64-2db09b41:159ac94cdbb:-8000:0000000000000E17-constants end

/**
 * Short description of class follower_view_task_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class follower_view_task_form
    extends standard_form
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_element_list()
    {
     // --------- task description --------
     
     $description = $this->get_model()->get_task_description();
     if ( $description == "" )
     { $description = $this->language['C3_no_task_description']; }
     
     $task_description =
     "<p>" .
     "<b>" . $this->language['C3_task_description'] . ": " . "</b>" .
     $description .
     "</p>";
     
     // --------- est duration --------
     
     $est_duration =
     "<p>" .
     "<b>" . $this->language['C3_est_duration'] . ": " . "</b>" .
     $this->language['duration_' . 
     $this->get_model()->get_est_duration() ] .
     "</p>";
     
     // --------- real duration --------
     
     $real_duration =
     "<p>" .
     "<b>" . $this->language['C3_real_duration'] . ": " . "</b>" .
     $this->language['duration_' . 
     $this->get_model()->get_real_duration() ] .
     "</p>";
     
     // --------- real duration --------
     
     $status =
     "<p>" .
     "<b>" . $this->language['C3_status'] . ": " . "</b>" .
     $this->language['selectstatus_' . 
     $this->get_model()->get_status() ] .
     "</p>";
     
     // --------- start end time --------
     
     $start_end_time =
     "<p>" .
     "<b>" . $this->language['C3_start_time'] . ": " . "</b>" .
     $this->get_model()->get_start_date_eu() . " " .
     "<b>" . $this->language['C3_end_time'] . ": " . "</b>" .
     $this->get_model()->get_end_date_eu() .
     "</p>";
     
     return
     $task_description .
     $est_duration .
     $real_duration .
     $status .
     $start_end_time;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_button()
    {
     return "";
    }
}?>