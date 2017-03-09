<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.fbox_multiple_upload_element.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 31.08.2016, 08:08:25 with ArgoUML PHP module 
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
// section 10-30-49-67--4518a3fc:156db04ca4e:-8000:0000000000000B05-includes begin
// section 10-30-49-67--4518a3fc:156db04ca4e:-8000:0000000000000B05-includes end

/* user defined constants */
// section 10-30-49-67--4518a3fc:156db04ca4e:-8000:0000000000000B05-constants begin
// section 10-30-49-67--4518a3fc:156db04ca4e:-8000:0000000000000B05-constants end

/**
 * Short description of class fbox_multiple_upload_element
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_multiple_upload_element
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
     "<input type=\"file\" multiple=\"multiple\" " .
     " name=\"upload[]\" id=\"upload\" />" .
     "</div>";
    }
}?>