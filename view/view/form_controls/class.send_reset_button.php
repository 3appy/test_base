<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.send_reset_button.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 13.06.2013, 12:07:59 with ArgoUML PHP module 
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
// section 127-0-0-1--7b477643:13f39034ad2:-8000:0000000000000C38-includes begin
// section 127-0-0-1--7b477643:13f39034ad2:-8000:0000000000000C38-includes end

/* user defined constants */
// section 127-0-0-1--7b477643:13f39034ad2:-8000:0000000000000C38-constants begin
// section 127-0-0-1--7b477643:13f39034ad2:-8000:0000000000000C38-constants end

/**
 * Short description of class send_reset_button
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class send_reset_button
    extends standard_button
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute send
     *
     * @access public
     * @var String
     */
    public $send = null;

    /**
     * Short description of attribute reset
     *
     * @access public
     * @var String
     */
    public $reset = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_button()
    {
     return "" .
     "<div class=\"ym-fbox-button\">" .
     "<input type=\"submit\" value=\"" .
     $this->send .
     "\"  class=\"save\" id=\"submit\" name=\"submit\" />" .
     "<input type=\"reset\" value=\"" .
     $this->reset .
     "\" class=\"delete\" id=\"reset\" name=\"reset\" />" .
     "</div>";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  send
     * @version 1.0
     */
    public function set_send($send)
    {
     $this->send = $send;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  reset
     * @version 1.0
     */
    public function set_reset($reset)
    {
     $this->reset = $reset;
    }
}?>