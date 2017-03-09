<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.receiver_update_task_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 25.01.2017, 13:15:00 with ArgoUML PHP module 
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
// section 10-30--16-64-2db09b41:159ac94cdbb:-8000:0000000000000E15-includes begin
// section 10-30--16-64-2db09b41:159ac94cdbb:-8000:0000000000000E15-includes end

/* user defined constants */
// section 10-30--16-64-2db09b41:159ac94cdbb:-8000:0000000000000E15-constants begin
// section 10-30--16-64-2db09b41:159ac94cdbb:-8000:0000000000000E15-constants end

/**
 * Short description of class receiver_update_task_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class receiver_update_task_form
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
     if( defined('__VIEW_CONTROL__') == FALSE )
     { define('__VIEW_CONTROL__',
     $this->get_root_view_control() ); }
     
     require_once(__VIEW_CONTROL__.
     'class.fbox_text_area_element.php');
     require_once(__VIEW_CONTROL__.
     'class.fbox_select_duration_element.php');
     require_once(__VIEW_CONTROL__.
     'class.fbox_select_status_element.php');
     
     // -------------- task description --------------
     
     $description = $this->get_model()->get_task_description();
     if ( $description == "" )
     { $description = $this->language['C3_no_task_description']; }
     
     $task_description =
     "<p>" .
     "<b>" . $this->language['C3_task_description'] . ": " . "</b>" .
     $description .
     "</p>";
     
     // -------------- est duration --------------
     
     $est_duration =
     "<p>" .
     "<b>" . $this->language['C3_est_duration'] . ": " . "</b>" .
     $this->language['duration_' .
     $this->get_model()->get_est_duration() ] .
     "</p>";
     
     // -------------- real duration --------------
     
     $real_duration = new fbox_select_duration_element();
     $real_duration->set_language( $this->language );
     $real_duration->set_label($this->language['C3_real_duration']);
     $real_duration->set_name("real_duration");
     $real_duration->set_value( (int)2 );
     $real_duration->define_model();
     
     // -------------- receiver comment --------------
     
     $receiver_comment = new fbox_text_area_element();
     $receiver_comment->set_label(
     $this->language['C3_receiver_comment']);
     $receiver_comment->set_name("receiver_comment");
     $receiver_comment->set_value(
     $this->get_model()->get_receiver_comment() );
     
     // --------- fbox_select_status_element -----------
     
     $status = new fbox_select_status_element();
     $status->set_language( $this->language );
     $status->set_label($this->language['C3_status']);
     $status->set_name("status");
     $status->set_value( $this->get_model()->get_status() );
     $status->define_model();
     
     // --------- start_end_time -----------
     
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
     $real_duration->get_element() .
     $receiver_comment->get_element() .
     $status->get_element() .
     $start_end_time;
    }
}?>