<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.Yaml_framework.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 08.12.2016, 10:20:37 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include three_column_basic_view
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.three_column_basic_view.php');

/* user defined includes */
// section 10-5-29--119--16e7d7:13cf7c0d403:-8000:00000000000015F7-includes begin
// section 10-5-29--119--16e7d7:13cf7c0d403:-8000:00000000000015F7-includes end

/* user defined constants */
// section 10-5-29--119--16e7d7:13cf7c0d403:-8000:00000000000015F7-constants begin
// section 10-5-29--119--16e7d7:13cf7c0d403:-8000:00000000000015F7-constants end

/**
 * Short description of class Yaml_framework
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Yaml_framework
    extends three_column_basic_view
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
    public function get_representation()
    {
     return
     $this->get_html_header() .
     $this->get_header() .
     $this->get_toppane() .
     "<div class=\"ym-wrapper\">" .
     "<div class=\"ym-wbox\">" .
     "<div class=\"ym-grid linearize-level-1\">" .
     $this->get_left_grid() .
     $this->get_right_grid() .
     $this->get_middle_grid() .
     "</div>" .
     "</div>" .
     "</div>" .
     $this->get_footer() .
     $this->get_html_footer();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_html_header()
    {
     require_once('class.simple_html_header.php');
     
     $header = new simple_html_header();
     return $header->get_representation();
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_header()
    {
     return
     "<header> " .
     "<div class=\"ym-wrapper\">" .
     "<div class=\"ym-wbox\">" .
     "<div class=\"ym-grid linearize-level-2\">" .
     "<div class=\"ym-g50 ym-gl\">" .
     "<div class=\"ym-gbox-left\">" .
     $this->get_left_header() .
     "</div>" .
     "</div>" .
     "<div class=\"ym-g50 ym-gr\">" .
     "<div class=\"ym-gbox-right\">" .
     "<div id=\"topnav\" align=\"right\"> " .
     "</span>" .
     $this->get_right_header() .
     "</div>" .
     "</div>".
     "</div>" .
     "</div>" .
     "</div>" .
     "</div>" .
     "</header>";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_left_header()
    {
     return "<h3>" . $this->get_left_header_content() . "</h3>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_right_header()
    {
     return $this->get_right_header_content();
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_toppane()
    {
     return
     "<nav id=\"nav\">" .
     "<div class=\"ym-wrapper\">" .
     "<div class=\"ym-hlist\">" .
     $this->get_left_pane() .
     $this->get_right_pane()  .
     "</div>" .
     "</div>" .
     "</nav>";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_left_pane()
    {
     return $this->get_top_navigation();
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_right_pane()
    {
     return $this->get_top_search();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  frame
     * @param  text
     */
    public function get_link($frame, $text)
    {
     return
     "<p>" .
     "<a href=\"" . $_SESSION['A_frame_base'] .
     $frame . "\"" .
     "style=\"color: #fff;\"" .
     ">" . $text . "</a> " .
     "</p>";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_left_grid()
    {
     return 
     "<article class=\"ym-g25 ym-gl\">" .
     "<div class=\"ym-gbox-left secondary\">" .
     "<div class=\"ym-contain-oh\">" .
     $this->get_watched_entity_avatar() .
     $this->get_left_navigation_content() .
     $this->get_column1_content() .
     "</div>" .
     "</div>" .
     "</article>";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_right_grid()
    {
     return 
     "<article class=\"ym-g25 ym-gr\">" .
     "<div class=\"ym-gbox-right secondary\">" .
     "<div class=\"ym-contain-oh\">" .
     "<p><img src=\"". $_SESSION['images'] .
     "skolegroup.png\"" . "\" alt=\"\" class=\"flexible\"/></p>" .
     $this->get_right_navigation_content() . 
     $this->get_column2_content() .
     "</div>" .
     "</div>" .
     "</article>";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_middle_grid()
    {
     if ($this->watch_relation==9)
     { $middle_content = $this->get_error_no_access_info(); }
     else
     { $middle_content = $this->get_column3_content(); }
     
     return
     "<article class=\"ym-g50 ym-gr\">" .
     "<div class=\"ym-gbox-left secondary\">" .
     "<div class=\"ym-contain-oh\">" .
     $this->get_relation_info() .
     $this->get_Session_error_information() .
     $this->get_follower_invitation_info() .
     $this->get_team_invitation_info() .
     $this->get_event_invitation_info() .
     $middle_content .
     "</div>" .
     "</div>" .
     "</article>";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_column1_content()
    {
     return "";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_column2_content()
    {
     return "";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_column3_content()
    {
     return "";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_left_navigation_content()
    {
     $level_to_explore = 0;
     if(isset($_GET["nav"]) && is_numeric($_GET["nav"]))
     { $level_to_explore = htmlspecialchars( $_GET["nav"] ); }
     $navigation_content = "";
     
     $navigation_list =
     $this->watch_entity->get_left_navigation_list();
     $count = $navigation_list->get_item_count();
     
     if ($count > 0)
     {
     $navigation_content = "" .
     "<div class=\"nav-wrapper\">" .
     "<nav class=\"ym-vlist\">" .
     "<h6 class=\"ym-vtitle\">" .
     $this->language_array["private_navigation"]. "</h6>" .
     "<ul>";
     for ($i = 0; $i < $count; $i++)
     {
     if( $level_to_explore == $i )
     { $explore = TRUE; }
     else
     { $explore = FALSE; }
     
     $item = $navigation_list->get_item( $i );
     $navigation_content = $navigation_content .
     $this->get_vertical_1_navigation_level_1_link( $item, $explore );
     }
     $navigation_content = $navigation_content .
     "</ul>" .
     "</nav>" .
     "</div>";
     }
     return $navigation_content;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_right_navigation_content()
    {
     $navigation_list =
     $this->watched_entity->get_right_navigation_list();
     
     $navigation_content = "";
     if (isset($_SESSION['watched_id']))
     {
     $count = $navigation_list->get_item_count();
     if ($count > 0)
     {
     $navigation_content = "" .
     "<div class=\"nav-wrapper\">" .
     "<nav class=\"ym-vlist\">" .
     "<h6 class=\"ym-vtitle\">" .
     $this->language_array["connection"] .
     "</h6>" . "<ul>";
     
     for ($i = 0; $i < $count; $i++)
     {
     $item = $navigation_list->get_item( $i );
     $element_count = $item->get_navigation_list()->get_item_count();
     
     if ( $element_count > 0 )
     {
     $navigation_content = $navigation_content .
     "<li><span>" . $item->get_item_id() .
     " " . $this->language_array[$item->get_text()] .
     "</span></li>";
     for ($n = 0; $n < $element_count; $n++)
     {
     $element = $item->get_navigation_list()->get_item( $n );
     if ( $element->get_plain_text() == "X" )
     { $text = $this->language_array[$element->get_text()] . " ... "; }
     else
     { $text = $element->get_text(); }
     
     $navigation_content = $navigation_content .
     "<li>" .
     "<a href=\"" .
     $element->get_link() .
     "?function=" . $element->get_id() .
     "&id=" . $element->get_id() .
     "&entity_name=" . $this->watched_entity->get_entity_name() .
     "&entity_id=" . $this->watched_entity->get_id() .
     "\">" .
     $text .
     "</a>" .
     "</li>";
     }
     }
     }
     $navigation_content = $navigation_content .
     "</ul>" .
     "</nav>" .
     "</div>";
     }
     }
     return $navigation_content;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_html_footer()
    {
     require_once('class.simple_html_footer.php');
     
     $footer = new simple_html_footer();
     return $footer->get_representation();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_footer()
    {
     return
     "<footer role=\"contentinfo\">" .
     "<div class=\"ym-wrapper\">" .
     "<div class=\"ym-wbox\">" .
     "<div class=\"ym-grid linearize-level-2\">" .
     "<div class=\"ym-g25 ym-gl\">" .
     "<div class=\"ym-gbox-left\">" .
     $this->get_left_footer_content() .
     "</div>" .
     "</div>" .
     "<div class=\"ym-g25 ym-gl\">" .
     "<div class=\"ym-gbox-left\">" .
     $this->get_middle_footer1_content() .
     "</div>" .
     "</div>" .
     "<div class=\"ym-g25 ym-gl\">" .
     "<div class=\"ym-gbox-left\">" .
     $this->get_middle_footer2_content() .
     "</div>" .
     "</div>" .
     "<div class=\"ym-g25 ym-gr\">" .
     "<div class=\"ym-gbox-right\">" .
     $this->get_right_footer_content() .
     "</div>".
     "</div>" .
     "</div>" .
     "</div>" .
     "</div>" .
     "</footer>";
     return $footer_string;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  item
     * @param  explore
     */
    public function get_vertical_1_navigation_level_1_link($item, $explore)
    {
     $link = "";
     $second_level_count = $item->get_navigation_list()->get_item_count();
     
     if ( $explore AND $second_level_count > 0 )
     {
     $link = "" .
     "<li><span>" .
     "<img src=\"". $_SESSION['icons'] .
     $item->get_icon_name() . "\" " . "/>" .
     $this->language_array[$item->get_text()] .
     "</span>".
     $this->get_vertical_1_navigation_level_2_list( $item ) .
     "</li>" ;
     }
     else
     {
     if ($item->get_id() == 999)
     {
     $link = "" .
     "<li><span>" .
     " " . $item->get_text() .
     "</span></li>";
     }
     else
     {
     if (( $item->get_icon_name() == "erase.png" ) OR
     ( $item->get_icon_name() == "connection.png" ) OR
     ( $item->get_icon_name() == "tup.png" ) OR
     ( $item->get_icon_name() == "tdown.png" ))
     { $link = $this->get_delete_level_1_link( $item ); }
     else
     { $link = $this->get_level_1_link( $item ); }
     }}
     return $link;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  item
     */
    public function get_level_1_link($item)
    {
     return
     "<li><a href=\"" .
     $_SESSION[$item->get_link() . '_control_base'] .
     $item->get_link() .
     "_post_frame.php" .
     "?function=" . $item->get_id() .
     "\">" .
     "<img src=\"". $_SESSION['icons'] .
     $item->get_icon_name() . "\" " . "/>" .
     $this->language_array[$item->get_text()] .
     "</a></li>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  item
     */
    public function get_delete_level_1_link($item)
    {
     return
     "<li><a href=" .
     $_SESSION[$item->get_link() . '_control_base'] .
     $item->get_link() .
     "_post_frame.php" .
     "?function=" . $item->get_id() .
     " onclick=\"return confirm('" . $this->language_array['C3_ask'] .
     $this->language_array[$item->get_text()] . "?" . "')\"" .
     ">" .
     "<img src=\"". $_SESSION['icons'] .
     $item->get_icon_name() . "\" " . "/>" .
     $this->language_array[$item->get_text()] .
     "</a></li>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  item
     */
    public function get_vertical_1_navigation_level_2_list($item)
    {
     $navigation_content = "";
     $navigation_list = $item->get_navigation_list();
     $count = $navigation_list->get_item_count();
     
     if ($count > 0)
     {
     $navigation_content = "<ul>";
     for ($i = 0; $i < $count; $i++)
     {
     $item = $navigation_list->get_item( $i );
     if( $item->get_validate_visibility( $this->watched_entity ) )
     {
     $navigation_content = $navigation_content .
     $this->get_vertical_1_navigation_level_2_link( $item );
     }
     }
     $navigation_content = $navigation_content .
     "</ul>";
     }
     return $navigation_content;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  item
     */
    public function get_vertical_1_navigation_level_2_link($item)
    {
     $link = "" .
     "<li><a href=\"" .
     $_SESSION[$item->get_link() . '_control_base'] .
     $item->get_link() .
     "_post_frame.php" .
     "?function=" . $item->get_id() .
     "&item_id=" . $item->get_item_id() .
     "\">" .
     $this->language_array[$item->get_text()] .
     $item->get_plain_text() .
     "</a></li>";
     return $link;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_error_no_access_info()
    {
     $no_connection =  "" .
     "<p class=\"box error\">" .
     "<img src=\"". $_SESSION['icons'] .
     "error.png\" " . "/>" .
     $this->language_array['no_connection'] .
     "</p>";
     return $no_connection;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  send
     * @param  reset
     */
    public function get_send_reset_button($send, $reset)
    {
     return "" .
     "<div class=\"ym-fbox-button\">" .
     "<input type=\"submit\" value=\"" .
     $send .
     "\"  class=\"save\" id=\"submit\" name=\"submit\" />" .
     "<input type=\"reset\" value=\"" .
     $reset .
     "\" class=\"delete\" id=\"reset\" name=\"reset\" />" .
     "</div>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_follower_invitation_info()
    {
     return "";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_team_invitation_info()
    {
     return "";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_event_invitation_info()
    {
     return "";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_left_footer_content()
    {
     $domain = "<p>&#169 3appy UG (haftungsbeschr&auml;nkt)</p>";
     $lang = $this->language_array;
          
     return
     $domain .
     "<p>" . $this->get_link_A( (int)13, $lang['header_nav_13'] ) . "</p>" .
     "<p>" . $this->get_link_A( (int)4, $lang['header_nav_4'] ) . "</p>" .
     "<p>" . $this->get_link_A( (int)20, $lang['header_nav_20'] ) . "</p>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_middle_footer1_content()
    {
     $lang = $this->language_array;
     return
     "<p>" . $this->get_link_A( (int)7, $lang['header_nav_7'] ) . "</p>" .
     "<p>" . $this->get_link_A( (int)5, $lang['header_nav_5'] ) . "</p>" .
     "<p>" . $this->get_link_A( (int)6, $lang['header_nav_6'] ) . "</p>" .
     "<p>" . $this->get_link_A( (int)12, $lang['header_nav_12'] ) . "</p>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_middle_footer2_content()
    {
     $lang = $this->language_array;
     return
     "<p>" . $this->get_link_A( (int)14, $lang['header_nav_14'] ) . "</p>" .
     "<p>" . $this->get_link_A( (int)15, $lang['header_nav_15'] ) . "</p>" .
     "<p>" . $this->get_link_A( (int)0, $lang['header_nav_0'] ) . "</p>" .
     "<p>" . $this->get_link_A( (int)10, $lang['header_nav_10'] ) . "</p>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  frame_id
     * @param  text
     */
    public function get_link_A($frame_id, $text)
    {
     return
     "<a href=\"" . $_SESSION['A_control_base'] .
     "A_post_frame.php?function=" . $frame_id . "\"" .
     "style=\"color: #fff;\"" .
     ">" . $text . "</a> ";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  frame_id
     * @param  text
     */
    public function get_blue_link_A($frame_id, $text)
    {
     return
     "<a href=\"" . $_SESSION['A_control_base'] .
     "A_post_frame.php?function=" . $frame_id . "\"" .
     ">" . $text . "</a> ";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_right_footer_content()
    {
     $lang = $this->language_array;
     return
     "<p>" . $this->get_link_A( (int)21, $lang['header_nav_21'] ) . "</p>" .
     "<p>" . $this->get_link_A( (int)11, $lang['header_nav_11'] ) . "</p>" .
     "<p>" . $this->get_link_A( (int)19, $lang['header_nav_19'] ) . "</p>" .
     "<p>Layout based on <a href=\"http://www.yaml.de\">YAML</a></p>";
    }
}?>