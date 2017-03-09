<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.fbox_radio_school_communication.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 16.07.2014, 15:40:16 with ArgoUML PHP module 
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
// section 10-30-49-33--7f2080f6:1473e01177b:-8000:0000000000001145-includes begin
// section 10-30-49-33--7f2080f6:1473e01177b:-8000:0000000000001145-includes end

/* user defined constants */
// section 10-30-49-33--7f2080f6:1473e01177b:-8000:0000000000001145-constants begin
// section 10-30-49-33--7f2080f6:1473e01177b:-8000:0000000000001145-constants end

/**
 * Short description of class fbox_radio_school_communication
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_radio_school_communication
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
     for ( $n = 0; $n < (int)3; $n++ )
     {
     $label = $this->language['school_communication_' . $n];
     $radio_element = new fbox_radio_element();
     $radio_element->set_label( $label );
     $radio_element->set_name( "school_communication" );
     $radio_element->set_checked( False );
     $list .= $radio_element->get_element();
     }
     return $list;
    }
}?>