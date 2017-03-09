<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.send_reset_button_group.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 11.01.2016, 10:08:02 with ArgoUML PHP module 
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
// section -87--2--7--80--2c38c271:1522fb535ee:-8000:00000000000008AA-includes begin
// section -87--2--7--80--2c38c271:1522fb535ee:-8000:00000000000008AA-includes end

/* user defined constants */
// section -87--2--7--80--2c38c271:1522fb535ee:-8000:00000000000008AA-constants begin
// section -87--2--7--80--2c38c271:1522fb535ee:-8000:00000000000008AA-constants end

/**
 * Short description of class send_reset_button_group
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class send_reset_button_group
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
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_button()
    {
     return "" .
     "<div class=\"ym-fbox-button\">" .
     "<input type=\"submit\" value=\"" .
     $this->send .
     "\"  class=\"save\" id=\"submit\" name=\"insert\" />" .
     "<input type=\"reset\" value=\"" .
     $this->reset .
     "\" class=\"delete\" id=\"reset\" name=\"reset\" />" .
     "</div>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  send
     */
    public function set_send($send)
    {
     $this->send = $send;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  reset
     */
    public function set_reset($reset)
    {
     $this->reset = $reset;
    }
}?>