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
 * of a team:
 *
 * @author Bernd Schröder
 * @version 1.0
 */
require_once('class.C_view.php');

/* user defined includes */
// section -64--88--78-21-438a7c36:13cbb0d4b36:-8000:0000000000000B0E-includes begin
// section -64--88--78-21-438a7c36:13cbb0d4b36:-8000:0000000000000B0E-includes end

/* user defined constants */
// section -64--88--78-21-438a7c36:13cbb0d4b36:-8000:0000000000000B0E-constants begin
// section -64--88--78-21-438a7c36:13cbb0d4b36:-8000:0000000000000B0E-constants end

/**
 * //7  show article data
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class C7_view
    extends C_view
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
     $this->load_language("c7");
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
     $this->get_article_list();
     return $column3_content;
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