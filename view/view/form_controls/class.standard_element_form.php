<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.standard_element_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 17.06.2013, 09:20:35 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section 127-0-0-1--7b477643:13f39034ad2:-8000:0000000000000C53-includes begin
// section 127-0-0-1--7b477643:13f39034ad2:-8000:0000000000000C53-includes end

/* user defined constants */
// section 127-0-0-1--7b477643:13f39034ad2:-8000:0000000000000C53-constants begin
// section 127-0-0-1--7b477643:13f39034ad2:-8000:0000000000000C53-constants end

/**
 * Short description of class standard_element_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class standard_element_form
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute label
     *
     * @access public
     * @var String
     */
    public $label = null;

    /**
     * Short description of attribute name
     *
     * @access public
     * @var String
     */
    public $name = null;

    /**
     * Short description of attribute value
     *
     * @access public
     * @var Integer
     */
    public $value = null;

    /**
     * Short description of attribute size
     *
     * @access public
     * @var Integer
     */
    public $size = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  label
     * @version 1.0
     */
    public function set_label($label)
    {
     $this->label = $label;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  name
     * @version 1.0
     */
    public function set_name($name)
    {
     $this->name = $name;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  value
     * @version 1.0
     */
    public function set_value($value)
    {
     $this->value = $value;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  size
     * @version 1.0
     */
    public function set_size($size)
    {
     $this->size = $size;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_element()
    {
     return ;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function __construct()
    {
     ;
    }
}?>