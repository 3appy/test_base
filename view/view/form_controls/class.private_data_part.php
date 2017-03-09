<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.private_data_part.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 22.07.2013, 15:32:02 with ArgoUML PHP module 
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

/**
 * include send_reset_button
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.send_reset_button.php');

/* user defined includes */
// section 10-71-4--54--4d1983b6:13fd400e1b9:-8000:0000000000001E87-includes begin
// section 10-71-4--54--4d1983b6:13fd400e1b9:-8000:0000000000001E87-includes end

/* user defined constants */
// section 10-71-4--54--4d1983b6:13fd400e1b9:-8000:0000000000001E87-constants begin
// section 10-71-4--54--4d1983b6:13fd400e1b9:-8000:0000000000001E87-constants end

/**
 * Short description of class private_data_part
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class private_data_part
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute mobile_phone_value
     *
     * @access public
     * @var String
     */
    public $mobile_phone_value = null;

    /**
     * Short description of attribute home_phone_value
     *
     * @access public
     * @var String
     */
    public $home_phone_value = null;

    /**
     * Short description of attribute work_phone_value
     *
     * @access public
     * @var String
     */
    public $work_phone_value = null;

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
     * @param  mobile_phone_value
     * @version 1.0
     */
    public function set_mobile_phone_value($mobile_phone_value)
    {
     $this->mobile_phone_value = $mobile_phone_value;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  home_phone_value
     * @version 1.0
     */
    public function set_home_phone_value($home_phone_value)
    {
     $this->home_phone_value = $home_phone_value;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  work_phone_value
     * @version 1.0
     */
    public function set_work_phone_value($work_phone_value)
    {
     $this->work_phone_value = $work_phone_value;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_element_list()
    {
     $mobile_phone_element = new fbox_text_element();
     $mobile_phone_element->set_label($this->language['C3_mobile_phone']);
     $mobile_phone_element->set_name("mobile_phone");
     $mobile_phone_element->set_value($this->mobile_phone_value);
     
     $home_phone_element = new fbox_text_element();
     $home_phone_element->set_label($this->language['C3_home_phone']);
     $home_phone_element->set_name("home_phone");
     $home_phone_element->set_value($this->home_phone_value);
     
     $work_phone_element = new fbox_text_element();
     $work_phone_element->set_label($this->language['C3_work_phone']);
     $work_phone_element->set_name("work_phone");
     $work_phone_element->set_value($this->work_phone_value);
     
     return
     "<h6 class=\"ym-fbox-heading\">" . 
     $this->language['C3_contact'] . 
     "</h6>" .
     $mobile_phone_element->get_element() .
     $home_phone_element->get_element() .
     $work_phone_element->get_element();
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  language
     */
    public function set_language($language)
    {
     $this->language = $language;
    }
}?>