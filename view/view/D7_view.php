<?php

error_reporting(E_ALL);

/**
 * //7  show article data
 *
 * @author Bernd Schröder
 * @version 1.0
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * The C - view is the basis of all views where the watched entity is of an
 * of an event:
 *
 * @author Bernd Schröder
 * @version 1.0
 */
require_once('class.D_view.php');

/* user defined includes */
// section -64--88--78-21-438a7c36:13cbb0d4b36:-8000:0000000000000B0F-includes begin
// section -64--88--78-21-438a7c36:13cbb0d4b36:-8000:0000000000000B0F-includes end

/* user defined constants */
// section -64--88--78-21-438a7c36:13cbb0d4b36:-8000:0000000000000B0F-constants begin
// section -64--88--78-21-438a7c36:13cbb0d4b36:-8000:0000000000000B0F-constants end

/**
 * //7  show article data
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class D7_view
    extends D_view
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
     $this->load_language("d7");
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_D3_content()
    {
     if ( $this->watched_entity->get_type() == (int)3 AND
         (( $this->watch_relation == (int)4 ) OR
         ( $this->watch_relation == (int)5 ))) 
     { $column3_content = $this->get_timeslot_link(); }
     else
     { $column3_content = ""; }
     
     $column3_content .=  $this->get_article_list();
     return $column3_content;
    }
    /**
     * 
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_timeslot_link()
    {
    if( defined('__VIEW_CONTROL__') == FALSE )
     { define('__VIEW_CONTROL__', $this->get_root_view_control() ); }
     require_once(__VIEW_CONTROL__.'class.link_button.php');
     
    $lang = $this->get_language_array();
    
    $link_description = "<p>" . $lang['C3_link_descr'] . "</p>";
    $link_button = new link_button();
    $link_button->set_name($lang['C3_button']);
    $link_button->set_link($_SESSION['D_control_base'] .
    "D_post_frame.php?function=" . (int)5 );
    
    return
    "<section class=\"box info\">" .
     $link_button->get_button() . $link_description .
     "</section>";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_article_list()
    {
     require_once('class_views/class.article_view.php');
     
     $article_list = $this->watched_entity->get_article_list();
     $count = $article_list->get_item_count();
     
     $table_body = "";
     if ($count > 0)
     {
     $table_body =
     "<table>" .
     "<thead>" .
     "<tr>" .
     "<th>" . $count . " article" . "</th>" .
     "</tr>" .
     "</thead>" .
     "<tbody>";
     
     for ($i = 0; $i < $count; $i++)
     {
     $article = $article_list->get_item( $i );
     $new_article_view = new article_view( $this->get_watch_entity() );
     $new_article_view->set_article($article);
     $new_article_view->set_language( $this->get_language_array() );
     $new_article_view->set_base_frame( $this->get_watched_entity() );
     
     $table_body = $table_body .
     "<tr>" .
     "<td>" .
     $new_article_view->get_article_view( TRUE );
     "</td>" .
     "</tr>";
     }
     $table_body = $table_body .
     "</tbody>" .
     "</table>";
     }
     return $table_body;
    }
}?>