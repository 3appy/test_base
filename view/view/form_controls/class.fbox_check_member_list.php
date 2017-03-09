<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.fbox_check_member_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 02.04.2014, 09:19:26 with ArgoUML PHP module 
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
// section -84-28-79--8--2716b4cc:1450857f12b:-8000:0000000000001BEC-includes begin
// section -84-28-79--8--2716b4cc:1450857f12b:-8000:0000000000001BEC-includes end

/* user defined constants */
// section -84-28-79--8--2716b4cc:1450857f12b:-8000:0000000000001BEC-constants begin
// section -84-28-79--8--2716b4cc:1450857f12b:-8000:0000000000001BEC-constants end

/**
 * Short description of class fbox_check_member_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_check_member_list
    extends fbox_check_list
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
     $member = $model->get_item( $n );
     $check_element = new fbox_check_element();
     $check_element->set_label( $member->get_forename() );
     $check_element->set_name( "pupils[]" );
     $check_element->set_value( $member->get_id() );
     $list .= $check_element->get_element();
     }
     return $list;
    }
}?>