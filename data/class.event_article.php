<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.event_article.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 05.04.2017, 09:35:10 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_event_article
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_event_article.php');

/* user defined includes */
// section -64--88--78-25-1362e296:147f7ea7a9e:-8000:0000000000001681-includes begin
// section -64--88--78-25-1362e296:147f7ea7a9e:-8000:0000000000001681-includes end

/* user defined constants */
// section -64--88--78-25-1362e296:147f7ea7a9e:-8000:0000000000001681-constants begin
// section -64--88--78-25-1362e296:147f7ea7a9e:-8000:0000000000001681-constants end

/**
 * Short description of class event_article
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class event_article
    extends generated_event_article
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_article_comment_list()
    {
     if( defined('__DB_ROOT__') == FALSE )
     { define('__DB_ROOT__', dirname(__FILE__) ); }
     require_once(__DB_ROOT__.'/class.event_article_comment_list.php');
     
     $article_list = new event_article_comment_list();
     $article_list->set_owner_id( $this->get_id() );
     $article_list->load();
     return $article_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_article_comment_list_count()
    {
     if( defined('__DB_ROOT__') == FALSE )
     { define('__DB_ROOT__', dirname(__FILE__) ); }
     require_once(__DB_ROOT__.'/class.event_article_comment_list.php');
     
     $article_list = new event_article_comment_list();
     $article_list->set_owner_id( $this->get_id() );
     $count = $article_list->get_count();
     return $count;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_text()
    {
     return str_replace("\n","<br />", parent::get_text() );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_article_image()
    {
     return $this->get_image()->get_article_thumb();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_image()
    {
     if( defined('__DB_ROOT__') == FALSE )
     { define('__DB_ROOT__', dirname(__FILE__) ); }
     require_once(__DB_ROOT__.'/class.media_file_list.php');
     
     if( $this->get_media_id() > (int)0 )
     {
     $media_list = new media_file_list();
     $media_list->set_media_id( $this->get_media_id() );
     $image_list = $media_list->load_picture();
     
     if( $image_list->get_item_count() > (int)0 )
     { return $image_list->get_item( (int)0 ); }
     else
     { return new image(); }
     }
     else
     { return new image(); }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function remove_article()
    {
     $comment_list = $this->get_article_comment_list();
     $comment_list->delete_list();
     $this->delete();
    }
}?>