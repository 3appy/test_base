<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.fbox_check_condition_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 17.01.2017, 10:12:07 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include fbox_check_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_check_list.php');

/* user defined includes */
// section 10-30-49-48-4b357242:159a6cece72:-8000:0000000000000B85-includes begin
// section 10-30-49-48-4b357242:159a6cece72:-8000:0000000000000B85-includes end

/* user defined constants */
// section 10-30-49-48-4b357242:159a6cece72:-8000:0000000000000B85-constants begin
// section 10-30-49-48-4b357242:159a6cece72:-8000:0000000000000B85-constants end

/**
 * Short description of class fbox_check_condition_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_check_condition_list
    extends fbox_check_list
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function define_model()
    {
     if( defined('__VIEW_CONTROL__') == FALSE )
     { define('__VIEW_CONTROL__', $this->get_root_view_control() ); }
     require_once(__VIEW_CONTROL__. 'class.fbox_model_element.php');
     
     $item = new fbox_model_element();
     $item->set_id( (int)1 );
     $item->set_text( $this->language['C3_accept_AGB'] );
     $this->model->add_item( $item );

     $item = new fbox_model_element();
     $item->set_id( (int)2 );
     $item->set_text( $this->language['C3_accept_Nutzungsbedingungen'] );
     $this->model->add_item( $item );
    }
}?>