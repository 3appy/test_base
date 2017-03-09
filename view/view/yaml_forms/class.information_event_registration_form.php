<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.information_event_registration_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 01.11.2016, 15:15:16 with ArgoUML PHP module 
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
// section 10-5-29--89--4c70d4ad:15819f699ec:-8000:000000000000297A-includes begin
// section 10-5-29--89--4c70d4ad:15819f699ec:-8000:000000000000297A-includes end

/* user defined constants */
// section 10-5-29--89--4c70d4ad:15819f699ec:-8000:000000000000297A-constants begin
// section 10-5-29--89--4c70d4ad:15819f699ec:-8000:000000000000297A-constants end

/**
 * Short description of class information_event_registration_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class information_event_registration_form
    extends event_registration_form
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     * .
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
     
     $name = new fbox_text_element();
     $name->set_label($this->language['C3_name']);
     $name->set_name("name");
     
     $start_wrap = new fbox_wrap_element();
     $start_date = new fbox_date_element();
     $start_date->set_label($this->language['C3_startdate']);
     $start_date->set_name( "startdate");
     $start_date->set_value("");
     $start_wrap->add_item($start_date);
     
     $start_time = new fbox_time_element();
     $start_time->set_label($this->language['C3_starttime']);
     $start_time->set_name( "starttime");
     $start_time->set_value("");
     $start_wrap->add_item($start_time);
     
     $end_wrap = new fbox_wrap_element();
     $end_date = new fbox_date_element();
     $end_date->set_label($this->language['C3_enddate']);
     $end_date->set_name( "enddate");
     $end_date->set_value("");
     $end_wrap->add_item($end_date);
     
     $end_time = new fbox_time_element();
     $end_time->set_label($this->language['C3_endtime']);
     $end_time->set_name( "endtime");
     $end_time->set_value("");
     $end_wrap->add_item($end_time);
     
     return
     "<br /><p>" . $this->language['C3_amount'] . $this->get_amount() .
     $name->get_element() .
     $start_wrap->get_element() .
     $end_wrap->get_element();
    }
}?>