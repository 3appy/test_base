<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.standard_element.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 03.01.2017, 18:06:04 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section 10-30-49-48--6bc01cc1:152205c2ea3:-8000:0000000000001221-includes begin
// section 10-30-49-48--6bc01cc1:152205c2ea3:-8000:0000000000001221-includes end

/* user defined constants */
// section 10-30-49-48--6bc01cc1:152205c2ea3:-8000:0000000000001221-constants begin
// section 10-30-49-48--6bc01cc1:152205c2ea3:-8000:0000000000001221-constants end

/**
 * Short description of class standard_element
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class standard_element
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute label
     *
     * @access protected
     * @var String
     */
    protected $label = null;

    /**
     * Short description of attribute name
     *
     * @access protected
     * @var String
     */
    protected $name = null;

    /**
     * Short description of attribute value
     *
     * @access protected
     * @var Integer
     */
    protected $value = null;

    /**
     * Short description of attribute size
     *
     * @access protected
     * @var Integer
     */
    protected $size = null;

    /**
     * Short description of attribute requested
     *
     * @access protected
     * @var Boolean
     */
    protected $requested = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function __construct()
    {
     $this->requested = FALSE;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  label
     */
    public function set_label($label)
    {
     $this->label = $label;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  name
     */
    public function set_name($name)
    {
     $this->name = $name;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  value
     */
    public function set_value($value)
    {
     $this->value = $value;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  size
     */
    public function set_size($size)
    {
     $this->size = $size;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_element()
    {
     return ;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_root_data()
    {
     return
     dirname(dirname(dirname(dirname(__FILE__)))) .
     '/data/';
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_root_view_control()
    {
     return
     dirname(dirname(dirname(dirname(__FILE__)))) .
     '/view/view/yaml_controls/';
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  requested
     */
    public function set_requested($requested)
    {
     $this->requested = $requested;
    }
}?>