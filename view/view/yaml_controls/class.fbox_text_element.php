<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.fbox_text_element.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 01.12.2016, 12:28:02 with ArgoUML PHP module 
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
// section 10-30-49-48--6bc01cc1:152205c2ea3:-8000:0000000000001247-includes begin
// section 10-30-49-48--6bc01cc1:152205c2ea3:-8000:0000000000001247-includes end

/* user defined constants */
// section 10-30-49-48--6bc01cc1:152205c2ea3:-8000:0000000000001247-constants begin
// section 10-30-49-48--6bc01cc1:152205c2ea3:-8000:0000000000001247-constants end

/**
 * Short description of class fbox_text_element
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_text_element
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
     if ( $this->requested )
     {
     $return =
     "<div class=\"ym-fbox-text ym-error\"" .
     "role=\"alert\" aria-live=\"assertive\">" .
     "<label for= \"" . $this->name . "\">" . $this->label .
     "<sup class=\"ym-required\" title=\"".
     "This field is mandatory.\">*</sup></label>";
     }
     else
     {
     $return =
     "<div class=\"ym-fbox-text\">" .
     "<label for= \"" . $this->name . "\">" . $this->label . "</label>";
     }
     $return .=
     "<input type=\"text\"" .
     "name= \"" . $this->name . "\"" .
     "id= \"" . $this->name . "\"" .
     "value= \"" . $this->value . "\"" .
     "size= \"" . $this->size . "\">" .
     "</div>";
     return $return;
    }
}?>