<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.date_data_part.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 22.07.2013, 14:54:02 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include fbox_day_select_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_day_select_element.php');

/**
 * include fbox_month_select_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_month_select_element.php');

/**
 * include fbox_wrap_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_wrap_element.php');

/**
 * include fbox_year_select_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_year_select_element.php');

/* user defined includes */
// section 10-30-8-31-3a1762ae:1400524e52e:-8000:0000000000002B7B-includes begin
// section 10-30-8-31-3a1762ae:1400524e52e:-8000:0000000000002B7B-includes end

/* user defined constants */
// section 10-30-8-31-3a1762ae:1400524e52e:-8000:0000000000002B7B-constants begin
// section 10-30-8-31-3a1762ae:1400524e52e:-8000:0000000000002B7B-constants end

/**
 * Short description of class date_data_part
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class date_data_part
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute day_value
     *
     * @access public
     * @var Integer
     */
    public $day_value = null;

    /**
     * Short description of attribute month_value
     *
     * @access public
     * @var Integer
     */
    public $month_value = null;

    /**
     * Short description of attribute year_value
     *
     * @access public
     * @var Integer
     */
    public $year_value = null;

    /**
     * Short description of attribute language
     *
     * @access public
     * @var String
     */
    public $language = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  day_value
     * @version 1.0
     */
    public function set_day_value($day_value)
    {
     $this->day_value = $day_value;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  month_value
     * @version 1.0
     */
    public function set_month_value($month_value)
    {
     $this->month_value = $month_value;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  year_value
     * @version 1.0
     */
    public function set_year_value($year_value)
    {
     $this->year_value = $year_value;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_element_list()
    {
     $wrap_element = new fbox_wrap_element();
     $wrap_element->set_header($this->language['C3_birthday_header']);
     
     $new_element   = new fbox_day_select_element();
     $new_element->set_language( $this->language );
     $new_element->set_label($this->language['C3_day']);
     $new_element->set_name("day");
     $new_element->set_value( $this->day_value );
     $wrap_element->add_item($new_element);
     
     $new_element = new fbox_month_select_element();
     $new_element->set_language( $this->language );
     $new_element->set_label($this->language['C3_month']);
     $new_element->set_name("month");
     $new_element->set_value( $this->month_value );
     $wrap_element->add_item($new_element);
     
     $new_element = new fbox_year_select_element();
     $new_element->set_language( $this->language );
     $new_element->set_label($this->language['C3_year']);
     $new_element->set_name("year");
     $new_element->set_value( $this->year_value );
     $wrap_element->add_item($new_element);
     return $wrap_element->get_element();
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  language
     * @version 1.0
     */
    public function set_language($language)
    {
     $this->language = $language;
    }
}?>