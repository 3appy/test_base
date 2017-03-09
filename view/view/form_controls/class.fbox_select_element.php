<?php

error_reporting(E_ALL);

/**
 * untitledModel - fbox_select_element.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 25.07.2013, 11:22:29 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '4')) {
    die('This file was generated for PHP 4');
}

/**
 * include standard_element_form
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.standard_element_form.php');

/* user defined includes */
// section -64--88--78-21--27dd0445:13f55b81cae:-8000:0000000000000CCC-includes begin
// section -64--88--78-21--27dd0445:13f55b81cae:-8000:0000000000000CCC-includes end

/* user defined constants */
// section -64--88--78-21--27dd0445:13f55b81cae:-8000:0000000000000CCC-constants begin
// section -64--88--78-21--27dd0445:13f55b81cae:-8000:0000000000000CCC-constants end

/**
 * Short description of class fbox_select_element
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_select_element
    extends standard_element_form
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute language
     *
     * @access public
     * @var String
     */
    var $language = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    function get_element()
    {
     return
     "<div class=\"ym-fbox-select\">" .
     "<label for=\"" . $this->name . "\">" . $this->label . "</label>" .
     "<select name= \"" . $this->name . "\"" .
     " id= \"" . $this->name . "\"" .
     " size= \"" . $this->size . "\">" .
     $this->load( $this->value ) .
     "</select>" .
     "</div>";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    function __construct()
    {
     parent::__construct();
     $this->size = 1;
     $this->value = 0;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  value return "";
     * @version 1.0
     */
    function load($value)
    {
     return "";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  language
     * @version 1.0
     */
    function set_language($language)
    {
     $this->language = $language;
    }
}?>