<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.member_follower.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 10.03.2015, 10:09:06 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_member_follower
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_member_follower.php');

/* user defined includes */
// section -64--88--78-25-6f026eef:148095de848:-8000:00000000000014A5-includes begin
// section -64--88--78-25-6f026eef:148095de848:-8000:00000000000014A5-includes end

/* user defined constants */
// section -64--88--78-25-6f026eef:148095de848:-8000:00000000000014A5-constants begin
// section -64--88--78-25-6f026eef:148095de848:-8000:00000000000014A5-constants end

/**
 * Short description of class member_follower
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class member_follower
    extends generated_member_follower
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  follower_id
     * @param  member_id
     * @param  status
     */
    public function find_connection($follower_id, $member_id )
    {
     require_once('class.member_follower_list_item.php');
    
     $connection = NULL;
     
     $con_list = new member_follower_list_item();
     $con_list->set_owner_id( $follower_id );
     $con_list->set_member_id( $member_id );
     $con_list->load_member_follower();
     
     if( $con_list->get_item_count() > (int)0 )
     { $connection = $con_list->get_item(0); }    
     
     return $connection;
    }
    
    public function get_con_status( $follower_id, $member_id )
    {
    $status = (int)0;
    
    $con = $this->find_connection( $follower_id, $member_id );
    if( $con != NULL ) 
    { $status = $con->get_status(); }
    return $status;
    }
}?>