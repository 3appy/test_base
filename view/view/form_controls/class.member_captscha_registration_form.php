<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.member_captscha_registration_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 01.04.2015, 09:31:03 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include member_registration_form
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.member_registration_form.php');

/* user defined includes */
// section 10-5-25--126-84cdadd:14c73c384e5:-8000:00000000000010F9-includes begin
// section 10-5-25--126-84cdadd:14c73c384e5:-8000:00000000000010F9-includes end

/* user defined constants */
// section 10-5-25--126-84cdadd:14c73c384e5:-8000:00000000000010F9-constants begin
// section 10-5-25--126-84cdadd:14c73c384e5:-8000:00000000000010F9-constants end

/**
 * Short description of class member_captscha_registration_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class member_captscha_registration_form
    extends member_registration_form
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
     require_once('class.fbox_captscha_element.php');

     $captscha_element = new fbox_captscha_element();
     $captscha_element->set_label($this->language['C3_captscha']);
     $captscha_element->set_name("captscha");
     $captscha_element->set_value("");
     
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
     $captscha_element->get_element() .
     $forename_element->get_element() .
     $name_element->get_element() .
     $mail_element->get_element();
    }
}?>