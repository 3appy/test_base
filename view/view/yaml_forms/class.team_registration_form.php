<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.team_registration_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 29.08.2016, 12:03:07 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include standard_form
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.standard_form.php');

/* user defined includes */
// section 10-30-49-45-b251f24:156c7009e23:-8000:0000000000000AD9-includes begin
// section 10-30-49-45-b251f24:156c7009e23:-8000:0000000000000AD9-includes end

/* user defined constants */
// section 10-30-49-45-b251f24:156c7009e23:-8000:0000000000000AD9-constants begin
// section 10-30-49-45-b251f24:156c7009e23:-8000:0000000000000AD9-constants end

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


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_element_list()
    {
     if( defined('__VIEW_CONTROL__') == FALSE )
     { define('__VIEW_CONTROL__', $this->get_root_view_control() ); }
     require_once(__VIEW_CONTROL__.
     'class.fbox_text_element.php');
     require_once(__VIEW_CONTROL__.
     'class.fbox_select_team_type_element.php');
     
     $name_element = new fbox_text_element();
     $name_element->set_label($this->language['C3_name']);
     $name_element->set_name("name");
     $name_element->set_value("");
     
     $team_type = new fbox_select_team_type_element();
     $team_type->set_language( $this->language );
     $team_type->set_label($this->language['C3_team_type']);
     $team_type->set_name("team_type");
     $team_type->set_value( (int)0 );
     $team_type->define_model();
     
     return
     $name_element->get_element() .
     $team_type->get_element();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_button()
    {
     if( defined('__VIEW_CONTROL__') == FALSE )
     { define('__VIEW_CONTROL__', $this->get_root_view_control() ); }
     require_once(__VIEW_CONTROL__.'class.send_reset_button_group.php');
     
     $button = new send_reset_button_group();
     $button->set_send($this->language['C3_send_button']);
     $button->set_reset($this->language['C3_reset_button']);
     return $button->get_button();
    }
}?>