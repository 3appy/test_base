<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.member_data_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 09.11.2013, 02:23:27 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include fbox_sex_select_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_sex_select_element.php');

/**
 * include group_link_data_part
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.group_link_data_part.php');

/**
 * include main_data_form
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.main_data_form.php');

/* user defined includes */
// section 127-0-0-1--130f963b:13f0a126c70:-8000:0000000000000BC5-includes begin
// section 127-0-0-1--130f963b:13f0a126c70:-8000:0000000000000BC5-includes end

/* user defined constants */
// section 127-0-0-1--130f963b:13f0a126c70:-8000:0000000000000BC5-constants begin
// section 127-0-0-1--130f963b:13f0a126c70:-8000:0000000000000BC5-constants end

/**
 * Short description of class member_data_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class member_data_form
    extends main_data_form
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute forname_value
     *
     * @access public
     * @var String
     */
    public $forname_value = null;

    /**
     * Short description of attribute gender
     *
     * @access public
     * @var Integer
     */
    public $gender = null;

    /**
     * Short description of attribute language
     *
     * @access public
     * @var String
     */
    public $language = null;

    /**
     * Short description of attribute mail_value
     *
     * @access public
     * @var Integer
     */
    public $mail_value = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  forname_value
     * @version 1.0
     */
    public function set_forname_value($forname_value)
    {
     $this->forname_value = $forname_value;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  surename_value
     * @version 1.0
     */
    public function set_gender($gender)
    {
     $this->gender = $gender;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  language
     * @version 1.0
     */
    public function set_language($language)
    {
     $this->language = $language;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_element_list()
    {
     $forname_element = new fbox_text_element();
     $forname_element->set_label($this->language['C3_forname']);
     $forname_element->set_name("forname");
     $forname_element->set_value($this->forname_value);
     
     $wrap_element = new fbox_wrap_element();
     $mail_element = new fbox_text_element();
     $mail_element->set_label($this->language['C3_mail']);
     $mail_element->set_name("mail");
     $mail_element->set_value($this->mail_value);
     $wrap_element->add_item($mail_element);
     
     $sex_select_element = new fbox_sex_select_element();
     $sex_select_element->set_language( $this->language );
     $sex_select_element->set_label($this->language['C3_gender']);
     $sex_select_element->set_name("gender");
     $sex_select_element->set_value( $this->gender );
     $wrap_element->add_item($sex_select_element);
     
     return
     $forname_element->get_element() .
     $this->get_name_element() .
     $wrap_element->get_element() .
     $this->date_data_part->get_element_list() .
     $this->address_data_part->get_element_list() .
     $this->private_data_part->get_element_list() .
     $this->link_data_part->get_element_list();
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  mail_value
     * @version 1.0
     */
    public function set_mail_value($mail_value)
    {
     $this->mail_value = $mail_value;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  link_data_part
     * @version 1.0
     */
    public function set_link_data_part($link_data_part)
    {
     $this->link_data_part = $link_data_part;
    }
}?>