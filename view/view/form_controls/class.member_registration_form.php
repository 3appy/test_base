<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.member_registration_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 01.04.2015, 09:34:36 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

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
// section -64--88--78-21--551357e7:141d704cd49:-8000:0000000000001385-includes begin
// section -64--88--78-21--551357e7:141d704cd49:-8000:0000000000001385-includes end

/* user defined constants */
// section -64--88--78-21--551357e7:141d704cd49:-8000:0000000000001385-constants begin
// section -64--88--78-21--551357e7:141d704cd49:-8000:0000000000001385-constants end

/**
 * Short description of class member_registration_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class member_registration_form
    extends standard_form
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute forename
     *
     * @access public
     * @var String
     */
    public $forename = null;

    /**
     * Short description of attribute name
     *
     * @access public
     * @var String
     */
    public $name = null;

    /**
     * Short description of attribute mail
     *
     * @access public
     * @var String
     */
    public $mail = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  forename
     * @version 1.0
     */
    public function set_forename($forename)
    {
     $this->forename = $forename;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  name
     * @version 1.0
     */
    public function set_name($name)
    {
     $this->name = $name;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  mail
     * @version 1.0
     */
    public function set_mail($mail)
    {
     $this->mail = $mail;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_element_list()
    {
     $forename_element = new fbox_text_element();
     $forename_element->set_label($this->language['C3_forename']);
     $forename_element->set_name("forename");
     $forename_element->set_value($this->forename);
     
     $name_element = new fbox_text_element();
     $name_element->set_label($this->language['C3_name']);
     $name_element->set_name("name");
     $name_element->set_value($this->name);
     
     $mail_element = new fbox_text_element();
     $mail_element->set_label($this->language['C3_mail']);
     $mail_element->set_name("mail");
     $mail_element->set_value($this->mail);
     
     return
     $forename_element->get_element() .
     $name_element->get_element() .
     $mail_element->get_element();
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