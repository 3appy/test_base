<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.fbox_hidden_text_element.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 30.07.2013, 16:06:53 with ArgoUML PHP module 
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
// section 127-0-0-1--7b477643:13f39034ad2:-8000:0000000000000C61-includes begin
// section 127-0-0-1--7b477643:13f39034ad2:-8000:0000000000000C61-includes end

/* user defined constants */
// section 127-0-0-1--7b477643:13f39034ad2:-8000:0000000000000C61-constants begin
// section 127-0-0-1--7b477643:13f39034ad2:-8000:0000000000000C61-constants end

/**
 * Short description of class fbox_hidden_text_element
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_hidden_text_element
    extends standard_element_form
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

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
     "<label for=\"header\">" . $this->label . "</label>" .
     "<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"20000000\"  />" .
     "<input type=\"file\" name=\"" . $this->name . "\" id=\"file\" />" .
     "</div>";
    }
}?>