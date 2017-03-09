<?php

error_reporting(E_ALL);

/**
 * B6 represents the possibility to display all article from the article list of
 * member.
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
require_once('presentation/class/class.news_list_presentation.php');



/* user defined includes */
// section -64--88--78-21--1712c833:13cc066acdb:-8000:0000000000000B6B-includes begin
// section -64--88--78-21--1712c833:13cc066acdb:-8000:0000000000000B6B-includes end

/* user defined constants */
// section -64--88--78-21--1712c833:13cc066acdb:-8000:0000000000000B6B-constants begin
// section -64--88--78-21--1712c833:13cc066acdb:-8000:0000000000000B6B-constants end

/**
 * B6 represents the possibility to display all article from the article list of
 * member.
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class B7_view
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
     $this->load_language("b7");
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_column3_content()
    {
     $this->get_watch_entity()->reset_last_activity();
     
     $column3_content = "";

     if ( $this->watched_entity->get_id() == $this->watch_entity->get_id() )
     {
     $member = $this->watched_entity;
     $top_level_list = $member->get_toplevel_team_list();
     
     if ( $top_level_list->get_item_count() == (int)0 )
     { $column3_content = $this->get_org_info_presentation(); }
     else
     { $column3_content = $this->get_news_list_presentation(); }
     }
     
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_news_list_presentation()
    {
     $model = $this->watched_entity->get_news_list();
     
     $language = $this->get_language_array();
     $form = new news_list_presentation( $model, $language );
     $form->define_table();
     return $form->get_form();
    }
    
   


    public function get_org_info_presentation()
    {
     if( defined('__VIEW_PRESENT__') == FALSE )
     { define('__VIEW_PRESENT__', $this->get_root_view_presentation() ); }
     require_once(__VIEW_PRESENT__.
     'class/class.search_team_list_presentation.php');
     
     $language = $this->get_language_array();
     $org_info_presentation = "";
     $member = $this->watched_entity;
     $org_info_presentation .=
     "<section class=\"box info\">" .
     "<br /><p>" . $language['C3_info'] . "</p></section>" ;
     
     $model = $member->get_all_toplevel_team_list();
     $form = new search_team_list_presentation( $model, $language );
     $form->define_table();
     $org_info_presentation .= $form->get_form();
    
     return $org_info_presentation;
    }
    
    
}?>