<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.fbox_select_school_size.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 01.12.2016, 11:56:48 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include fbox_select_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_select_element.php');

/* user defined includes */
// section 10-30--8--106--aeb2dc0:15235c5d6c7:-8000:0000000000000AA4-includes begin
// section 10-30--8--106--aeb2dc0:15235c5d6c7:-8000:0000000000000AA4-includes end

/* user defined constants */
// section 10-30--8--106--aeb2dc0:15235c5d6c7:-8000:0000000000000AA4-constants begin
// section 10-30--8--106--aeb2dc0:15235c5d6c7:-8000:0000000000000AA4-constants end

/**
 * Short description of class fbox_select_school_size
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_select_school_size
    extends fbox_select_element
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
     $item->set_id( (int)0 );
     $item->set_text( $this->language['C3_select_schoolsize'] );
     $this->model->add_item( $item );
     for ($i = 1; $i <= 13; $i++)
     {
     $item = new fbox_model_element();
     $item->set_id( $i );
     $item->set_text( $this->language['schoolsize_' . $i] );
     $this->model->add_item( $item );
     }
    }
}?>