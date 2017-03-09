<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.fbox_password_element.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 21.10.2013, 08:57:45 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include standard_element_form
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.standard_element_form.php');

/* user defined includes */
// section -64--88--78-21--551357e7:141d704cd49:-8000:00000000000013B6-includes begin
// section -64--88--78-21--551357e7:141d704cd49:-8000:00000000000013B6-includes end

/* user defined constants */
// section -64--88--78-21--551357e7:141d704cd49:-8000:00000000000013B6-constants begin
// section -64--88--78-21--551357e7:141d704cd49:-8000:00000000000013B6-constants end

/**
 * Short description of class fbox_password_element
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_password_element
    extends standard_element_form
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute empty_text
     *
     * @access public
     * @var String
     */
    public $empty_text = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_element()
    {
     return
     "<div class=\"ym-fbox-text\">" .
     "<label for= \"" . $this->name . "\">" . $this->label . 
     "<sup class=\"ym-required\" title=\"" .
     $this->empty_text . "\">*</sup></label>" .
     "<input type=\"password\"" .
     "name= \"" . $this->name . "\"" .
     "id= \"" . $this->name . "\"" .
     "value= \"" . $this->value . "\"" .
     "size= \"" . $this->size . "\">" .
     "</div>";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function __construct()
    {
     parent::__construct();
     $this->size = 40;
     $this->value = "";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  empty_text
     * @version 1.0
     */
    public function set_empty_text($empty_text)
    {
     $this->empty_text = $empty_text;
    }
}?>