<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.C27_3_post_control.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 03.03.2017, 10:35:05 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include C27_post_control
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('C27_post_control.php');

/* user defined includes */
// section 10-5-29-6-db38f61:15732b60707:-8000:00000000000042C5-includes begin
// section 10-5-29-6-db38f61:15732b60707:-8000:00000000000042C5-includes end

/* user defined constants */
// section 10-5-29-6-db38f61:15732b60707:-8000:00000000000042C5-constants begin
// section 10-5-29-6-db38f61:15732b60707:-8000:00000000000042C5-constants end

/**
 * Short description of class C27_3_post_control
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class C27_3_post_control
    extends C27_post_control
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_requested_width()
    {
     return (int)9;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_modified_file_name()
    {
     return
     "import_timetable_" .
     $this->get_string_today();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_log_file_name()
    {
     return
     "log_timetable_" .
     $this->get_string_today();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  csv_line
     */
    public function handle_csv_line($csv_line)
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.team_list_csv.php');
     require_once(__ROOT_DATA__.'class.control_time_table_item.php');
     require_once(__ROOT_DATA__.'class.room.php');
     
     $network_id = $this->get_top_team()->get_network_id();
     $success = FALSE;
     
     $up_team_name = $csv_line->get_item( (int)0 );
     $sub_team_name = $csv_line->get_item( (int)1 );
     $room_abbreviation = $csv_line->get_item( (int)2 );
     $start_week = $csv_line->get_item( (int)3 );
     $start_year = $csv_line->get_item( (int)4 );
     $end_week = $csv_line->get_item( (int)5 );
     $end_year = $csv_line->get_item( (int)6 );
     $day = $csv_line->get_item( (int)7 );
     $time = $csv_line->get_item( (int)8 );
     
     $team_list = new team_list_csv();
     $team_list->set_owner_id( $network_id );
     $team_list->set_team_name( $up_team_name );
     $up_team = $team_list->get_team();
     
     if ( $up_team != NULL )
     {
     $sub_team = $team_list->get_sub_team($sub_team_name);
     if ( $sub_team != NULL )
     {
     $team_id = $sub_team->get_id();
     
     $room = new room();
     $room->set_network_id( $network_id );
     $class_room = $room->get_room( $room_abbreviation );
     if( $class_room != NULL )
     { $class_room_id = $class_room->get_id(); }
     else
     { $class_room_id = (int)0; }
     
     if( !( $this->exist_control_item( $team_id, $day, $time ) ) )
     {
     $control_item = new control_time_table_item();
     $control_item->set_team_id( $team_id );
     $control_item->set_room_id( $class_room_id );
     $control_item->set_start_week( $start_week );
     $control_item->set_start_year( $start_year );
     $control_item->set_end_week( $end_week );
     $control_item->set_end_year( $end_year );
     $control_item->set_day_number( $day );
     $control_item->set_time_number( $time );
     $control_item->set_generated( (int)0 );
     $control_item->insert();
     $success = TRUE;
     }
     }
     else
     { $this->control_warning->csv_not_clear(); }
     }
     else
     { $this->control_warning->csv_not_clear(); }
     return $success;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  team_id
     * @param  day
     * @param  time
     */
    public function exist_control_item($team_id, $day, $time)
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.control_time_table_item_list.php');
     
     $exist = FALSE;
     
     $control_list = new control_time_table_item_list();
     $control_list->set_owner_id( $team_id );
     $control_list->load();
     for( $n = 0; $n < $control_list->get_item_count(); $n++ )
     {
     $control_item = $control_list->get_item( $n );
     if( ( $control_item->get_day_number() == $day ) AND
     ( $control_item->get_time_number() == $time ) )
     { $exist = TRUE; }
     }
     return $exist;
    }
}?>