<?php

error_reporting(E_ALL);

/**
 * // 37 show all comments to an article
 * require_once('class_views/class.article_view.php');
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * The B - view is the basis of all views where the watched entity is of an
 * of a member:
 *
 * @author Bernd Schröder
 * @version 1.0
 */
require_once('class.B_view.php');

/* user defined includes */
// section -64--88--78-21--6e6e5999:13e99c50ea0:-8000:0000000000001089-includes begin
// section -64--88--78-21--6e6e5999:13e99c50ea0:-8000:0000000000001089-includes end

/* user defined constants */
// section -64--88--78-21--6e6e5999:13e99c50ea0:-8000:0000000000001089-constants begin
// section -64--88--78-21--6e6e5999:13e99c50ea0:-8000:0000000000001089-constants end

require_once('class_views/class.article_view.php');

/**
 * // 37 show all comments to an article
 * require_once('class_views/class.article_view.php');
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class B37_view
    extends B_view
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
    public function __construct()
    {
     parent::__construct();
     $this->load_language("b37");
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_column3_content()
    {
     $column3_content =  "" .
     $this->get_article_and_comment();
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_article_and_comment()
    {
     if(isset($_SESSION['B37_article_id']))
     {
     $member = $this->get_watched_entity();
     $article = $member->get_article( $_SESSION['B37_article_id'] );
     
     $article_view = new article_view( $member );
     $article_view->set_article($article);
     $article_view->set_language( $this->get_language_array() );
     $article_view->set_base_frame( $this->get_watched_entity() );

     return
     $article_view->get_article_view() .
     $article_view->get_comment_list();
     }
    }
}?>