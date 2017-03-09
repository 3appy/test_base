<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.member_link_data_part.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 09.11.2013, 02:15:46 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include group_link_data_part
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.group_link_data_part.php');

/* user defined includes */
// section -64--88--78-21--551357e7:141d704cd49:-8000:0000000000001448-includes begin
// section -64--88--78-21--551357e7:141d704cd49:-8000:0000000000001448-includes end

/* user defined constants */
// section -64--88--78-21--551357e7:141d704cd49:-8000:0000000000001448-constants begin
// section -64--88--78-21--551357e7:141d704cd49:-8000:0000000000001448-constants end

/**
 * Short description of class member_link_data_part
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class member_link_data_part
    extends group_link_data_part
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

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
     $change_password_button = new link_button();
     $change_password_button->
     set_name($this->language['C3_change_password']);
     $change_password_button->
     set_link($_SESSION['B_frame_base'] .
     ("B20_frame") . ".php" .
     "?ni:be!:lu:jo!mem=" . $_SESSION['watched_id'] );
     $wrap_element->add_item($change_password_button);
     
     $change_language_button = new link_button();
     $change_language_button->
     set_name($this->language['C3_change_language']);
     $change_language_button->
     set_link($_SESSION['B_frame_base'] .
     ("B24_frame") . ".php" .
     "?ni:be!:lu:jo!mem=" . $_SESSION['watched_id'] );
     $wrap_element->add_item($change_language_button);
     
     $change_picture_button = new link_button();
     $change_picture_button->
     set_name($this->language['C3_change_picture']);
     $change_picture_button->
     set_link($_SESSION['B_frame_base'] .
     "B18_frame.php" .
     "?ni:be!:lu:jo!mem=" . $_SESSION['watched_id'] );
     $wrap_element->add_item($change_picture_button);
     
     return $wrap_element->get_element();
    }
}?>