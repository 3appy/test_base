<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.article_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 30.10.2014, 16:20:24 with ArgoUML PHP module 
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
 * include fbox_link_select_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_link_select_element.php');

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

/**
 * include standard_form
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.standard_form.php');

/* user defined includes */
// section -64--88--78-21--2ccdd3d1:13f3ed8ac22:-8000:0000000000000C8A-includes begin
// section -64--88--78-21--2ccdd3d1:13f3ed8ac22:-8000:0000000000000C8A-includes end

/* user defined constants */
// section -64--88--78-21--2ccdd3d1:13f3ed8ac22:-8000:0000000000000C8A-constants begin
// section -64--88--78-21--2ccdd3d1:13f3ed8ac22:-8000:0000000000000C8A-constants end

/**
 * Short description of class article_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class article_form
    extends standard_form
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute header_value
     *
     * @access private
     * @var String
     */
    private $header_value = null;

    /**
     * Short description of attribute text_value
     *
     * @access private
     * @var String
     */
    private $text_value = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_element_list()
    {
     $header_element = new fbox_text_element();
     $header_element->set_label($this->language['C3_header']);
     $header_element->set_name("header");
     $header_element->set_value($this->header_value);
     
     $text_element = new fbox_area_element();
     $text_element->set_label($this->language['C3_article']);
     $text_element->set_name("article");
     $text_element->set_value($this->text_value);
     
     $link_element = new fbox_link_select_element();
     $link_element->set_language( $this->language );
     $link_element->set_label($this->language['C3_link_header']);
     $link_element->set_name("link");
//     $link_element->set_value();
     	
     return 
     $header_element->get_element() .
     $text_element->get_element() .
     $link_element->get_element();
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
     * @param  header_value
     * @version 1.0
     */
    public function set_header_value($header_value)
    {
     $this->header_value = $header_value;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  text_value
     * @version 1.0
     */
    public function set_text_value($text_value)
    {
     $this->text_value = $text_value;
    }
}?>