<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.fbox_text_area_element.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 20.01.2016, 12:25:34 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include standard_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.standard_element.php');

/* user defined includes */
// section 10-5-26-9-26fb057f:1525e96cf63:-8000:00000000000011D7-includes begin
// section 10-5-26-9-26fb057f:1525e96cf63:-8000:00000000000011D7-includes end

/* user defined constants */
// section 10-5-26-9-26fb057f:1525e96cf63:-8000:00000000000011D7-constants begin
// section 10-5-26-9-26fb057f:1525e96cf63:-8000:00000000000011D7-constants end

/**
 * Short description of class fbox_text_area_element
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_text_area_element
    extends standard_element
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function __construct()
    {
     parent::__construct();
     $this->size = 10;
     $this->value = "";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_element()
    {
     return
     "<div class=\"ym-fbox-text\">" .
     "<label for=\"" . $this->name . "\">" . $this->label . "</label>" .
     "<textarea name= \"" . $this->name . "\"" .
     " id= \"" . $this->name . "\"" .
     " rows= \"" . $this->size . "\">" .
     $this->value .
     "</textarea>" .
     "</div>";
    }
}?>