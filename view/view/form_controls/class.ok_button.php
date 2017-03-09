<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.ok_button.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 16.08.2013, 14:23:23 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include standard_button
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.standard_button.php');

/* user defined includes */
// section 10-30-8-44-1a27370f:1403dcc1780:-8000:0000000000001718-includes begin
// section 10-30-8-44-1a27370f:1403dcc1780:-8000:0000000000001718-includes end

/* user defined constants */
// section 10-30-8-44-1a27370f:1403dcc1780:-8000:0000000000001718-constants begin
// section 10-30-8-44-1a27370f:1403dcc1780:-8000:0000000000001718-constants end

/**
 * Short description of class ok_button
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class ok_button
    extends standard_button
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_button()
    {
     return "" .
     
     "<div class=\"ym-fbox-button\">" .
     "<input type=\"submit\" value=\"" .
     $this->name .
     "\"  class=\"save\" id=\"submit\" name=\"submit\" />" .
     "</div>";
    }
}?>