<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.interview_event_registration_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 20.11.2016, 20:44:50 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include event_registration_form
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.event_registration_form.php');

/* user defined includes */
// section 10-30--8--28-5bdcbac:1582003dca3:-8000:0000000000000DA0-includes begin
// section 10-30--8--28-5bdcbac:1582003dca3:-8000:0000000000000DA0-includes end

/* user defined constants */
// section 10-30--8--28-5bdcbac:1582003dca3:-8000:0000000000000DA0-constants begin
// section 10-30--8--28-5bdcbac:1582003dca3:-8000:0000000000000DA0-constants end

/**
 * Short description of class interview_event_registration_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class interview_event_registration_form
    extends event_registration_form
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
     { define('__VIEW_CONTROL__', $this->get_root_view_control() ); }
     require_once(__VIEW_CONTROL__.'class.fbox_text_element.php');
     require_once(__VIEW_CONTROL__.'class.fbox_wrap_element.php');
     require_once(__VIEW_CONTROL__.'class.fbox_date_element.php');
     require_once(__VIEW_CONTROL__.'class.fbox_time_element.php');
     require_once(__VIEW_CONTROL__.
     'class.fbox_select_time_slice_element.php');
     
     $name = new fbox_text_element();
     $name->set_label($this->language['C3_name']);
     $name->set_name("name");
     
     $time_slice = new fbox_select_time_slice_element();
     $time_slice->set_language( $this->language );
     $time_slice->set_label($this->language['C3_select_time_slice_header']);
     $time_slice->set_name("time_slice");
     $time_slice->set_value( (int)0 );
     $time_slice->define_model();
     
     $start_1_wrap = new fbox_wrap_element();
     $start_1_date = new fbox_date_element();
     $start_1_date->set_label($this->language['C3_startdate_1']);
     $start_1_date->set_name( "start_1_date");
     $start_1_date->set_value("");
     $start_1_wrap->add_item($start_1_date);
     
     $start_1_time = new fbox_time_element();
     $start_1_time->set_label($this->language['C3_starttime_1']);
     $start_1_time->set_name( "start_1_time");
     $start_1_time->set_value("");
     $start_1_wrap->add_item($start_1_time);
     
     $start_2_wrap = new fbox_wrap_element();
     $start_2_date = new fbox_date_element();
     $start_2_date->set_label($this->language['C3_startdate_2']);
     $start_2_date->set_name( "start_2_date");
     $start_2_date->set_value("");
     $start_2_wrap->add_item($start_2_date);
     
     $start_2_time = new fbox_time_element();
     $start_2_time->set_label($this->language['C3_starttime_2']);
     $start_2_time->set_name( "start_2_time");
     $start_2_time->set_value("");
     $start_2_wrap->add_item($start_2_time);
     
     $start_3_wrap = new fbox_wrap_element();
     $start_3_date = new fbox_date_element();
     $start_3_date->set_label($this->language['C3_startdate_3']);
     $start_3_date->set_name( "start_3_date");
     $start_3_date->set_value("");
     $start_3_wrap->add_item($start_3_date);
     
     $start_3_time = new fbox_time_element();
     $start_3_time->set_label($this->language['C3_starttime_3']);
     $start_3_time->set_name( "start_3_time");
     $start_3_time->set_value("");
     $start_3_wrap->add_item($start_3_time);
     
     return
     "<br /><p>" . $this->language['C3_amount'] . $this->get_amount() .
     $name->get_element() .
     $time_slice->get_element() .
     $start_1_wrap->get_element() .
     $start_2_wrap->get_element() .
     $start_3_wrap->get_element();
    }
}?>