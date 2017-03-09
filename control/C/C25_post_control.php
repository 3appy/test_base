<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.C25_post_control.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 05.03.2017, 07:58:19 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * require_once('../basic/class.basic_control.php');
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.csv_post_control.php');

/* user defined includes */
// section 10-5-23--98-4dba974f:15a37bdd319:-8000:0000000000005C76-includes begin
// section 10-5-23--98-4dba974f:15a37bdd319:-8000:0000000000005C76-includes end

/* user defined constants */
// section 10-5-23--98-4dba974f:15a37bdd319:-8000:0000000000005C76-constants begin
// section 10-5-23--98-4dba974f:15a37bdd319:-8000:0000000000005C76-constants end

/**
 * Short description of class C25_post_control
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class C25_post_control
    extends csv_post_control
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function is_entered_completed()
    {
     $this->set_top_team();
     $this->set_string_today();
     return TRUE;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function perform()
    {
     if(isset($_GET["cvs"]) && is_numeric($_GET["cvs"]))
     { $cvs = htmlspecialchars( $_GET["cvs"] ); }
     else
     { $cvs = (int)0; }
     
     switch( $cvs )
     {
     case ( 0 ):
     // standard selection
     ; // do nothing
     break;
     case ( 1 ):
     // export school structure
     $this->export_school_structure();
     break;
     case ( 2 ):
     // export room
     $this->export_room();
     break;
     case ( 3 ):
     // export timetable
     $this->export_timetable();
     break;
     case ( 4 ):
     // export member
     $this->export_member();
     break;
     case ( 5 ):
     // export Administratoren team connection
     $this->export_administrator_con();
     break;
     case ( 6 ):
     // export member team connection
     $this->export_member_con();
     break;
     case ( 7 ):
     // export member - member connections
     $this->export_member_member_con();
     break;
     default:
     ; // do nothing
     break;
     }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function export_school_structure()
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.csv_list.php');
     
     $file_name = "schoolstructure_" . $this->get_string_today();
     $team_list = $this->get_top_team()->get_recursive_subteam_list();
     
     $scv_table = new csv_list();
     for ( $n=0; $n<$team_list->get_item_count(); $n++ )
     {
     $team = $team_list->get_item( $n );
     $csv_list = new csv_list();
     
     $csv_list->add_item( utf8_decode( $team->get_upteam()->get_name() ) );
     $csv_list->add_item( utf8_decode( $team->get_name() ) );
     $csv_list->add_item( $team->get_type() );
     
     $scv_table->add_item( $csv_list );
     }
     $this->write_csv_file( $file_name, $scv_table );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function export_room()
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.csv_list.php');
     
     $file_name = "room_" . $this->get_string_today();
     $room_list = $this->get_top_team()->get_school_room_list();
     
     $scv_table = new csv_list();
     for ( $n=0; $n<$room_list->get_item_count(); $n++ )
     {
     $room = $room_list->get_item( $n );
     
     $csv_list = new csv_list();
     $csv_list->add_item( utf8_decode( $room->get_abbreviation() ) );
     $csv_list->add_item( utf8_decode( $room->get_description() ) );
     
     $scv_table->add_item( $csv_list );
     }
     $this->write_csv_file( $file_name, $scv_table );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function export_timetable()
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.csv_list.php');
     require_once(__ROOT_DATA__.'class.team_list.php');
     
     $file_name = "timetable_" . $this->get_string_today();
     $team_list = $this->get_top_team()->get_recursive_subteam_list();
     
     $scv_table = new csv_list();
     
     for ( $n=0; $n<$team_list->get_item_count(); $n++ )
     {
     $team = $team_list->get_item( $n );
     
     if( $team->is_educational_type() )
     {
     $table_control_list = $team->get_control_table_item_list();
     if( $table_control_list->get_item_count() == (int)0 )
     {
     $csv_list = new csv_list();
     $csv_list->add_item( utf8_decode( $team->get_upteam()->get_name() ) );
     $csv_list->add_item( utf8_decode( $team->get_name() ) );
     $csv_list->add_item( "no item" );
     $csv_list->add_item( "no item" );
     $csv_list->add_item( "no item" );
     $csv_list->add_item( "no item" );
     $csv_list->add_item( "no item" );
     $csv_list->add_item( "no item" );
     $csv_list->add_item( "no item" );
     $scv_table->add_item( $csv_list );
     }
     else
     {
     for ( $i=0; $i<$table_control_list->get_item_count(); $i++ )
     {
     $table_control_item = $table_control_list->get_item( $i );
     $csv_list = new csv_list();
     
     $csv_list->add_item( utf8_decode( $team->get_upteam()->get_name() ) );
     $csv_list->add_item( utf8_decode( $team->get_name() ) );
     
     $room = $table_control_item->get_room();
     if( $room == NULL )
     { $csv_list->add_item( "no item" ); }
     else
     { $csv_list->add_item( utf8_decode( $room->get_abbreviation() ) ); }
     
     $csv_list->add_item( $table_control_item->get_start_week() );
     $csv_list->add_item( $table_control_item->get_start_year() );
     $csv_list->add_item( $table_control_item->get_end_week() );
     $csv_list->add_item( $table_control_item->get_end_year() );
     $csv_list->add_item( $table_control_item->get_day_number() );
     $csv_list->add_item( $table_control_item->get_time_number() );
     $scv_table->add_item( $csv_list );
     }
     }
     }
     }
     $this->write_csv_file( $file_name, $scv_table );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function export_member()
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.csv_list.php');
     
     $file_name = "member_" . $this->get_string_today();
     $member_list = $this->get_top_team()->get_all_member_list();
     
     $scv_table = new csv_list();
     for ( $n=0; $n<$member_list->get_item_count(); $n++ )
     {
     $member = $member_list->get_item( $n );
     $csv_list = new csv_list();
     
     $csv_list->add_item( utf8_decode( $member->get_forename() ) );
     $csv_list->add_item( utf8_decode( $member->get_name() ) );
     $csv_list->add_item( utf8_decode( $member->get_mail_address() ) );
     $csv_list->add_item( "***" );
     
     $scv_table->add_item( $csv_list );
     }
     $this->write_csv_file( $file_name, $scv_table );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function export_administrator_con()
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.csv_list.php');
     require_once(__ROOT_DATA__.'class.team_list.php');
     
     $file_name = "adm_team_con_" . $this->get_string_today();
     $team_list = new team_list();
     $team_list->add_item( $this->get_top_team() );
     
     $sub_team_list = $this->get_top_team()->get_recursive_subteam_list();
     $team_list->add_list( $sub_team_list, (int)0 );
     
     $scv_table = new csv_list();
     for ( $n=0; $n<$team_list->get_item_count(); $n++ )
     {
     $team = $team_list->get_item( $n );
     $admin_list = $team->get_admin_member_list();
     
     if( $admin_list->get_item_count() == (int)0 )
     {
     $csv_list = new csv_list();
     
     $csv_list->add_item( utf8_decode( $team->get_upteam()->get_name() ) );
     $csv_list->add_item( utf8_decode( $team->get_name() ) );
     $csv_list->add_item( "no admin!" );
     
     $scv_table->add_item( $csv_list );
     }
     else
     {
     for ( $i=0; $i<$admin_list->get_item_count(); $i++ )
     {
     $admin = $admin_list->get_item( $i );
     $csv_list = new csv_list();
     
     $csv_list->add_item( utf8_decode( $team->get_upteam()->get_name() ) );
     $csv_list->add_item( utf8_decode( $team->get_name() ) );
     $csv_list->add_item( utf8_decode( $admin->get_mail_address() ) );
     
     $scv_table->add_item( $csv_list );
     }
     }
     }
     $this->write_csv_file( $file_name, $scv_table );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function export_member_con()
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.csv_list.php');
     require_once(__ROOT_DATA__.'class.team_list.php');
     
     $file_name = "member_team_con_" . $this->get_string_today();
     $team_list = new team_list();
     $team_list->add_item( $this->get_top_team() );
     
     $sub_team_list = $this->get_top_team()->get_recursive_subteam_list();
     $team_list->add_list( $sub_team_list, (int)0 );
     
     $scv_table = new csv_list();
     for ( $n=0; $n<$team_list->get_item_count(); $n++ )
     {
     $team = $team_list->get_item( $n );
     $member_list = $team->get_approved_member_list();
     
     if( $member_list->get_item_count() == (int)0 )
     {
     $csv_list = new csv_list();
     
     $csv_list->add_item( utf8_decode( $team->get_upteam()->get_name() ) );
     $csv_list->add_item( utf8_decode( $team->get_name() ) );
     $csv_list->add_item( "no member!" );
     
     $scv_table->add_item( $csv_list );
     }
     else
     {
     for ( $i=0; $i<$member_list->get_item_count(); $i++ )
     {
     $member = $member_list->get_item( $i );
     $csv_list = new csv_list();
     
     $csv_list->add_item( utf8_decode( $team->get_upteam()->get_name() ) );
     $csv_list->add_item( utf8_decode( $team->get_name() ) );
     $csv_list->add_item( utf8_decode( $member->get_mail_address() ) ) ;
     
     $scv_table->add_item( $csv_list );
     }
     }
     }
     $this->write_csv_file( $file_name, $scv_table );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function export_member_member_con()
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.csv_list.php');
     
     $file_name = "member_member_con_" . $this->get_string_today();
     $top_team = $this->get_top_team();
     $pupil_list = $top_team->get_approved_recursive_pupil_list();
     
     $scv_table = new csv_list();
     for ( $n=0; $n<$pupil_list->get_item_count(); $n++ )
     {
     $pupil = $pupil_list->get_item( $n );
     $follower_list = $pupil->get_follower_member_list();
     
     if( $follower_list->get_item_count() == (int)0 )
     {
     $csv_list = new csv_list();
     
     $csv_list->add_item( "no follower" );
     $csv_list->add_item( utf8_decode( $pupil->get_mail_address() ) );
     
     $scv_table->add_item( $csv_list );
     }
     else
     {
     for ( $i=0; $i<$follower_list->get_item_count(); $i++ )
     {
     $follower = $follower_list->get_item( $i );
     $csv_list = new csv_list();
     
     $csv_list->add_item( utf8_decode( $follower->get_mail_address() ) );
     $csv_list->add_item( utf8_decode( $pupil->get_mail_address() ) );
     
     $scv_table->add_item( $csv_list );
     }
     }
     }
     $this->write_csv_file( $file_name, $scv_table );
    }
}?>