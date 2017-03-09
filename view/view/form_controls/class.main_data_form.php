<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.main_data_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 03.07.2014, 17:26:15 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include address_data_part
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.address_data_part.php');

/**
 * include date_data_part
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.date_data_part.php');

/**
 * include date_time_data_part
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.date_time_data_part.php');

/**
 * include group_link_data_part
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.group_link_data_part.php');

/**
 * include private_data_part
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.private_data_part.php');

/**
 * include standard_form
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.standard_form.php');

/* user defined includes */
// section 10-5-25--42--4259d17e:13f089b1d6e:-8000:0000000000000BB5-includes begin
// section 10-5-25--42--4259d17e:13f089b1d6e:-8000:0000000000000BB5-includes end

/* user defined constants */
// section 10-5-25--42--4259d17e:13f089b1d6e:-8000:0000000000000BB5-constants begin
// section 10-5-25--42--4259d17e:13f089b1d6e:-8000:0000000000000BB5-constants end

/**
 * Short description of class main_data_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class main_data_form
    extends standard_form
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute name_value
     *
     * @access private
     * @var String
     */
    private $name_value = null;

    /**
     * Short description of attribute date_data_part
     *
     * @access public
     * @var address_data_part
     */
    public $date_data_part = null;

    /**
     * Short description of attribute address_data_part
     *
     * @access public
     * @var address_data_part
     */
    public $address_data_part = null;

    /**
     * Short description of attribute private_data_part
     *
     * @access public
     * @var private_data_part
     */
    public $private_data_part = null;

    /**
     * Short description of attribute link_data_part
     *
     * @access public
     * @var group_link_data_part
     */
    public $link_data_part = null;

    /**
     * Short description of attribute start_time_data_part
     *
     * @access public
     * @var date_time_data_part
     */
    public $start_time_data_part = null;

    /**
     * Short description of attribute end_time_data_part
     *
     * @access public
     * @var date_time_data_part
     */
    public $end_time_data_part = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  name_value
     * @version 1.0
     */
    public function set_name_value($name_value)
    {
     $this->name_value = $name_value;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_name_element()
    {
     $name_element = new fbox_text_element();
     $name_element->set_label($this->language['C3_name']);
     $name_element->set_name("name");
     $name_element->set_value($this->name_value);
     
     return
     $name_element->get_element();
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_button()
    {
     $button = new send_reset_button();
     $button->set_send($this->language['C3_send_button']);
     $button->set_reset($this->language['C3_reset_button']);
     return $button->get_button();
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  date_data_part
     * @version 1.0
     */
    public function set_date_data_part($date_data_part)
    {
     $this->date_data_part = $date_data_part;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  address_data_part
     * @version 1.0
     */
    public function set_address_data_part($address_data_part)
    {
     $this->address_data_part = $address_data_part;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  private_data_part
     */
    public function set_private_data_part($private_data_part)
    {
     $this->private_data_part = $private_data_part;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  link_data_part
     */
    public function set_link_data_part($link_data_part)
    {
     $this->link_data_part = $link_data_part;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  start_time_data_part
     */
    public function set_start_time_data_part($start_time_data_part)
    {
     $this->start_time_data_part = $start_time_data_part;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  end_time_data_part
     */
    public function set_end_time_data_part($end_time_data_part)
    {
     $this->end_time_data_part = $end_time_data_part;
    }
}?>