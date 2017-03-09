<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.member_inviation_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 21.04.2015, 14:37:10 with ArgoUML PHP module 
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
 * include member_registration_form
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.member_registration_form.php');

/* user defined includes */
// section 10-30-49--128--31edc19a:14cdbe7a112:-8000:00000000000010FA-includes begin
// section 10-30-49--128--31edc19a:14cdbe7a112:-8000:00000000000010FA-includes end

/* user defined constants */
// section 10-30-49--128--31edc19a:14cdbe7a112:-8000:00000000000010FA-constants begin
// section 10-30-49--128--31edc19a:14cdbe7a112:-8000:00000000000010FA-constants end

/**
 * Short description of class member_inviation_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class member_inviation_form
    extends member_registration_form
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
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
     
     $text_element = new fbox_area_element();
     $text_element->set_label($this->language['C3_invitation_text']);
     $text_element->set_name("invitation_text");
     
     return
     $forename_element->get_element() .
     $name_element->get_element() .
     $mail_element->get_element() .
     $text_element->get_element();
    }
}?>