<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.team_article_comment.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 31.03.2017, 14:05:52 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_team_article_comment
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_team_article_comment.php');

/* user defined includes */
// section -64--88--78-25-1362e296:147f7ea7a9e:-8000:0000000000001687-includes begin
// section -64--88--78-25-1362e296:147f7ea7a9e:-8000:0000000000001687-includes end

/* user defined constants */
// section -64--88--78-25-1362e296:147f7ea7a9e:-8000:0000000000001687-constants begin
// section -64--88--78-25-1362e296:147f7ea7a9e:-8000:0000000000001687-constants end

/**
 * Short description of class team_article_comment
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class team_article_comment
    extends generated_team_article_comment
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
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
    public function get_comment_image()
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
}?>