<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.event_registration_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 01.11.2016, 15:14:54 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include standard_form
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.standard_form.php');

/* user defined includes */
// section 10-5-29--89-6c6deb4f:1581b18edc8:-8000:0000000000000ADB-includes begin
// section 10-5-29--89-6c6deb4f:1581b18edc8:-8000:0000000000000ADB-includes end

/* user defined constants */
// section 10-5-29--89-6c6deb4f:1581b18edc8:-8000:0000000000000ADB-constants begin
// section 10-5-29--89-6c6deb4f:1581b18edc8:-8000:0000000000000ADB-constants end

/**
 * Short description of class event_registration_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class event_registration_form
    extends standard_form
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute amount
     *
     * @access private
     * @var Integer
     */
    private $amount = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  amount
     */
    public function set_amount($amount)
    {
     $this->amount = $amount;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_amount()
    {
     return $this->amount;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_button()
    {
     if( defined('__VIEW_CONTROL__') == FALSE )
     { define('__VIEW_CONTROL__', $this->get_root_view_control() ); }
     require_once(__VIEW_CONTROL__.'class.send_reset_button_group.php');
     
     $button = new send_reset_button_group();
     $button->set_send($this->language['C3_send_button']);
     $button->set_reset($this->language['C3_reset_button']);
     return $button->get_button();
    }
}?>