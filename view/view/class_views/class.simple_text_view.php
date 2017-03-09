<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.simple_text_view.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 05.09.2013, 15:58:09 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include_once '../../../data/class.member.php';
 *
 * @author Bernd Schröder
 * @version 1.0
 */
require_once('class.text_view.php');

/* user defined includes */
// section 10-30-8-123-38018c62:140e8be7a9c:-8000:0000000000001CB4-includes begin
// section 10-30-8-123-38018c62:140e8be7a9c:-8000:0000000000001CB4-includes end

/* user defined constants */
// section 10-30-8-123-38018c62:140e8be7a9c:-8000:0000000000001CB4-constants begin
// section 10-30-8-123-38018c62:140e8be7a9c:-8000:0000000000001CB4-constants end

/**
 * Short description of class simple_text_view
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class simple_text_view
    extends text_view
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
    public function get_left_image()
    {
     return
     "<div class=\"ym-g20 ym-gl\">" .
     "<img src=\"". $this->get_author_image()->get_avatar_icon() .
     "\" alt=\"\" class=\"flexible float-left\"/>" . 
     "<a href=\"" . $_SESSION['B_control_base'] .
     "B0_pre_frame.php?id=" .
     $this->author->get_id() . "\">" .
     "</a>" .
     "</div>";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_left_text()
    {
     return
     "<div class=\"ym-g80 ym-gl\">" .
     "<p class=\"box info\">" .
     $this->get_text() .
     "<br/>" .
     "<br/>" .
     "<small>" .
     $this->get_author_status() .
     "<br/>" .
     $this->get_reader_status($this->get_text_model()->is_read() ) .
     "</small>" .
     "</p>" .
     "</div>";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_right_image()
    {
     return
     "<div class=\"ym-g20 ym-gr\">" .
     "<img src=\"". $this->get_author_image()->get_avatar_icon() .
     "\" alt=\"\" class=\"flexible float-right\"/>" .
     "<a href=\"" . $_SESSION['B_control_base'] .
     "B0_pre_frame.php?id=" .
     $this->author->get_id() . "\">" .
     "</a>" .
     "</div>";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_right_text()
    {
     return
     "<div class=\"ym-g80 ym-gr\">" .
     "<p class=\"box info\">" .
     $this->get_text() .
     "<br/>" .
     "<br/>" .
     "<small>" .
     $this->get_author_status() .
     "<br/>" .
     $this->get_reader_status($this->get_text_model()->is_read() ) .
     "</small>" .
     "</p>" .
     "</div>";
    }
    /**
     * //Is the person ( watch_id ) the author of this text_object
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_watch_id_author_view()
    {
     return
     "<div class=\"ym-grid ym-equalize\">" .
     $this->get_left_image() .
     $this->get_right_text() .
     "</div>";
    }
    /**
     * //Is the person ( watch_id ) the receiver or of this text_object
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_watch_id_reader_view()
    {
     if( $this->text_model->is_not_read() )
     { $this->text_model->update_read_stamp(); }
     return
     "<div class=\"ym-grid ym-equalize\">" .
     $this->get_left_text() .
     $this->get_right_image() .
     "</div>";
    }
}?>