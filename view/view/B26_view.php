<?php

error_reporting(E_ALL);

/**
 * // 26 Suche ( Member )
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
// section -64--88--78-21-467d1499:1424322966b:-8000:000000000000122E-includes begin
// section -64--88--78-21-467d1499:1424322966b:-8000:000000000000122E-includes end

/* user defined constants */
// section -64--88--78-21-467d1499:1424322966b:-8000:000000000000122E-constants begin
// section -64--88--78-21-467d1499:1424322966b:-8000:000000000000122E-constants end

/**
 * // 26 Suche ( Member )
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class B26_view
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
     $this->load_language("b26");
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_column3_content()
    {
     $language_array = $this->get_language_array();
     $column3_content = $this->get_search_result();
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_search_result()
    {
     $result_info = "";
     
     if ( isset( $_SESSION['search_string'] ) )
     {
     $language = $this->get_language_array();
     $tag = $_SESSION['search_string'];
     $member = $this->get_watch_entity();
     $toplevel_team_list = $member->get_toplevel_team_list();
     $list_count = $toplevel_team_list->get_item_count();
     
     if ( $list_count == (int)1 )
     {
     $result_info .=
     "<section class=\"box info\">" .
     "<br />" .
     "<p>" . $language['C3_info_1'] . "</p>" .
     "</section>" ;
     }
     else
     {
     $result_info .=
     "<section class=\"box info\">" .
     "<br />" .
     "<p>" . $language['C3_info_x_1'] . " " .
     $list_count . " " . $language['C3_info_x_2'] . "</p>" .
     "</section>" ;
     }
     for ( $n=0; $n < $list_count; $n++ )
     {
     $team = $toplevel_team_list->get_item( $n );
     $network_id = $team->get_network_id();
     $result_info .=
     "<section class=\"box info\">" .
     "<br />" .
     "<p>" . $language['C3_info_3'] . $team->get_name() . "</p>" .
     "</section>" ;
     
     $model = $member->get_member_search_list( $tag, $network_id );
     $result_info .= $this->get_member_result( $model );
     
     $model = $member->get_team_search_list( $tag, $network_id );
     $result_info .= $this->get_team_result( $model );
     
     $model = $member->get_event_search_list( $tag, $network_id );
     $result_info .= $this->get_event_result( $model );
     }
     }
     return $result_info;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  model
     * @version 1.0
     */
    public function get_member_result($model)
    {
     if( defined('__VIEW_PRESENT__') == FALSE )
     { define('__VIEW_PRESENT__', $this->get_root_view_presentation() ); }
     require_once(__VIEW_PRESENT__.
     'class/class.search_member_list_presentation.php');
     
     $language = $this->get_language_array();
     $form = new search_member_list_presentation( $model, $language );
     $form->set_frame( $this->get_watched_entity() );
     $form->define_table();
     return $form->get_form();
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  model
     * @version 1.0
     */
    public function get_team_result($model)
    {
     if( defined('__VIEW_PRESENT__') == FALSE )
     { define('__VIEW_PRESENT__', $this->get_root_view_presentation() ); }
     require_once(__VIEW_PRESENT__.
     'class/class.search_team_list_presentation.php');
     
     $language = $this->get_language_array();
     $form = new search_team_list_presentation( $model, $language );
     $form->define_table();
     return $form->get_form();
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  model
     * @version 1.0
     */
    public function get_event_result($model)
    {
     if( defined('__VIEW_PRESENT__') == FALSE )
     { define('__VIEW_PRESENT__', $this->get_root_view_presentation() ); }
     require_once(__VIEW_PRESENT__.
     'class/class.search_event_list_presentation.php');
     
     $language = $this->get_language_array();
     $form = new search_event_list_presentation( $model, $language );
     $form->define_table();
     return $form->get_form();
    }
}?>