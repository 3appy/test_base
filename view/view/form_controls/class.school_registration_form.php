<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.school_registration_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 15.11.2015, 10:55:36 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include address_data_part
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.standard_form.php');

/* user defined includes */
// section 10-5-25-31-45fa9345:15106a18678:-8000:000000000000229A-includes begin
// section 10-5-25-31-45fa9345:15106a18678:-8000:000000000000229A-includes end

/* user defined constants */
// section 10-5-25-31-45fa9345:15106a18678:-8000:000000000000229A-constants begin
// section 10-5-25-31-45fa9345:15106a18678:-8000:000000000000229A-constants end

/**
 * Short description of class school_registration_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class school_registration_form
    extends standard_form
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */


    public function get_empty_address()
    {
     if( defined('__DB_ROOT__') == FALSE )
     { define('__DB_ROOT__', dirname(dirname(dirname(dirname(__FILE__)))) ); }
     require_once(__DB_ROOT__.'/data/class.address.php');

     $address = new address();
     return $address;   
    }
    
    public function get_element_list()
    {
     if( defined('__FORM_ROOT__') == FALSE )
     { define('__FORM_ROOT__', dirname(__FILE__) ); }
     require_once(__FORM_ROOT__.'/class.address_data_part.php');
     require_once(__FORM_ROOT__.'/class.fbox_text_element.php');
     require_once(__FORM_ROOT__.'/class.fbox_wrap_element.php');
     require_once(__FORM_ROOT__.'/class.fbox_sex_select_element.php');
     
     $school_address = new address_data_part();
     $school_address->set_language($this->language);
     $school_address->set_address( $this->get_empty_address() );
     
     $forname = new fbox_text_element();
     $forname->set_label($this->language['C3_forname']);
     $forname->set_name("forname");

     $name = new fbox_text_element();
     $name->set_label($this->language['C3_name']);
     $name->set_name("name");

     $wrap_element = new fbox_wrap_element();
     $mail = new fbox_text_element();
     $mail->set_label($this->language['C3_mail']);
     $mail->set_name("mail");
     $wrap_element->add_item($mail);

     $sex_select = new fbox_sex_select_element();
     $sex_select->set_language( $this->language );
     $sex_select->set_label($this->language['C3_gender']);
     $sex_select->set_name("gender");
     $wrap_element->add_item($sex_select);

     return
     $school_address->get_element_list() .
     $forname->get_name_element() .
     $name->get_name_element() .
     $wrap_element->get_element();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_button()
    {
     $button = new send_reset_button();
     $button->set_send($this->language['C3_send_button']);
     $button->set_reset($this->language['C3_reset_button']);
     return $button->get_button();
    }
}?>