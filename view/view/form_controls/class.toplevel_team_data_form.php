<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.toplevel_team_data_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 15.11.2015, 17:18:39 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include team_data_form
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.team_data_form.php');

/* user defined includes */
// section 10-5-25-31-45fa9345:15106a18678:-8000:00000000000022B1-includes begin
// section 10-5-25-31-45fa9345:15106a18678:-8000:00000000000022B1-includes end

/* user defined constants */
// section 10-5-25-31-45fa9345:15106a18678:-8000:00000000000022B1-constants begin
// section 10-5-25-31-45fa9345:15106a18678:-8000:00000000000022B1-constants end

/**
 * Short description of class toplevel_team_data_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class toplevel_team_data_form
    extends team_data_form
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public $forname = null;
    public $surename = null;
    public $gender = null;
    public $mail_value = null;
    public $schoolsize = null;
      
    public function set_schoolsize($schoolsize)
    {
     $this->schoolsize = $schoolsize;
    }

    public function set_forname($forname)
    {
     $this->forname = $forname;
    }
     
    public function set_surename($surename)
    {
     $this->surename = $surename;
    }
     
    public function set_gender($gender)
    {
     $this->gender = $gender;
    }

    public function set_mail_value($mail_value)
    {
     $this->mail_value = $mail_value;
    }


    public function get_element_list()
    {
     if( defined('__FORM_ROOT__') == FALSE )
     { define('__FORM_ROOT__', dirname(__FILE__) ); }
     require_once(__FORM_ROOT__.'/class.fbox_text_element.php');
     require_once(__FORM_ROOT__.'/class.fbox_wrap_element.php');
     require_once(__FORM_ROOT__.'/class.fbox_select_salutation_element.php');
     require_once(__FORM_ROOT__.'/class.fbox_school_select_size.php');
     require_once(__FORM_ROOT__.'/class.fbox_check_element.php');

     require_once(__FORM_ROOT__.'/class.fbox_req_text_element.php');
     
     $wrap_element = new fbox_wrap_element();
     $salutation = new fbox_select_salutation_element();
     $salutation->set_language( $this->language );
     $salutation->set_label($this->language['C3_salution']);
     $salutation->set_name("salution");
     $wrap_element->add_item($salutation);

//     $forname = new fbox_text_element();
     $forname = new fbox_req_text_element();
     $forname->set_label($this->language['C3_forname']);
     $forname->set_name("forname");
     $forname->set_value($this->forname);
     $wrap_element->add_item($forname);

     $surename = new fbox_text_element();
     $surename->set_label($this->language['C3_surename']);
     $surename->set_name("surename");
     $surename->set_value($this->surename);
     
     $mail_element = new fbox_text_element();
     $mail_element->set_label($this->language['C3_mail']);
     $mail_element->set_name("mail");
     $mail_element->set_value($this->mail_value);

     $school_size = new fbox_school_select_size();
     $school_size->set_language( $this->language );
     $school_size->set_label($this->language['C3_schoolsize']);
     $school_size->set_name("schoolsize");
     $school_size->set_value( $this->schoolsize );
     
     $check_AGB = new fbox_check_element();
     $check_AGB->set_label( $this->language['C3_accept_AGB'] );
     $check_AGB->set_name( "accept_AGB" );

     $check_nutzung = new fbox_check_element();
     $check_nutzung->set_label( $this->language['C3_accept_Nutzungsbedingungen'] );
     $check_nutzung->set_name( "accept_Nutzungsbedingungen" );

     return
     $this->get_name_element() .
     $school_size->get_element() .
     $this->address_data_part->get_element_list() .
     "<hr>" .
     "<h6 class=\"ym-fbox-heading\">" .
     $this->language['C3_contact'] .
     "</h6>" .
     $wrap_element->get_element() .
     $surename->get_element() .
     $mail_element->get_element() .
     "<hr>" .
     $this->private_data_part->get_element_list() .
     $check_AGB->get_element() .
     $check_nutzung->get_element();
    }
}?>