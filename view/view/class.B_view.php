<?php

error_reporting(E_ALL);

/**
 * The B - view is the basis of all views where the watched entity is of an
 * of a member:
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
// section -64--88--78-21--18666ff4:13cb5da5f64:-8000:0000000000004416-includes begin
// section -64--88--78-21--18666ff4:13cb5da5f64:-8000:0000000000004416-includes end

/* user defined constants */
// section -64--88--78-21--18666ff4:13cb5da5f64:-8000:0000000000004416-constants begin
// section -64--88--78-21--18666ff4:13cb5da5f64:-8000:0000000000004416-constants end

/**
 * The B - view is the basis of all views where the watched entity is of an
 * of a member:
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class B_view
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
     require_once('../../../data/class.member.php');
     
     parent::__construct( new member() );
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
     return
     $this->watched_entity->get_forename() . " " .
     $this->watched_entity->get_name() . " " .
     $this->watched_entity->get_status_button();
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
     if ( $this->watch_entity->is_online() )
     {
     $login_logout = $this->get_link_A( (int)9, $lang['header_nav_9'] );
     
     $contact = "<a href=\"" . $_SESSION['B_frame_base'] .
     "B25_frame.php" .

//     $contact = "<a href=\"" . $_SESSION['basic_control_base'] .
//     "service_frame.php" .

     "?ni:be!:lu:jo!mem=" . $_SESSION['watched_id'] . "\"" .
     "style=\"color: #fff;\"" .
     ">" . $this->language_array['header_nav_25'] . "</a> ";
     
     $language = "<a href=\"" . $_SESSION['B_frame_base'] .
     "B24_frame.php" .
     "?ni:be!:lu:jo!mem=" . $_SESSION['watched_id'] . "\"" .
     "style=\"color: #fff;\"" .
     ">" . $this->language_array['header_nav_24'] . "</a> ";
     }
     else
     {
     $login_logout = $this->get_link_A( (int)1, $lang['header_nav_1'] );
     $contact = $this->get_link_A( (int)25, $lang['header_nav_25'] );
     $language = $this->get_link_A( (int)24, $lang['header_nav_24'] );
     }
     return $login_logout . " | " . $contact . " | " . $language;
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
     " " . $this->watched_entity->get_forename() .
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
     $_SESSION['B_control_base'] . "B26_pre_frame.php\" method=\"post\">" .
     "<input class=\"ym-searchfield\" type=\"search\" name=\"search\" />" .
     "<img src=\"". $_SESSION['icons'] .  "find.png\" " . "/>" .
     "<input class=\"ym-searchbutton\" type=\"submit\" value=" .
     $this->language_array['navigation_search'] . ">" .
     "</form>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_follower_invitation_info()
    {
     $follower_invitation_info =  "";
     if ( $this->watch_relation == (int)1 )
     {
     $member = $this->watched_entity;
     $n = $member->get_first_unaccepted_follower_id();
     if ( $n > (int)0 )
     {
     $follower_invitation_info .=
     "<p class=\"box warning\">" .
     "<img src=\"". $_SESSION['icons'] .
     "warning.png\" " . "/>" . $this->language_array['follower_info_1'] .
     "<a href=\"" . $_SESSION['B_control_base'] . "B0_pre_frame.php" .
     "?id=" . $n . "\">" . " " . $this->language_array['follower_info_2'] .
     "</a>" .
     "</p>";
     }
     }
     return $follower_invitation_info;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_team_invitation_info()
    {
     $member = $this->watch_entity;
     $n = $member->get_first_unaccepted_team_id();
     
     $team_invitation_info =  "";
     if ( $n > (int)0 )
     {
     $team_invitation_info .=
     "<p class=\"box warning\">" .
     "<img src=\"". $_SESSION['icons'] .
     "warning.png\" " . "/>" . $this->language_array['team_info_1'] .
     "<a href=\"" . $_SESSION['C_control_base'] . "C0_pre_frame.php" .
     "?id=" . $n . "\">" . " " . $this->language_array['team_info_2'] .
     "</a>" .
     "</p>";
     }
     return $team_invitation_info;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_event_invitation_info()
    {
     $member = $this->watch_entity;
     $n = $member->get_first_unaccepted_event_id();
     
     $event_invitation_info =  "";
     if ( $n > (int)0 )
     {
     $event_invitation_info .=
     "<p class=\"box warning\">" .
     "<img src=\"". $_SESSION['icons'] .
     "warning.png\" " . "/>" . $this->language_array['event_info_1'] .
     "<a href=\"" . $_SESSION['D_control_base'] . "D0_pre_frame.php" .
     "?id=" . $n . "\">" . " " . $this->language_array['event_info_2'] .
     "</a>" .
     "</p>";
     }
     return $event_invitation_info;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_unaccepted_teams_count()
    {
     $team_list = new team_list();
     $team_list->set_owner_id( $this->get_id() );
     return $team_list->get_unaccepted_teams_count();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_unaccepted_events_count()
    {
     $event_list = new event_list();
     $event_list->set_owner_id( $this->get_id() );
     return $event_list->get_unaccepted_events_count();
    }
}?>