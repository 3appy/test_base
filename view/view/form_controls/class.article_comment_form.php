<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.article_comment_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 08.05.2013, 21:49:12 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include send_reset_form
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.send_reset_form.php');

/* user defined includes */
// section 10-30-8--123-1c071adb:13e840f5cfd:-8000:0000000000001391-includes begin
// section 10-30-8--123-1c071adb:13e840f5cfd:-8000:0000000000001391-includes end

/* user defined constants */
// section 10-30-8--123-1c071adb:13e840f5cfd:-8000:0000000000001391-constants begin
// section 10-30-8--123-1c071adb:13e840f5cfd:-8000:0000000000001391-constants end

/**
 * Short description of class article_comment_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class article_comment_form
    extends send_reset_form
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute text
     *
     * @access public
     * @var String
     */
    public $text = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  text
     * @version 1.0
     */
    public function set_text($text)
    {
     $this->text = $text;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_form_header()
    {
     return "<h6>" . $this->form_header . "</h6>" .  "<br />";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_form_list()
    {
     return
     // text
     $this->get_fbox_area( $this->text, "text");
    }
}?>