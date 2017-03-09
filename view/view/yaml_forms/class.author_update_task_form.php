<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.author_update_task_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 25.01.2017, 10:48:41 with ArgoUML PHP module 
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
// section 10-30--16-64-2db09b41:159ac94cdbb:-8000:0000000000000E13-includes begin
// section 10-30--16-64-2db09b41:159ac94cdbb:-8000:0000000000000E13-includes end

/* user defined constants */
// section 10-30--16-64-2db09b41:159ac94cdbb:-8000:0000000000000E13-constants begin
// section 10-30--16-64-2db09b41:159ac94cdbb:-8000:0000000000000E13-constants end

/**
 * Short description of class author_update_task_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class author_update_task_form
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
     
     $real_duration =
     "<p>" .
     "<b>" . $this->language['C3_real_duration'] . ": " . "</b>" .
     $this->language['duration_' .
     $this->get_model()->get_real_duration() ] .
     "</p>";
     
     // --------- receiver comment -----------
     
     $comment = $this->get_model()->get_receiver_comment();
     if ( $comment == "" )
     { $comment = $this->language['C3_no_receiver_comment']; }
     
     $receiver_comment =
     "<p>" .
     "<b>" . $this->language['C3_receiver_comment'] . ": " . "</b>" .
     str_replace("\n","<br />", $comment ) .
     "</p>";
     
     // -------------- author comment --------------
     
     $author_comment = new fbox_text_area_element();
     $author_comment->set_label($this->language['C3_author_comment']);
     $author_comment->set_name("author_comment");
     $author_comment->set_value(
     $this->get_model()->get_author_comment() );
     
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
     $real_duration .
     $receiver_comment .
     $author_comment->get_element() .
     $status->get_element() .
     $start_end_time;
    }
}?>