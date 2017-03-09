<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.fbox_time_element.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 02.07.2014, 10:16:10 with ArgoUML PHP module 
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
// section 127-0-0-1--26b00390:146d499e2de:-8000:0000000000001075-includes begin
// section 127-0-0-1--26b00390:146d499e2de:-8000:0000000000001075-includes end

/* user defined constants */
// section 127-0-0-1--26b00390:146d499e2de:-8000:0000000000001075-constants begin
// section 127-0-0-1--26b00390:146d499e2de:-8000:0000000000001075-constants end

/**
 * Short description of class fbox_time_element
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_time_element
    extends standard_element_form
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_element()
    {
     return
     "<div class=\"ym-fbox-text\">" .
     "<label for= \"" . $this->name . "\">" . $this->label . "</label>" .
     "<input type=\"time\"" .
     "name= \"" . $this->name . "\"" .
     "id= \"" . $this->name . "\"" .
     "value= \"" . $this->value . "\"" .
     "size= \"" . $this->size . "\">" .
     "</div>";
    }
}?>