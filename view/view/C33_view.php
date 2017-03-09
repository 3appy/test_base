<?php

error_reporting(E_ALL);

/**
 * //33 register event
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
// section 10-30-8-63-32a249a2:13da0d9bd01:-8000:0000000000000F4E-includes begin
// section 10-30-8-63-32a249a2:13da0d9bd01:-8000:0000000000000F4E-includes end

/* user defined constants */
// section 10-30-8-63-32a249a2:13da0d9bd01:-8000:0000000000000F4E-constants begin
// section 10-30-8-63-32a249a2:13da0d9bd01:-8000:0000000000000F4E-constants end

/**
 * //33 register event
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class C33_view
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
     $this->load_language("c33");
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_column3_content()
    {
     $column3_content =  "";
     if(isset($_GET["event_type"]) && is_numeric($_GET["event_type"]))
     { $event_type = htmlspecialchars( $_GET["event_type"] ); }
     else
     { $event_type = (int)0; }
     
     switch( $event_type )
     {
     case ( 0 ):
     // standard selection
     $column3_content .= $this->get_event_type_selection();
     break;
     case ( 1 ):
     // information event
     $column3_content .= $this->get_information_event();
     break;
     case ( 2 ):
     // invitation event
     $column3_content .= $this->get_invitation_event();
     break;
     case ( 3 ):
     // interview event
     $column3_content .= $this->get_interview_event();
     break;
     default:
     $column3_content .= $this->get_event_type_selection();
     break;
     }
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_event_type_selection()
    {
     if( defined('__VIEW_CONTROL__') == FALSE )
     { define('__VIEW_CONTROL__', $this->get_root_view_control() ); }
     require_once(__VIEW_CONTROL__.'class.link_button.php');
     
     $language_array = $this->get_language_array();
     
     $header_file_0 = "<p>" . $language_array['C3_0_1'] . "</p>";
     
     // ---------------- information event -------------------
     
     $header_file_1 = "<p>" . $language_array['C3_1_1'] . "</p>";
     $link_1 = new link_button();
     $link_1->set_name($language_array['C3_1_0']);
     $link_1->set_link($_SESSION['C_control_base'] .
     "C33_pre_frame.php?event_type=" . (int)1 );
     
     // ---------------- invitation event -------------------
     
     $header_file_2 = "<p>" . $language_array['C3_2_1'] . "</p>";
     $link_2 = new link_button();
     $link_2->set_name($language_array['C3_2_0']);
     $link_2->set_link($_SESSION['C_control_base'] .
     "C33_pre_frame.php?event_type=" . (int)2 );
     
     // ---------------- interview event -------------------
     
     $header_file_3 = "<p>" . $language_array['C3_3_1'] . "</p>";
     $link_3 = new link_button();
     $link_3->set_name($language_array['C3_3_0']);
     $link_3->set_link($_SESSION['C_control_base'] .
     "C33_pre_frame.php?event_type=" . (int)3 );
     
     return
     "<h6>" . $language_array['C3_form_header'] . "</h6>" .
     "<section class=\"box info\">" .
     $header_file_0 .
     "</section>" .
     "<section class=\"box info\">" .
     $link_1->get_button() . $header_file_1 .
     "</section>" .
     "<section class=\"box info\">" .
     $link_2->get_button() . $header_file_2 .
     "</section>" .
     "<section class=\"box info\">" .
     $link_3->get_button() . $header_file_3 .
     "</section>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_information_event()
    {
     if( defined('__VIEW_FORM__') == FALSE )
     { define('__VIEW_FORM__', $this->get_root_view_form() ); }
     require_once(__VIEW_FORM__.
     'class.information_event_registration_form.php');
     
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.team.php');
     
     $team = new team();
     $team->set_id( $_SESSION['watched_id'] );
     $team->load();
     $receiver_list = $team->get_all_member_list();
     
     $language_array = $this->get_language_array();
     $action = $_SESSION['C_control_base'] . "C33_1_post_frame.php";
     $event_registration_form = 
     new information_event_registration_form($action);
     $event_registration_form->
     set_amount( $receiver_list->get_item_count() );
     
     $event_registration_form->set_language($language_array);
     $event_registration_form->
     set_header( $language_array['C3_form_header'] );
     return $event_registration_form->get_form();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_invitation_event()
    {
     if( defined('__VIEW_FORM__') == FALSE )
     { define('__VIEW_FORM__', $this->get_root_view_form() ); }
     require_once(__VIEW_FORM__.
     'class.invitation_event_registration_form.php');
     
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.team.php');
     
     $team = new team();
     $team->set_id( $_SESSION['watched_id'] );
     $team->load();
     $receiver_list = $team->get_all_member_list();
     
     $language_array = $this->get_language_array();
     $action = $_SESSION['C_control_base'] . "C33_2_post_frame.php";
     $event_registration_form = 
     new invitation_event_registration_form($action);
     
     $event_registration_form->
     set_amount( $receiver_list->get_item_count() );
     $event_registration_form->set_language($language_array);
     $event_registration_form->
     set_header( $language_array['C3_form_header'] );
     return $event_registration_form->get_form();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_interview_event()
    {
     if( defined('__VIEW_FORM__') == FALSE )
     { define('__VIEW_FORM__', $this->get_root_view_form() ); }
     require_once(__VIEW_FORM__.
     'class.interview_event_registration_form.php');
     
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.team.php');
     
     $team = new team();
     $team->set_id( $_SESSION['watched_id'] );
     $team->load();
     $interview_count = $team->get_interview_member_list_count();
     
     $language_array = $this->get_language_array();
     $action = $_SESSION['C_control_base'] . "C33_3_post_frame.php";
     $event_registration_form = 
     new interview_event_registration_form($action);
     
     $event_registration_form->set_amount( $interview_count );
     $event_registration_form->set_language($language_array);
     $event_registration_form->
     set_header( $language_array['C3_form_header'] );
     return $event_registration_form->get_form();
    }
}?>