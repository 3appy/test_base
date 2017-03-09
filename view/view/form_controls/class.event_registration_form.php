<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.event_registration_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 01.11.2014, 00:58:48 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include date_time_data_part
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.date_time_data_part.php');

/**
 * include fbox_event_type_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_event_type_element.php');

/**
 * include fbox_text_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_text_element.php');

/**
 * include send_reset_button
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.send_reset_button.php');

/**
 * include standard_form
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.standard_form.php');

/* user defined includes */
// section 10-5-25-9--6f4f683c:13ef08685b5:-8000:0000000000002080-includes begin
// section 10-5-25-9--6f4f683c:13ef08685b5:-8000:0000000000002080-includes end

/* user defined constants */
// section 10-5-25-9--6f4f683c:13ef08685b5:-8000:0000000000002080-constants begin
// section 10-5-25-9--6f4f683c:13ef08685b5:-8000:0000000000002080-constants end

/**
 * Short description of class event_registration_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class event_registration_form
    extends standard_form
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute event_name
     *
     * @access public
     * @var String
     */
    public $event_name = null;

    /**
     * Short description of attribute event_type
     *
     * @access public
     * @var Integer
     */
    public $event_type = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  event_name
     * @version 1.0
     */
    public function set_event_name($event_name)
    {
     $this->event_name = $event_name;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  event_type
     * @version 1.0
     */
    public function set_event_type($event_type)
    {
     $this->event_type = $event_type;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_element_list()
    {
     $type_element = new fbox_event_type_element();
     $type_element->set_language( $this->language );
     $type_element->set_label($this->language['C3_type_header']);
     $type_element->set_name("type");
     $type_element->set_value($this->event_type);
     
     $name_element = new fbox_text_element();
     $name_element->set_label($this->language['C3_name']);
     $name_element->set_name("name");
     $name_element->set_value($this->event_name);
     
     $start_date_time_data_part = new date_time_data_part();
     $start_date_time_data_part->set_name("start");
     $start_date_time_data_part->set_language($this->language);
     
     $end_date_time_data_part = new date_time_data_part();
     $end_date_time_data_part->set_name("end");
     $end_date_time_data_part->set_language($this->language);
     
     return
     $type_element->get_element() .
     $name_element->get_element() .
     $start_date_time_data_part->get_element_list() .
     $end_date_time_data_part->get_element_list();
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_button()
    {
     $button = new send_reset_button();
     $button->set_send($this->language['C3_send_button']);
     $button->set_reset($this->language['C3_reset_button']);
     return $button->get_button();
    }
}?>