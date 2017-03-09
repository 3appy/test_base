<?php

error_reporting(E_ALL);

/**
 * The C - view is the basis of all views where the watched entity is of an
 * of a team:
 *
 * @author Bernd Schröder
 * @version 1.0
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include Yaml_framework
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Yaml_framework.php');

/* user defined includes */
// section -64--88--78-21-438a7c36:13cbb0d4b36:-8000:0000000000000B0B-includes begin
// section -64--88--78-21-438a7c36:13cbb0d4b36:-8000:0000000000000B0B-includes end

/* user defined constants */
// section -64--88--78-21-438a7c36:13cbb0d4b36:-8000:0000000000000B0B-constants begin
// section -64--88--78-21-438a7c36:13cbb0d4b36:-8000:0000000000000B0B-constants end

/**
 * The C - view is the basis of all views where the watched entity is of an
 * of a team:
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class C_view
    extends Yaml_framework
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
     require_once('../../../data/class.team.php');
     
     parent::__construct( new team() );
     $this->watch_relation =
     $this->watched_entity->perform_relation( $this->get_watch_entity());
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_left_header_content()
    {
     return $this->watched_entity->get_name();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
     /*NEW*/
    public function get_right_header_content()
    {
     $lang = $this->language_array;
     return
     $this->get_link_A( (int)9, $lang['header_nav_9'] );
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_watched_entity_avatar()
    {
     return  
     $this->watched_entity->get_avatar_thumb() .
     "<br /><br />";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_relation_info()
    {
     $relation_info =  "" .
     "<p class=\"box info\">" .
     "<img src=\"". $_SESSION['icons'] .
     "info.png\" " . "/>" .
     $this->language_array['relation' . $this->watch_relation . "_1"] .
     " " . $this->watched_entity->get_name() . " " .
     $this->language_array['relation' . $this->watch_relation . "_2"] .
     "</p>";
     return $relation_info;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
     /*NEW*/
    public function get_top_search()
    {
     return "" .
     "<form class=\"ym-searchform\" action=\"" .
     $_SESSION['C_control_base'] . "C26_pre_frame.php\" method=\"post\">" .
     "<input class=\"ym-searchfield\" type=\"search\" name=\"search\" />" .
     "<img src=\"". $_SESSION['icons'] .  "find.png\" " . "/>" .
     "<input class=\"ym-searchbutton\" type=\"submit\" value=" .
     $this->language_array['navigation_search'] . ">" .
     "</form>";
    }
}?>