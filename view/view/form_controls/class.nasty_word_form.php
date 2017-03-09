<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.nasty_word_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 02.12.2013, 12:51:24 with ArgoUML PHP module 
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
// section 10-5-26--88-69d951db:142b2af7155:-8000:0000000000003EAA-includes begin
// section 10-5-26--88-69d951db:142b2af7155:-8000:0000000000003EAA-includes end

/* user defined constants */
// section 10-5-26--88-69d951db:142b2af7155:-8000:0000000000003EAA-constants begin
// section 10-5-26--88-69d951db:142b2af7155:-8000:0000000000003EAA-constants end

/**
 * Short description of class nasty_word_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class nasty_word_form
    extends standard_form
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_element_list()
    {
     $word_element = new fbox_text_element();
     $word_element->set_label($this->language['C3_header']);
     $word_element->set_name("new_word");
     $word_element->set_value("");
     
     return 
     $word_element->get_element();
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