<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.article_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 01.01.2017, 16:42:28 with ArgoUML PHP module 
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
// section 10-5-24--17-4773b5b2:1595a9648c0:-8000:00000000000013B2-includes begin
// section 10-5-24--17-4773b5b2:1595a9648c0:-8000:00000000000013B2-includes end

/* user defined constants */
// section 10-5-24--17-4773b5b2:1595a9648c0:-8000:00000000000013B2-constants begin
// section 10-5-24--17-4773b5b2:1595a9648c0:-8000:00000000000013B2-constants end

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


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_element_list()
    {
     if( defined('__VIEW_CONTROL__') == FALSE )
     { define('__VIEW_CONTROL__', $this->get_root_view_control() ); }
     
     require_once(__VIEW_CONTROL__.'class.fbox_text_element.php');
     require_once(__VIEW_CONTROL__.'class.fbox_text_area_element.php');
     require_once(__VIEW_CONTROL__.'class.fbox_text_hidden_element.php');
     require_once(__VIEW_CONTROL__.'class.fbox_select_filetype_element.php');
     
     $header_element = new fbox_text_element();
     $header_element->set_label($this->language['C3_header']);
     $header_element->set_name("header");
     
     $text_element = new fbox_text_area_element();
     $text_element->set_label($this->language['C3_article']);
     $text_element->set_name("article");
     
     // ----------------- add file from disk -----------------
     $userfile = new fbox_text_hidden_element();
     $userfile->set_label($this->language['C3_userfile_disk']);
     $userfile->set_name("userfile");
     
     // -------------- add file from your profile -------------
     $filetype = new fbox_select_filetype_element();
     $filetype->set_label($this->language['C3_userfile_profile']);
     $filetype->set_language( $this->language );
     $filetype->set_name("filetype");
     $filetype->define_model();
     
     return
     $header_element->get_element() .
     $text_element->get_element();
     //"<h6 class=\"ym-fbox-heading\">" . 
     //$this->language['C3_addfile'] . "</h6>" .
     //$userfile->get_element() .
     //$filetype->get_element();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_button()
    {
     if( defined('__VIEW_CONTROL__') == FALSE )
     { define('__VIEW_CONTROL__', $this->get_root_view_control() ); }
     require_once(__VIEW_CONTROL__.'class.send_reset_button_group.php');
     
     $button = new send_reset_button_group();
     $button->set_send($this->language['C3_send_button']);
     $button->set_reset($this->language['C3_reset_button']);
     return $button->get_button();
    }
}?>