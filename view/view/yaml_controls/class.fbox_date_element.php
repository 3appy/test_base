<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.fbox_date_element.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 31.10.2016, 13:42:24 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include fbox_text_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_text_element.php');

/* user defined includes */
// section 10-5-29--89-207d8037:1581a581778:-8000:0000000000000B09-includes begin
// section 10-5-29--89-207d8037:1581a581778:-8000:0000000000000B09-includes end

/* user defined constants */
// section 10-5-29--89-207d8037:1581a581778:-8000:0000000000000B09-constants begin
// section 10-5-29--89-207d8037:1581a581778:-8000:0000000000000B09-constants end

/**
 * Short description of class fbox_date_element
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_date_element
    extends fbox_text_element
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
     "<input type=\"date\"" .
     "name= \"" . $this->name . "\"" .
     "id= \"" . $this->name . "\"" .
     "value= \"" . $this->value . "\"" .
     "size= \"" . $this->size . "\">" .
     "</div>";
    }
}?>