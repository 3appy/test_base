<?php

error_reporting(E_ALL);

/**
 * //3  modify article data
 *
 * @author Bernd Schr�der
 * @version 1.0
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
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001D83-includes begin
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001D83-includes end

/* user defined constants */
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001D83-constants begin
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001D83-constants end

/**
 * //3  modify article data
 *
 * @access public
 * @author Bernd Schr�der
 * @version 1.0
 */
class D3_view
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
     $this->load_language("d3");
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
     $this->get_article_form();
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author Bernd Schr�der
     * @version 1.0
     */
    public function get_article_form()
    {
     if( defined('__VIEW_VIEW_ROOT__') == FALSE )
     { define('__VIEW_VIEW_ROOT__', dirname(__FILE__) ); }
     require_once(__VIEW_VIEW_ROOT__.
     '/yaml_forms/class.article_form.php');
     
     $language_array = $this->get_language_array();
     $action = $_SESSION['D_control_base'] . "D3_post_frame.php";
     $article_form = new article_form($action);
     $article_form->set_language($language_array);
     $article_form->set_header( $language_array['C3_form_header'] );
     $article_form->set_enctype("multipart/form-data");
     
     return $article_form->get_form();
    }
}?>