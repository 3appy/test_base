<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.comment_view.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 31.03.2017, 15:40:39 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include simple_text_view
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.simple_text_view.php');

/* user defined includes */
// section 10-30-8-123-38018c62:140e8be7a9c:-8000:0000000000001CFD-includes begin
// section 10-30-8-123-38018c62:140e8be7a9c:-8000:0000000000001CFD-includes end

/* user defined constants */
// section 10-30-8-123-38018c62:140e8be7a9c:-8000:0000000000001CFD-constants begin
// section 10-30-8-123-38018c62:140e8be7a9c:-8000:0000000000001CFD-constants end

/**
 * Short description of class comment_view
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class comment_view
    extends simple_text_view
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
    public function get_view()
    {
     return
     $this->get_watch_id_author_view();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  is_read
     */
    public function get_reader_status($is_read)
    {
     return "";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_right_text()
    {
     return
     "<div class=\"ym-g80 ym-gr\">" .
     "<p class=\"box info\">" .
     $this->get_comment_image() .
     $this->get_text() .
     "<br/>" .
     "<br/>" .
     "<small>" .
     $this->get_author_status() .
     "<br/>" .
     $this->get_delete_link() .
     "</small>" .
     "</p>" .
     "</div>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_comment_image()
    {
     $comment_image = "";
     $image = $this->get_comment()->get_image();
     
     if ( $image->get_id() > (int)0 )
     {
     $control_base = $this->get_base_frame()->
     get_entity_name() . '_control_base';
     $comment_image = "".
     "<a href=\"" . $_SESSION[$control_base] .
     $this->get_base_frame()->
     get_basic_post_frame() . ".php" .
     "?function=" . (int)16 .
     "&image_id=" . $image->get_id() . "\">" .
     "<img src=\"". $image->get_article_thumb() .
     "\" alt=\"\"" . "class=\"float-right bordered\"/> " .
     "</a> ";
     }
     return $comment_image;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_comment()
    {
     return $this->text_model;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_delete_link()
    {
     if( $this->get_author()->get_id() == $_SESSION['watch_id'] )
     {
     $control_base = $this->get_base_frame()->
     get_entity_name() . '_control_base';
     
     return
     "<a href=" .
     $_SESSION[$control_base] .
     $this->get_base_frame()->get_entity_name() . "37_post_frame.php" .
     "?basic_element_function=" . (int)4 .
     "&id=" . $this->get_text_model()->get_id() .
     " onclick=\"return confirm('" .
     $this->language['C3_ask_delete_comment'] . "')\"" .
     ">" .
     "<img src=\"". $_SESSION['icons'] .  "erase.png\" " . "/>" .
     $this->language['C3_delete_comment'] .
     "</a>";
     }
     else
     {
     return "";
     }
    }
}?>