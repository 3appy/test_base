<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.upload_data_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 01.11.2014, 00:30:34 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include fbox_area_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_area_element.php');

/**
 * include fbox_hidden_text_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_hidden_text_element.php');

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
// section 10-30-8-26-4c1d658d:1402f1266e0:-8000:0000000000000E1D-includes begin
// section 10-30-8-26-4c1d658d:1402f1266e0:-8000:0000000000000E1D-includes end

/* user defined constants */
// section 10-30-8-26-4c1d658d:1402f1266e0:-8000:0000000000000E1D-constants begin
// section 10-30-8-26-4c1d658d:1402f1266e0:-8000:0000000000000E1D-constants end

/**
 * Short description of class upload_data_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class upload_data_form
    extends standard_form
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute header_value
     *
     * @access public
     * @var String
     */
    public $header_value = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_element_list()
    {
     $header_element = new fbox_text_element();
     $header_element->set_label($this->language['C3_header']);
     $header_element->set_name("header");
     $header_element->set_value("");
     
     $upload_element = new fbox_hidden_text_element();
     $upload_element->set_label($this->language['C3_userfile']);
     $upload_element->set_name("userfile");
     
     $description = new fbox_area_element();
     $description->set_label($this->language['C3_description']);
     $description->set_name("description");
     
     return 
     $header_element->get_element() .
     $upload_element->get_element() .
     $description->get_element();
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