<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.A20_view.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 08.12.2016, 10:40:01 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include A_view
 *
 * @author Bernd Schröder
 * @version 1.0
 */
require_once('class.A_view.php');

/* user defined includes */
// section 10-5-29--89-805fa68:158d8927fff:-8000:00000000000047BA-includes begin
// section 10-5-29--89-805fa68:158d8927fff:-8000:00000000000047BA-includes end

/* user defined constants */
// section 10-5-29--89-805fa68:158d8927fff:-8000:00000000000047BA-constants begin
// section 10-5-29--89-805fa68:158d8927fff:-8000:00000000000047BA-constants end

/**
 * Short description of class A20_view
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class A20_view
    extends A_view
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function __construct()
    {
     parent::__construct();
     $this->load_language("a20");
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_column3_content()
    {
     $column3_content =  "" .
     $this->get_school_registration_form() ;
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_school_registration_form()
    {
     $language_array = $this->get_language_array();
     
     $action =
     $_SESSION['A_control_base'] .
     "A20_post_frame.php" .
     "?language=" . $this->watch_entity->get_language();
     
     if( defined('__VIEW_VIEW_ROOT__') == FALSE )
     { define('__VIEW_VIEW_ROOT__', dirname(__FILE__) ); }
     require_once(__VIEW_VIEW_ROOT__.
     '/yaml_forms/class.school_registration_form.php');
     
     $form = new school_registration_form($action);
     $form->set_language($language_array);
     $form->set_header( $language_array['C3_form_header'] );
     return $form->get_form();
    }
}?>