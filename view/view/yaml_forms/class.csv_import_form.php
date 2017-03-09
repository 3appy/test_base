<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.csv_import_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 11.10.2016, 09:35:05 with ArgoUML PHP module 
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
// section 10-5-28--17-4f00e143:1559d1972c8:-8000:0000000000002C4D-includes begin
// section 10-5-28--17-4f00e143:1559d1972c8:-8000:0000000000002C4D-includes end

/* user defined constants */
// section 10-5-28--17-4f00e143:1559d1972c8:-8000:0000000000002C4D-constants begin
// section 10-5-28--17-4f00e143:1559d1972c8:-8000:0000000000002C4D-constants end

/**
 * Short description of class csv_import_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class csv_import_form
    extends standard_form
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute info_box
     *
     * @access public
     * @var String
     */
    public $info_box = null;

    /**
     * Short description of attribute text_box_header
     *
     * @access public
     * @var String
     */
    public $text_box_header = null;

    /**
     * Short description of attribute text_box
     *
     * @access public
     * @var String
     */
    public $text_box = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  info_box
     */
    public function set_info_box($info_box)
    {
     $this->info_box =$info_box;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  text_box_header
     */
    public function set_text_box_header($text_box_header)
    {
     $this->text_box_header =$text_box_header;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  text_box
     */
    public function set_text_box($text_box)
    {
     $this->text_box =$text_box;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_element_list()
    {
     if( defined('__VIEW_CONTROL__') == FALSE )
     { define('__VIEW_CONTROL__', $this->get_root_view_control() ); }
     require_once(__VIEW_CONTROL__.
     'class.fbox_text_area_element.php');
     require_once(__VIEW_CONTROL__.
     'class.fbox_text_hidden_element.php');
     
     $info_box = "<section class=\"box info\">" .
     "<br />" . $this->info_box . "</section>";
     
     $userfile = new fbox_text_hidden_element();
     $userfile->set_label($this->language['C3_userfile_disk']);
     $userfile->set_name("userfile");
     
     $message = new fbox_text_area_element();
     $message->set_label( $this->text_box_header );
     $message->set_name("message");
     $message->set_value( $this->text_box );
     return
     $info_box . $userfile->get_element() . $message->get_element();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_button()
    {
     if( defined('__VIEW_CONTROL__') == FALSE )
     { define('__VIEW_CONTROL__', $this->get_root_view_form() ); }
     require_once(__VIEW_CONTROL__.'class.send_reset_button_group.php');
     
     $button = new send_reset_button_group();
     $button->set_send($this->language['C3_send_button']);
     $button->set_reset($this->language['C3_reset_button']);
     return $button->get_button();
    }
}?>