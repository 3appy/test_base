<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.author_insert_all_task_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 25.01.2017, 10:49:31 with ArgoUML PHP module 
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
// section 10-30--16-64-2db09b41:159ac94cdbb:-8000:0000000000000E11-includes begin
// section 10-30--16-64-2db09b41:159ac94cdbb:-8000:0000000000000E11-includes end

/* user defined constants */
// section 10-30--16-64-2db09b41:159ac94cdbb:-8000:0000000000000E11-constants begin
// section 10-30--16-64-2db09b41:159ac94cdbb:-8000:0000000000000E11-constants end

/**
 * Short description of class author_insert_all_task_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class author_insert_all_task_form
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
     'class.link_button.php');
     require_once(__VIEW_CONTROL__.
     'class.fbox_text_area_element.php');
     require_once(__VIEW_CONTROL__.
     'class.fbox_select_duration_element.php');
     require_once(__VIEW_CONTROL__.
     'class.fbox_select_status_element.php');
     require_once(__VIEW_CONTROL__.
     'class.fbox_select_table_item_element.php');
     require_once(__VIEW_CONTROL__.
     'class.fbox_text_hidden_element.php');
     require_once(__VIEW_CONTROL__.
     'class.fbox_select_filetype_element.php');
     
     // ----------------- link button -----------------
     
     $status_button = new link_button();
     $status_button->set_name($this->language['selected_pupils']);
     $status_button->set_link($_SESSION['C_control_base'] .
     "C_post_frame.php" .
     "?function=38" . "&id=" . (int)0 . "&team_id=" .
     $_SESSION['watched_id'] . "&image_link_modus=" .
     (int)1 . "&all=selected" );
     
     // -------------- task_description --------------
     
     $task_description = new fbox_text_area_element();
     $task_description->set_label($this->language['C3_task_description']);
     $task_description->set_name("task_description");
     
     // -------- fbox_duration_select_element --------
     
     $est_duration = new fbox_select_duration_element();
     $est_duration->set_language( $this->language );
     $est_duration->set_label($this->language['C3_est_duration']);
     $est_duration->set_name("est_duration");
     $est_duration->set_value( (int)2 );
     $est_duration->define_model();
     
     // --------- fbox_select_status_element -----------
     
     $status = new fbox_select_status_element();
     $status->set_language( $this->language );
     $status->set_label($this->language['C3_status']);
     $status->set_name("status");
     $status->set_value( (int)3 );
     $status->define_model();
     
     // ----------- fbox_select_table_item_element ----------
     
     $start_time = new fbox_select_table_item_element();
     $start_time->set_language( $this->language );
     $start_time->set_label($this->language['C3_start_time']);
     $start_time->set_name("start_time_item_id");
     $start_time->define_model();
     
     // ---------- fbox_select_table_item_element ----------
     
     $end_time = new fbox_select_table_item_element();
     $end_time->set_language( $this->language );
     $end_time->set_label($this->language['C3_end_time']);
     $end_time->set_name("end_time_item_id");
     $end_time->define_model();
     
     // ------- add file from disk --------
     
     $userfile = new fbox_text_hidden_element();
     $userfile->set_label($this->language['C3_userfile_disk']);
     $userfile->set_name("userfile");
     
     // ----- add file from your profile -----
     
     $filetype = new fbox_select_filetype_element();
     $filetype->set_label($this->language['C3_userfile_profile']);
     $filetype->set_language( $this->language );
     $filetype->set_name("filetype");
     $filetype->define_model();
     
     return
     "<hr>" .
     $status_button->get_button() .
     "<hr>" .
     $task_description->get_element() .
     $est_duration->get_element() .
     $status->get_element() .
     $start_time->get_element() .
     $end_time->get_element();
//     "<hr>" .
//     "<h6 class=\"ym-fbox-heading\">" .
//     $this->language['C3_addfile'] . "</h6>" .
//     $userfile->get_element() .
//     $filetype->get_element();
    }
}?>