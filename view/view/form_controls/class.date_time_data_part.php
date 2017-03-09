<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.date_time_data_part.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 03.07.2014, 21:35:55 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include fbox_date_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_date_element.php');

/**
 * include fbox_time_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_time_element.php');

/**
 * include fbox_wrap_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_wrap_element.php');

/* user defined includes */
// section 10-5-26-44--6175a2f0:146d33f41a1:-8000:000000000000105C-includes begin
// section 10-5-26-44--6175a2f0:146d33f41a1:-8000:000000000000105C-includes end

/* user defined constants */
// section 10-5-26-44--6175a2f0:146d33f41a1:-8000:000000000000105C-constants begin
// section 10-5-26-44--6175a2f0:146d33f41a1:-8000:000000000000105C-constants end

/**
 * Short description of class date_time_data_part
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class date_time_data_part
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute language
     *
     * @access public
     * @var String
     */
    public $language = null;

    /**
     * Short description of attribute header
     *
     * @access public
     * @var Integer
     */
    public $header = null;

    /**
     * Short description of attribute name
     *
     * @access public
     * @var String
     */
    public $name = null;

    /**
     * Short description of attribute date
     *
     * @access public
     * @var String
     */
    public $date = null;

    /**
     * Short description of attribute time
     *
     * @access public
     * @var String
     */
    public $time = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  language
     */
    public function set_language($language)
    {
     $this->language = $language;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  datetime_str
     */
    public function set_datetime($datetime_str)
    {
     date_default_timezone_set('Europe/Berlin');
     $datetime = new DateTime($datetime_str);
     $this->date = $datetime->format('Y-m-d');
     $this->time = $datetime->format('H:i');
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_element_list()
    {
     $wrap_element = new fbox_wrap_element();
//     $wrap_element->set_header($this->header);
     
     $new_element   = new fbox_date_element();
     $new_element->set_label($this->language['C3_date']);
     $new_element->set_name( $this->name . "date");
     $new_element->set_value( $this->date );
     $wrap_element->add_item($new_element);
     
     $new_element   = new fbox_time_element();
     $new_element->set_label($this->language['C3_time']);
     $new_element->set_name( $this->name . "time");
     $new_element->set_value( $this->time );
     $wrap_element->add_item($new_element);
     
     return $wrap_element->get_element();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  header
     */
    public function set_header($header)
    {
     $this->header = $header;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  name
     */
    public function set_name($name)
    {
     $this->name = $name;
    }
}?>