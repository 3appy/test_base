<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.member_follower_list_item.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 05.03.2017, 11:12:06 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_member_follower_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_member_follower_list.php');

/* user defined includes */
// section 10-5-23-95--3ac6b90a:15a98c08c7b:-8000:0000000000002C12-includes begin
// section 10-5-23-95--3ac6b90a:15a98c08c7b:-8000:0000000000002C12-includes end

/* user defined constants */
// section 10-5-23-95--3ac6b90a:15a98c08c7b:-8000:0000000000002C12-constants begin
// section 10-5-23-95--3ac6b90a:15a98c08c7b:-8000:0000000000002C12-constants end

/**
 * Short description of class member_follower_list_item
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class member_follower_list_item
    extends generated_member_follower_list
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute member_id
     *
     * @access public
     * @var Integer
     */
    public $member_id = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member_id
     */
    public function set_member_id($member_id)
    {
     $this->member_id = $member_id;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function set_binding()
    {
     $id = $this->get_owner_id();
     $member_id = $this->member_id;
     $this->stmt->bind_param('ii', $id, $member_id );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_member_follower()
    {
     $where_statement =
     "WHERE follower_id=? AND member_id=?";
     return $this->list_load( $where_statement );
    }
}?>