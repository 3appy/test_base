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
 * The C - view is the basis of all views where the watched entity is of an
 * of a team:
 *
 * @author Bernd Schr�der
 * @version 1.0
 */
require_once('class.C_view.php');

/* user defined includes */
// section 10-5-25-44-2d135967:13ea9520ffa:-8000:00000000000012F2-includes begin
// section 10-5-25-44-2d135967:13ea9520ffa:-8000:00000000000012F2-includes end

/* user defined constants */
// section 10-5-25-44-2d135967:13ea9520ffa:-8000:00000000000012F2-constants begin
// section 10-5-25-44-2d135967:13ea9520ffa:-8000:00000000000012F2-constants end

/**
 * // 37 show all comments to an article
 * require_once('class_views/class.article_view.php');
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class C37_view
    extends C_view
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schr�der
     * @version 1.0
     */
    public function __construct()
    {
     parent::__construct();
     $this->load_language("c37");
    }
    /**
     *
     * @access public
     * @author Bernd Schr�der
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
     * @author Bernd Schr�der
     * @version 1.0
     */
    public function get_article_and_comment()
    {
     require_once('class_views/class.article_view.php');

     if(isset($_SESSION['C37_article_id']))
     {
     $team = $this->get_watched_entity();
     $article = $team->get_article( $_SESSION['C37_article_id'] );
     
     $article_view = new article_view( $team );
     $article_view->set_article($article);
     $article_view->set_language( $this->get_language_array() );
     $article_view->set_base_frame( $team );
     
     return
     $article_view->get_article_view( TRUE ) .
     $article_view->get_comment_list();
     }
    }
}?>