<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.interview_register_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 02.12.2016, 13:32:03 with ArgoUML PHP module 
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
// section 127-0-0-1-1fa84c0b:158b5cea1b7:-8000:0000000000000DE9-includes begin
// section 127-0-0-1-1fa84c0b:158b5cea1b7:-8000:0000000000000DE9-includes end

/* user defined constants */
// section 127-0-0-1-1fa84c0b:158b5cea1b7:-8000:0000000000000DE9-constants begin
// section 127-0-0-1-1fa84c0b:158b5cea1b7:-8000:0000000000000DE9-constants end

/**
 * Short description of class interview_register_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class interview_register_form
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
     'class.fbox_select_element.php');
     
     $time_slot = new fbox_select_element();
     $time_slot->set_name("time_slot");
     
     $time_slot->set_value( (int)0 );
     $time_slot->set_model( $this->define_model() );
     
     return
     $time_slot->get_element();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function define_model()
    {
     if( defined('__VIEW_CONTROL__') == FALSE )
     { define('__VIEW_CONTROL__', $this->get_root_view_control() ); }
     require_once(__VIEW_CONTROL__. 'class.fbox_model.php');
     require_once(__VIEW_CONTROL__. 'class.fbox_model_element.php');
     
     $box_model = new fbox_model();
          
     $item = new fbox_model_element();
     $item->set_id( (int)0 );
     $item->set_text( $this->language['C3_choose_time'] );
     $box_model->add_item( $item );

     $count = $this->model->get_item_count();
     for ( $n = 0; $n < $count; $n++ )
     {
     $event_member = $this->model->get_item( $n );

     $item = new fbox_model_element();
     $item->set_id( $event_member->get_id() );
     
     $time_slot = $event_member->get_time_slot();
     $format_class = $event_member->get_format_class();
     $item->set_text( $format_class->get_eu_time( $time_slot ) );
     
     $box_model->add_item( $item );
     }
     
     return $box_model;
    }
}?>