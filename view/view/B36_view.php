<?php

error_reporting(E_ALL);

/**
 * //36 add a comment to an article
 * //require_once('form_controls/class.article_comment_form.php');
 *
 * @author Bernd Schröder
 * @version 1.0
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
// section 10-30-8--123-1c071adb:13e840f5cfd:-8000:0000000000001078-includes begin
// section 10-30-8--123-1c071adb:13e840f5cfd:-8000:0000000000001078-includes end

/* user defined constants */
// section 10-30-8--123-1c071adb:13e840f5cfd:-8000:0000000000001078-constants begin
// section 10-30-8--123-1c071adb:13e840f5cfd:-8000:0000000000001078-constants end

require_once('form_controls/class.article_comment_form.php');

/**
 * //36 add a comment to an article
 * //require_once('form_controls/class.article_comment_form.php');
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class B36_view
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
     $this->load_language("b36");
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
     $this->get_comment_form();
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_comment_form()
    {
     $language_array = $this->get_language_array();
     $article_id = htmlspecialchars( $_SESSION['B36_article_id']);
     unset($_SESSION['B36_article_id'] );
     $new_article = $this->get_watched_entity()->get_article( $article_id );
     $article_name = $new_article->get_header();
     
     $action = $_SESSION['B_control_base'] . "B36_post_frame.php" .
     "?article_id=" . $article_id;
     
     $article_form = new article_comment_form($action);
     $article_form->set_form_header($language_array['C3_form_header'] .
     $article_name );
     $article_form->set_text($language_array['C3_text']);
     $article_form->set_send($language_array['C3_send_button']);
     $article_form->set_reset($language_array['C3_reset_button']);
     return $article_form->get_form();
    }
}?>