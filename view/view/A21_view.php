<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.A21_view.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 09.12.2016, 17:43:07 with ArgoUML PHP module 
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
// section 10-5-29--89-805fa68:158d8927fff:-8000:00000000000047BB-includes begin
// section 10-5-29--89-805fa68:158d8927fff:-8000:00000000000047BB-includes end

/* user defined constants */
// section 10-5-29--89-805fa68:158d8927fff:-8000:00000000000047BB-constants begin
// section 10-5-29--89-805fa68:158d8927fff:-8000:00000000000047BB-constants end

/**
 * Short description of class A21_view
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class A21_view
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
     $this->load_language("a21");
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_column3_content()
    {
     $column3_content =  "" .
     $this->get_contact_form() ;
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_contact_form()
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.member.php');
     
     if( defined('__ROOT_VIEW__') == FALSE )
     { define('__ROOT_VIEW__', $this->get_root_view() ); }
     require_once(__ROOT_VIEW__.'view/class_views/class.member_info_view.php');

     $language = $this->get_language_array();
     
     $bernd = new member();
     $bernd->set_id( (int)160 );
     $bernd->load();
     
     $bernd_view = new member_info_view();
     $bernd_view->set_member( $bernd );
     $bernd_view->set_text( utf8_decode( $language['C3_bernd'] ) );
         
     $stephan = new member();
     $stephan->set_id( (int)116 );
     $stephan->load();

     $stephan_view = new member_info_view();
     $stephan_view->set_member( $stephan );
     $stephan_view->set_text( utf8_decode( $language['C3_stephan'] ) );
     
     return
     $stephan_view->get_view() .
     $bernd_view->get_view();
    }
}?>