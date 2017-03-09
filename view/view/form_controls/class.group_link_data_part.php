<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.group_link_data_part.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 09.11.2013, 02:19:39 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include link_button
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.link_button.php');

/* user defined includes */
// section -64--88--78-21--551357e7:141d704cd49:-8000:000000000000140F-includes begin
// section -64--88--78-21--551357e7:141d704cd49:-8000:000000000000140F-includes end

/* user defined constants */
// section -64--88--78-21--551357e7:141d704cd49:-8000:000000000000140F-constants begin
// section -64--88--78-21--551357e7:141d704cd49:-8000:000000000000140F-constants end

/**
 * Short description of class group_link_data_part
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class group_link_data_part
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute language
     *
     * @access public
     * @var String
     */
    public $language = null;
    public $owner = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_element_list()
    {
     $wrap_element = new fbox_wrap_element();
     $wrap_element->set_header($this->language['C3_button_header']);
     
     $change_picture_button = new link_button();
     $change_picture_button->
     set_name($this->language['C3_change_picture']);
     $change_picture_button->
     set_link($_SESSION['A_frame_base'] .
     "A13_frame" . ".php");
     $wrap_element->add_item($change_picture_button);
     
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
    
    public function set_owner($owner)
    {
     $this->owner = $owner;
    }
    
    public function get_owner()
    {
     return $this->owner;
    }
}?>