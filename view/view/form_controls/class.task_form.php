<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.task_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 18.02.2015, 19:47:28 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include fbox_area_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_area_element.php');

/**
 * include fbox_duration_select_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_duration_select_element.php');

/**
 * include fbox_status_select_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_status_select_element.php');

/**
 * include fbox_table_item_select_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_table_item_select_element.php');

/**
 * include link_button
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.link_button.php');

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
// section 127-0-0-1-35edf3df:14155ba9af1:-8000:0000000000001405-includes begin
// section 127-0-0-1-35edf3df:14155ba9af1:-8000:0000000000001405-includes end

/* user defined constants */
// section 127-0-0-1-35edf3df:14155ba9af1:-8000:0000000000001405-constants begin
// section 127-0-0-1-35edf3df:14155ba9af1:-8000:0000000000001405-constants end

/**
 * Short description of class task_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class task_form
    extends standard_form
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
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
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_author_comment()
    {
     $comment = $this->get_model()->get_author_comment();
     if ( $comment == "" )
     { $comment = $this->language['C3_no_author_comment']; }
     return $comment;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_receiver_comment()
    {
     $comment = $this->get_model()->get_receiver_comment();
     if ( $comment == "" )
     { $comment = $this->language['C3_no_receiver_comment']; }
     return $comment;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_task_description()
    {
     $comment = $this->get_model()->get_task_description();
     if ( $comment == "" )
     { $comment = $this->language['C3_no_task_description']; }
     return $comment;
    }
}?>