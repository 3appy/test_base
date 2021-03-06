<?php

error_reporting(E_ALL);

/**
 * //36 add a comment to an article
 *
 * @author Bernd Schr�der
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * The C - view is the basis of all views where the watched entity is of an
 * of an event:
 *
 * @author Bernd Schr�der
 * @version 1.0
 */
require_once('class.D_view.php');

/* user defined includes */
// section 10-5-25--79--7ffb1798:13ead3faaf1:-8000:00000000000010B7-includes begin
// section 10-5-25--79--7ffb1798:13ead3faaf1:-8000:00000000000010B7-includes end

/* user defined constants */
// section 10-5-25--79--7ffb1798:13ead3faaf1:-8000:00000000000010B7-constants begin
// section 10-5-25--79--7ffb1798:13ead3faaf1:-8000:00000000000010B7-constants end

/**
 * //36 add a comment to an article
 *
 * @access public
 * @author Bernd Schr�der
 */
class D36_view
    extends D_view
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
     $this->load_language("d36");
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
     $this->get_comment_form();
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author Bernd Schr�der
     * @version 1.0
     */
    public function get_comment_form()
    {
     if( defined('__ROOT_VIEW__') == FALSE )
     { define('__ROOT_VIEW__', $this->get_root_view() ); }
     require_once(__ROOT_VIEW__.'view/class_views/class.article_view.php');
     
     if( defined('__VIEW_FORM__') == FALSE )
     { define('__VIEW_FORM__', $this->get_root_view_form() ); }
     require_once(__VIEW_FORM__.'class.article_comment_form.php');
     
     $language_array = $this->get_language_array();
     
     $event = $this->get_watched_entity();
     $article = $event->get_article( $_SESSION['D36_article_id'] );
     
     $article_view = new article_view( $event );
     $article_view->set_article($article);
     $article_view->set_language( $language_array );
     $article_view->set_base_frame( $event );
     
     $action = $_SESSION['D_control_base'] . "D36_post_frame.php" .
     "?article_id=" . $_SESSION['D36_article_id'];
     $article_form = new article_comment_form($action);
     $article_form->set_language($language_array);
     $article_form->set_header( $language_array['C3_form_header'] );
     $article_form->set_enctype("multipart/form-data");
     
     return
     $article_view->get_article_view( FALSE ) .
     $article_form->get_form() . 
     "<br />" .
     $article_view->get_comment_list();
    }
}?>