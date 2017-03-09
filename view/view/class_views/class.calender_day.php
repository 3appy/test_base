<?php

error_reporting(E_ALL);

/**
 * //require_once('../../../data/class.time_table_item_list.php');
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include calender_time_element
 *
 * @author Bernd Schröder
 * @version 1.0
 */
require_once('class.calender_time_element.php');

/**
 * include table_element_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.table_element_list.php');
require_once('../../../data/class.time_table_item_list.php');
require_once('../../../data/class.time_table_item_list_day.php');

/* user defined includes */
// section 127-0-0-1-964a67c:1410da3236e:-8000:0000000000000CC4-includes begin
// section 127-0-0-1-964a67c:1410da3236e:-8000:0000000000000CC4-includes end

/* user defined constants */
// section 127-0-0-1-964a67c:1410da3236e:-8000:0000000000000CC4-constants begin
// section 127-0-0-1-964a67c:1410da3236e:-8000:0000000000000CC4-constants end

/**
 * //require_once('../../../data/class.time_table_item_list.php');
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class calender_day
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute time_element_list
     *
     * @access private
     * @var table_element_list
     */
    private $time_element_list = null;

    /**
     * Short description of attribute day_time
     *
     * @access private
     * @var Integer
     */
    private $day_time = null;

    /**
     * Short description of attribute prev_day_time
     *
     * @access public
     * @var Integer
     */
    public $prev_day_time = null;

    /**
     * Short description of attribute next_day_time
     *
     * @access public
     * @var Integer
     */
    public $next_day_time = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     */
    public function get_year()
    {
     return (int)$this->day_time->format("Y");
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     */
    public function get_month()
    {
     return (int)$this->day_time->format("m");
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     */
    public function get_date_by_month( $inside )
    {
     $is_tasks = FALSE;
     $is_events = FALSE;
     
     if ( $inside AND ( $is_events OR $is_tasks ) ) 
     { return "<mark>" . " " . $this->get_day() .  " " . "</mark>"; }
     else
     { return $this->get_day(); }
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     */
    public function get_day()
    {
     return (int)$this->day_time->format("d");
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     */
    public function get_day_time()
    {
     return $this->day_time;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     */
    public function get_prev_day_time()
    {
     return $this->prev_day_time;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     */
    public function get_next_day_time()
    {
     return $this->next_day_time;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     */
    public function fill_day_by_month()
    {
     ;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     */
    public function fill_day_by_week( $frame )
    {
     $this->time_element_list = new table_element_list();
     for( $i = 0; $i < 8; $i++ )
     {
     $time_element = new calender_time_element($i);
     $number = $i + 1 . ". time";
     $decription = "";
     $time_element->set_number_description( $number );
     $time_element->set_time_description( $decription );
     $this->time_element_list->add_item( $time_element );
     }
     $this->fill_time_table_item_list( $frame );
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  day_time
     */
    public function set_day_time($day_time)
    {
     $this->day_time = $day_time;
     $this->prev_day_time = clone $this->day_time;
     $this->next_day_time = clone $this->day_time;
     $this->prev_day_time->sub( new dateinterval('P1D') );
     $this->next_day_time->add( new dateinterval('P1D') );
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     */
    public function fill_day_by_day( $frame )
    {
     $this->time_element_list = new table_element_list();
     for( $i = 0; $i < 8; $i++ )
     {
     $time_element = new calender_time_element($i);
     $number = $i + 1 . " Std.";
     $decription = "";
     $time_element->set_number_description( $number );
     $time_element->set_time_description( $decription );
     $this->time_element_list->add_item( $time_element );
     }
     $this->fill_time_table_item_list( $frame );
    }
    /**
     *
     * @access public
     * @author Bernd schröder
     */
    public function get_time_element_list()
    {
     return $this->time_element_list;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     */
    public function fill_time_table_item_list( $frame )
    {
     if ( $frame == "B" )
     { $this->fill_member_time_table_item_list(); }
     elseif ( $frame == "C" )
     { $this->fill_team_time_table_item_list(); }
     elseif ( $frame == "D" )
     { $this->fill_event_time_table_item_list(); }
     else
         ;
    }    
         
    public function fill_member_time_table_item_list()
    {
    // get the time_table_item_list of all teams 
    // where the member is member of
    $time_table_item_list = new time_table_item_list();
    $member = new member();
    $member->set_id( $_SESSION['watched_id'] );
    $team_list = $member->get_team_list();
    $team_list_count = $team_list->get_item_count();

    for( $n=0; $n<$team_list_count; $n++ )
    {
     $team_table_item_list = new time_table_item_list_day();
     $team_table_item_list->set_owner_id( $team_list->get_item( $n )->get_id() );
     $team_table_item_list->set_year( $this->get_year() );
     $team_table_item_list->set_month(  $this->get_month() );
     $team_table_item_list->set_day( $this->get_day() );
     $team_table_item_list->load();
     $time_table_item_list->add_list( $team_table_item_list, (int)0 );   
    }
    $count = $time_table_item_list->get_item_count();

    // run the loop for every foundet time table item
    for( $i = 0; $i < $count; $i++ )
    {
    $item = $time_table_item_list->get_item( $i );

    $team = new team();
    $team->set_id( $item->get_team_id() );
    $team->load();
    $relation = $team->get_member_relation($member);
    
    $time_element = $this->time_element_list->get_item( $item->get_time_number() - 1 );
    $description = $time_element->get_time_description() . " " . 
    $this->get_team_link( $relation, $team );
    $time_element->set_time_description( $description );
    }
    }
    

    public function get_team_link( $relation, $team )
    {
     $return_link; 
     
     if( $relation == (int)2 )
     {
     $return_link =
     "<a href=\"" . $_SESSION['C_control_base'] .
     "C0_pre_frame.php?id=" .
     $team->get_id() . "\">" .
     $team->get_name() . "<br />" . "[" . 
     $team->get_upteam_name() . "]" . "<br />" .
     "</a>";            
     }
     else
     {
     $return_link =
     "<a href=\"" . $_SESSION['C_control_base'] .
     "C0_pre_frame.php?id=" .
     $team->get_id() . "\">" .
     $team->get_name() . "<br />" .
     "</a>";         
     } 
     return $return_link;
    }

    
    public function fill_team_time_table_item_list()
    {
     // get the time_table_item_list of the actual team and for this day
     $team_table_item_list = new time_table_item_list_day();
     $team_table_item_list->set_owner_id( $_SESSION['watched_id'] );
     $team_table_item_list->set_year( $this->get_year() );
     $team_table_item_list->set_month(  $this->get_month() );
     $team_table_item_list->set_day( $this->get_day() );
     
     $team_table_item_list->load();
     $count = $team_table_item_list->get_item_count();
     
     // run the loop for every foundet time table item
     for( $i = 0; $i < $count; $i++ )
     {
     $item = $team_table_item_list->get_item( $i );

     $team = new team();
     $team->set_id( $item->get_team_id() );
     $team->load();
     
     $time_element = $this->time_element_list->get_item( $item->get_time_number() - 1 );
     $time_element->set_time_description( $team->get_name() );
     }
    }

    public function fill_event_time_table_item_list()
    {
    // get the time_table_item_list of the actual event
    ;
    }
}?>