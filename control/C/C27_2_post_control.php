<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.C27_2_post_control.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 02.03.2017, 15:12:10 with ArgoUML PHP module 
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
// section 10-30--8--14-348ebe49:158441fe3ac:-8000:0000000000003A8D-includes begin
// section 10-30--8--14-348ebe49:158441fe3ac:-8000:0000000000003A8D-includes end

/* user defined constants */
// section 10-30--8--14-348ebe49:158441fe3ac:-8000:0000000000003A8D-constants begin
// section 10-30--8--14-348ebe49:158441fe3ac:-8000:0000000000003A8D-constants end

/**
 * Short description of class C27_2_post_control
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class C27_2_post_control
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
     return (int)2;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_modified_file_name()
    {
     return
     "import_room_" .
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
     "log_room_" .
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
     require_once(__ROOT_DATA__.'class.room.php');
     
     $network_id = $this->get_top_team()->get_network_id();
     $abbreviation = $csv_line->get_item( (int)0 );
     $description = $csv_line->get_item( (int)1 );
     $success = FALSE;
     
     if( !$this->exist_room( $abbreviation ) )
     {
     $room = new room();
     $room->set_network_id( $network_id );
     $room->set_abbreviation( $csv_line->get_item( (int)0 ) );
     $room->set_description( $csv_line->get_item( (int)1 ) );
     $room->insert();
     $success = TRUE;
     }
     return $success;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  abbreviation
     */
    public function exist_room($abbreviation)
    {
     $exist = FALSE;
     // exist this new room
     $room_list = $this->get_top_team()->get_school_room_list();
     $count = $room_list->get_item_count();
     for ( $n=0; (($n<$count) AND ($exist == FALSE)); $n++ )
     {
     $room = $room_list->get_item( $n );
     if( $room->get_abbreviation() == $abbreviation )
     { $exist = TRUE; }
     }
     return $exist;
    }
}?>