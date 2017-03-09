<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.fbox_model_element.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 30.11.2016, 16:46:38 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section 127-0-0-1-1fa84c0b:158b5cea1b7:-8000:0000000000000B1B-includes begin
// section 127-0-0-1-1fa84c0b:158b5cea1b7:-8000:0000000000000B1B-includes end

/* user defined constants */
// section 127-0-0-1-1fa84c0b:158b5cea1b7:-8000:0000000000000B1B-constants begin
// section 127-0-0-1-1fa84c0b:158b5cea1b7:-8000:0000000000000B1B-constants end

/**
 * Short description of class fbox_model_element
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_model_element
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute id
     *
     * @access public
     * @var Integer
     */
    public $id = null;

    /**
     * Short description of attribute text
     *
     * @access public
     * @var String
     */
    public $text = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  id
     * @param  text
     */
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  id
     */
    public function set_id($id)
    {
     $this->id = $id;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_id()
    {
     return $this->id;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function set_text( $text )
    {
     $this->text = $text;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function get_text()
    {
     return $this->text;
    }
}?>