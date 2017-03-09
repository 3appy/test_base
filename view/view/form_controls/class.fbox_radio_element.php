<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.fbox_radio_element.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 02.04.2014, 12:24:17 with ArgoUML PHP module 
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
// section 10-30-49-73-5f7b5aa3:14521345de3:-8000:0000000000000FF5-includes begin
// section 10-30-49-73-5f7b5aa3:14521345de3:-8000:0000000000000FF5-includes end

/* user defined constants */
// section 10-30-49-73-5f7b5aa3:14521345de3:-8000:0000000000000FF5-constants begin
// section 10-30-49-73-5f7b5aa3:14521345de3:-8000:0000000000000FF5-constants end

/**
 * Short description of class fbox_radio_element
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_radio_element
    extends standard_element_form
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute checked
     *
     * @access public
     * @var Boolean
     */
    public $checked = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_element()
    {
     return
     "<div class=\"ym-fbox-check\">" .
     "<input type=\"radio\"" .
     "name= \"" . $this->name . "\"" .
     "id= \"" . $this->name . "\"" .
     "value= \"" . $this->value . "\"" .
     $this->get_checked() . "\>" . 
     "<label for= \"" . $this->name . "\">" . $this->label . "</label>" .
     "</div>";
    }

    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  $value
     */
    public function set_checked($value)
    {
     $this->value = $value;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_checked()
    {
     if ( $this->checked )
     return "checked=\"checked\"";
     else
     return "";
    }
}?>