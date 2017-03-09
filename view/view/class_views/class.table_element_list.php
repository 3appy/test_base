<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.table_element_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 26.08.2013, 10:12:36 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section 10-30-8-106--6e23a53f:140b9773ad8:-8000:0000000000001A8B-includes begin
// section 10-30-8-106--6e23a53f:140b9773ad8:-8000:0000000000001A8B-includes end

/* user defined constants */
// section 10-30-8-106--6e23a53f:140b9773ad8:-8000:0000000000001A8B-constants begin
// section 10-30-8-106--6e23a53f:140b9773ad8:-8000:0000000000001A8B-constants end

/**
 * Short description of class table_element_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class table_element_list
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
     * @author Bernd Schröder
     * @version 1.0
     */
    public function __construct()
    {
     $this->data_array = array();
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  new_item
     * @version 1.0
     */
    public function add_item($new_item)
    {
     $this->data_array[] = $new_item;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_item($n)
    {
     return $this->data_array[ $n ];
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_item_count()
    {
     return count( $this->data_array );
    }
}?>