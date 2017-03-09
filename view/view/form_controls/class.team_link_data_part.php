<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.team_link_data_part.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 09.11.2013, 02:17:38 with ArgoUML PHP module 
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
// section -64--88--78-21-3afc44d4:142385ed04f:-8000:0000000000002216-includes begin
// section -64--88--78-21-3afc44d4:142385ed04f:-8000:0000000000002216-includes end

/* user defined constants */
// section -64--88--78-21-3afc44d4:142385ed04f:-8000:0000000000002216-constants begin
// section -64--88--78-21-3afc44d4:142385ed04f:-8000:0000000000002216-constants end

/**
 * Short description of class team_link_data_part
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class team_link_data_part
    extends group_link_data_part
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     */
    public function get_element_list()
    {
     $wrap_element = new fbox_wrap_element();
     
     $change_picture_button = new link_button();
     $change_picture_button->
     set_name($this->language['C3_change_picture']);
     $change_picture_button->
     set_link($_SESSION['C_frame_base'] .
     "C18_frame.php" .
     "?be:ni!:jo:lu!te=" . $_SESSION['watched_id'] );     
     $wrap_element->add_item($change_picture_button);

     $link = $_SESSION['C_control_base'] . "C2_post_frame.php" .
     "?basic_element_function=" . (int)4 .
     "&id=" . $this->get_owner()->get_id() .
     " onclick=\"return confirm('" . 
     $this->language['C3_ask_delete_team'] . "')\"";
     
     $name = $this->language['C3_delete_team'];
     
     $delete_picture_button = new link_button();
     $delete_picture_button->
     set_name( $name );
     $delete_picture_button->
     set_link($link);
     
     $wrap_element->add_item($delete_picture_button);

     return $wrap_element->get_element();
    }
}?>