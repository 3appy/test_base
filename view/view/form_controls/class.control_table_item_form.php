<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.control_table_item_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 21.12.2013, 16:28:16 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include fbox_day_number_select_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_day_number_select_element.php');

/**
 * include fbox_time_number_select_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_time_number_select_element.php');

/**
 * include fbox_week_select_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_week_select_element.php');

/**
 * include fbox_wrap_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_wrap_element.php');

/**
 * include fbox_3_year_select_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_3_year_select_element.php');

/**
 * include send_reset_button
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.send_reset_button.php');

/**
 * include standard_form
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.standard_form.php');

/* user defined includes */
// section 10-30-49--98--6eee8edd:142dc97b419:-8000:0000000000000F16-includes begin
// section 10-30-49--98--6eee8edd:142dc97b419:-8000:0000000000000F16-includes end

/* user defined constants */
// section 10-30-49--98--6eee8edd:142dc97b419:-8000:0000000000000F16-constants begin
// section 10-30-49--98--6eee8edd:142dc97b419:-8000:0000000000000F16-constants end

/**
 * Short description of class control_table_item_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class control_table_item_form
    extends standard_form
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute start_week
     *
     * @access public
     * @var Integer
     */
    public $start_week = null;

    /**
     * Short description of attribute start_year
     *
     * @access public
     * @var Integer
     */
    public $start_year = null;

    /**
     * Short description of attribute end_week
     *
     * @access public
     * @var Integer
     */
    public $end_week = null;

    /**
     * Short description of attribute end_year
     *
     * @access public
     * @var Integer
     */
    public $end_year = null;

    /**
     * Short description of attribute day_number
     *
     * @access public
     * @var Integer
     */
    public $day_number = null;

    /**
     * Short description of attribute time_number
     *
     * @access public
     * @var Integer
     */
    public $time_number = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  start_week
     * @version 1.0
     */
    public function set_start_week($start_week)
    {
     $this->start_week = $start_week;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  start_year
     * @version 1.0
     */
    public function set_start_year($start_year)
    {
     $this->start_year = $start_year;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  end_week
     * @version 1.0
     */
    public function set_end_week($end_week)
    {
     $this->end_week = $end_week;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  end_year
     * @version 1.0
     */
    public function set_end_year($end_year)
    {
     $this->end_year = $end_year;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  day_number
     * @version 1.0
     */
    public function set_day_number($day_number)
    {
     $this->day_number = $day_number;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  time_number
     * @version 1.0
     */
    public function set_time_number($time_number)
    {
     $this->time_number = $time_number;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_element_list()
    {
     $start_wrap_element = new fbox_wrap_element();
     $start_wrap_element->set_header($this->language['C3_start_header']);
     
     $start_week_element   = new fbox_week_select_element();
     $start_week_element->set_language( $this->language );
     $start_week_element->set_label($this->language['C3_start_week']);
     $start_week_element->set_name("start_week");
     $start_week_element->set_value( $this->start_week );
     
     $start_year_element   = new fbox_3_year_select_element();
     $start_year_element->set_language( $this->language );
     $start_year_element->set_label($this->language['C3_start_year']);
     $start_year_element->set_name("start_year");
     $start_year_element->set_value( $this->start_year );
     
     $start_wrap_element->add_item($start_week_element);
     $start_wrap_element->add_item($start_year_element);
     
     $end_wrap_element = new fbox_wrap_element();
     $end_wrap_element->set_header($this->language['C3_end_header']);
     
     $end_week_element   = new fbox_week_select_element();
     $end_week_element->set_language( $this->language );
     $end_week_element->set_label($this->language['C3_end_week']);
     $end_week_element->set_name("end_week");
     $end_week_element->set_value( $this->end_week );
     
     $end_year_element   = new fbox_3_year_select_element();
     $end_year_element->set_language( $this->language );
     $end_year_element->set_label($this->language['C3_end_year']);
     $end_year_element->set_name("end_year");
     $end_year_element->set_value( $this->end_year );
     
     $end_wrap_element->add_item($end_week_element);
     $end_wrap_element->add_item($end_year_element);
     
     $time_selection_wrap_element = new fbox_wrap_element();
     $time_selection_wrap_element->
     set_header($this->language['C3_selection_header']);
     
     $day_number   = new fbox_day_number_select_element();
     $day_number->set_language( $this->language );
     $day_number->set_label($this->language['C3_day_number']);
     $day_number->set_name("day_number");
     $day_number->set_value( $this->day_number );
     
     $time_number   = new fbox_time_number_select_element();
     $time_number->set_language( $this->language );
     $time_number->set_label($this->language['C3_time_number']);
     $time_number->set_name("time_number");
     $time_number->set_value( $this->time_number );
     
     $time_selection_wrap_element->add_item($day_number);
     $time_selection_wrap_element->add_item($time_number);
     
     return
     $start_wrap_element->get_element() .
     $end_wrap_element->get_element() .
     $time_selection_wrap_element->get_element();
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
}?>