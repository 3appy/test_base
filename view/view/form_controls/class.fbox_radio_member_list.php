<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.fbox_radio_member_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 20.06.2014, 14:27:04 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include fbox_radio_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_radio_list.php');

/* user defined includes */
// section 10-30-45--31--10c39078:146b3b0f931:-8000:0000000000001A04-includes begin
// section 10-30-45--31--10c39078:146b3b0f931:-8000:0000000000001A04-includes end

/* user defined constants */
// section 10-30-45--31--10c39078:146b3b0f931:-8000:0000000000001A04-constants begin
// section 10-30-45--31--10c39078:146b3b0f931:-8000:0000000000001A04-constants end

/**
 * Short description of class fbox_radio_member_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_radio_member_list
    extends fbox_radio_list
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  model
     */
    public function load($model)
    {
     $list = "";
     $count = $model->get_item_count();
     
     for ( $n = 0; $n < $count; $n++ )
     {
     $event_member = $model->get_item( $n );
     $time_slot = $event_member->get_time_slot();
     $radio_element = new fbox_radio_element();
     $radio_element->set_label( $this->get_eu_time( $time_slot ) );
     $radio_element->set_name( "time_slot" );
     $radio_element->set_value( $event_member->get_id() );
     
//     $radio_element->set_checked( False );
     $list .= $radio_element->get_element();
     }
     return $list;
    }
    
    public function get_eu_time( $time )
    {
     date_default_timezone_set('Europe/Berlin');
     $date = new datetime( $time );
     return
     $date->format('d') . "." .
     $date->format('m') . "." .
     $date->format('Y') . " " .
     $date->format('H') . ":" .
     $date->format('i');
    }
}?>