<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.fbox_text_hidden_element.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 20.01.2016, 11:44:05 with ArgoUML PHP module 
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
// section 10-5-26-9-26fb057f:1525e96cf63:-8000:0000000000000ACD-includes begin
// section 10-5-26-9-26fb057f:1525e96cf63:-8000:0000000000000ACD-includes end

/* user defined constants */
// section 10-5-26-9-26fb057f:1525e96cf63:-8000:0000000000000ACD-constants begin
// section 10-5-26-9-26fb057f:1525e96cf63:-8000:0000000000000ACD-constants end

/**
 * Short description of class fbox_text_hidden_element
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_text_hidden_element
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
     "<label for=\"header\">" . $this->label . "</label>" .
     "<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"20000000\"  />" .
     "<input type=\"file\" name=\"" . $this->name . "\" id=\"file\" />" .
     "</div>";
    }
}?>