<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.password_change_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 21.10.2013, 09:31:27 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include fbox_password_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_password_element.php');

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
// section -64--88--78-21--551357e7:141d704cd49:-8000:00000000000013B5-includes begin
// section -64--88--78-21--551357e7:141d704cd49:-8000:00000000000013B5-includes end

/* user defined constants */
// section -64--88--78-21--551357e7:141d704cd49:-8000:00000000000013B5-constants begin
// section -64--88--78-21--551357e7:141d704cd49:-8000:00000000000013B5-constants end

/**
 * Short description of class password_change_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class password_change_form
    extends standard_form
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute empty_text
     *
     * @access public
     * @var String
     */
    public $empty_text = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  empty_text
     * @version 1.0
     */
    public function set_empty_text($empty_text)
    {
     $this->empty_text = $empty_text;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_element_list()
    {
     $old_password_element = new fbox_text_element();
     $old_password_element->set_label($this->language['C3_old_password']);
     $old_password_element->set_name("old_password");
     $old_password_element->set_value("");
     
     $password1_element = new fbox_password_element();
     $password1_element->set_label($this->language['C3_new_password1']);
     $password1_element->set_name("new_password1");
     $password1_element->set_empty_text( $this->empty_text );
     $password1_element->set_value("");
     
     $password2_element = new fbox_password_element();
     $password2_element->set_label($this->language['C3_new_password2']);
     $password2_element->set_name("new_password2");
     $password2_element->set_empty_text( $this->empty_text );
     $password2_element->set_value("");
     
     return 
     $old_password_element->get_element() .
     $password1_element->get_element() .
     $password2_element->get_element();
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