<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.article_view.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 21.04.2016, 10:07:07 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include comment_view
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.comment_view.php');

/**
 * include_once '../../../data/class.member.php';
 *
 * @author Bernd Schröder
 * @version 1.0
 */
require_once('class.text_view.php');

/* user defined includes */
// section 10-5-25--46--64418a0c:13ea6e738ed:-8000:0000000000001AD7-includes begin
// section 10-5-25--46--64418a0c:13ea6e738ed:-8000:0000000000001AD7-includes end

/* user defined constants */
// section 10-5-25--46--64418a0c:13ea6e738ed:-8000:0000000000001AD7-constants begin
// section 10-5-25--46--64418a0c:13ea6e738ed:-8000:0000000000001AD7-constants end

/**
 * Short description of class article_view
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class article_view
    extends text_view
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     *
     * @access public
     * @author Bernd Schröder
     * @param  show_link
     * @version 1.0
     */
    public function get_article_view($show_link)
    {
     $return_show_link = "";
     if( $show_link )
     { 
     $return_show_link = 
     "<blockquote>" .
     $this->get_write_comment_link() .
     "<br/>" .
     $this->get_show_comment_link() .
     "<br/>" .
     $this->get_delete_link() .
     "<blockquote/>"; 
     }
     return
     "<div class=\"ym-gbox-left\">" .
     $this->get_article_image() .
     "<h6>" . $this->get_article()->get_header() . "</h6>" .
//     "<p>" . $this->get_article()->get_text() . "</p>" .
     "<p>" . $this->get_text() . "</p>" .
     $this->get_author_status() .
     $return_show_link .
     "</div>";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_article_image()
    {
     $article_image = "";
     $image = $this->get_article()->get_image();
     if ( $image->get_id() > (int)0 )
     {
     $control_base = $this->get_base_frame()->
     get_entity_name() . '_control_base';
     $article_image = "".
     "<a href=\"" . $_SESSION[$control_base] .
     $this->get_base_frame()->
     get_basic_post_frame() . ".php" .
     "?function=" . (int)16 .
     "&image_id=" . $image->get_id() . "\">" .
     "<img src=\"". $image->get_article_thumb() .
     "\" alt=\"\"" . "class=\"float-right bordered\"/> " .
     "</a> ";
     }
     return $article_image;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_show_comment_link()
    {
     $count = $this->get_article()->
     get_article_comment_list_count();
     $control_base = $this->get_base_frame()->
     get_entity_name() . '_control_base';
     
     $return_string =
     "<a href=\"" .
     $_SESSION[$control_base] .
     $this->get_base_frame()->get_entity_name() . 
     "37_pre_frame.php" .
     "?article_id=" . $this->get_article()->get_id() . "\">" .
     $this->language['C3_show_all_comments'] . " " .
     "<span class=\"label\">" . $count . "</span>" . "</a>";
     return $return_string;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_write_comment_link()
    {
     $control_base = $this->get_base_frame()->
     get_entity_name() . '_control_base';
     
     return "" .
     "<a href=\"" .
     $_SESSION[$control_base] .
     $this->get_base_frame()->get_entity_name() .
     "36_pre_frame.php" .
     "?article_id=" . $this->get_article()->get_id() . "\">" .
     $this->language['C3_write_a_comment'] . " " . "</a>";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_comment_list()
    {
     $article_comment_list =
     $this->get_article()->get_article_comment_list();
     $count = $article_comment_list->get_item_count();
     
     $table_body = "";
     if ($count > 0)
     {
     for ($i = 0; $i < $count; $i++)
     {
     $article_comment =
     $article_comment_list->get_item( $i );
     $new_comment_view = new comment_view( $this->get_reader() );
     $new_comment_view->set_text_model($article_comment);
     $new_comment_view->set_language($this->language);
     $new_comment_view->set_base_frame( $this->get_base_frame() );
     $table_body = $table_body .
     $new_comment_view->get_view();
     }
     }
     return $table_body;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_article()
    {
     return $this->text_model;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  article
     * @version 1.0
     */
    public function set_article($article)
    {
     $this->set_text_model($article);
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
     $this->get_base_frame()->get_entity_name() . "7_post_frame.php" .
     "?basic_element_function=" . (int)4 .
     "&id=" . $this->get_article()->get_id() .
     " onclick=\"return confirm('" . 
     $this->language['C3_ask_delete_article'] . "')\"" .
     ">" .
     "<img src=\"". $_SESSION['icons'] .  "erase.png\" " . "/>" .
     $this->language['C3_delete_article'] .
     "</a>";
     }
     else
     {
     return "";
     }
    }
}?>