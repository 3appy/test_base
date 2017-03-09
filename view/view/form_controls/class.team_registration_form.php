<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.team_registration_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 01.11.2014, 00:46:50 with ArgoUML PHP module 
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
// section 127-0-0-1--2099a899:13eb8d64b37:-8000:000000000000143A-includes begin
// section 127-0-0-1--2099a899:13eb8d64b37:-8000:000000000000143A-includes end

/* user defined constants */
// section 127-0-0-1--2099a899:13eb8d64b37:-8000:000000000000143A-constants begin
// section 127-0-0-1--2099a899:13eb8d64b37:-8000:000000000000143A-constants end

/**
 * Short description of class team_registration_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class team_registration_form
    extends standard_form
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute team_name
     *
     * @access public
     * @var String
     */
    public $team_name = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  team_name
     * @version 1.0
     */
    public function set_team_name($team_name)
    {
     $this->team_name = $team_name;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_element_list()
    {
     $name_element = new fbox_text_element();
     $name_element->set_label($this->language['C3_name']);
     $name_element->set_name("name");
     $name_element->set_value($this->team_name);
     
     return 
     $name_element->get_element();
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