<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.fbox_req_text_element.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 08.01.2016, 11:56:33 with ArgoUML PHP module 
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
// section 10-30-49-48--6bc01cc1:152205c2ea3:-8000:000000000000124F-includes begin
// section 10-30-49-48--6bc01cc1:152205c2ea3:-8000:000000000000124F-includes end

/* user defined constants */
// section 10-30-49-48--6bc01cc1:152205c2ea3:-8000:000000000000124F-constants begin
// section 10-30-49-48--6bc01cc1:152205c2ea3:-8000:000000000000124F-constants end

/**
 * Short description of class fbox_req_text_element
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_req_text_element
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
    public function __construct()
    {
     parent::__construct();
     $this->size = 40;
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
     "<div class=\"ym-fbox-text ym-error\"" .
     "role=\"alert\" aria-live=\"assertive\">" .
     "<label for= \"" . $this->name . "\">" . $this->label .
     "<sup class=\"ym-required\" title=\"".
     "This field is mandatory.\">*</sup></label>" .
     "<input type=\"text\"" .
     "name= \"" . $this->name . "\"" .
     "id= \"" . $this->name . "\"" .
     "value= \"" . $this->value . "\"" .
     "size= \"" . $this->size . "\"" .
     "aria-required= \"" . TRUE . "\">" .
     "</div>";
    }
}?>