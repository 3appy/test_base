<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.fbox_model.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 30.11.2016, 16:48:43 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section 127-0-0-1-1fa84c0b:158b5cea1b7:-8000:0000000000000B1C-includes begin
// section 127-0-0-1-1fa84c0b:158b5cea1b7:-8000:0000000000000B1C-includes end

/* user defined constants */
// section 127-0-0-1-1fa84c0b:158b5cea1b7:-8000:0000000000000B1C-constants begin
// section 127-0-0-1-1fa84c0b:158b5cea1b7:-8000:0000000000000B1C-constants end

/**
 * Short description of class fbox_model
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_model
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute data_array
     *
     * @access public
     * @var Integer
     */
    public $data_array = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function __construct()
    {
     $this->data_array = array();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  item
     */
    public function add_item($item)
    {
     $this->data_array[] = $item;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  n
     */
    public function get_item($n)
    {
     return $this->data_array[ $n ];
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_item_count()
    {
     return count( $this->data_array );
    }
}?>