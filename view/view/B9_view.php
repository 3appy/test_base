<?php

error_reporting(E_ALL);

/**
 * //10  show calender
 * require_once('class_views/class.calender_month_view.php');
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
require_once('class_views/class.calender_month_view.php');
require_once('class_views/class.calender_day_view.php');
require_once('presentation/class/class.event_list_presentation.php');



/* user defined includes */
// section -64--88--78-21--4895b171:14068a81887:-8000:0000000000002EFD-includes begin
// section -64--88--78-21--4895b171:14068a81887:-8000:0000000000002EFD-includes end

/* user defined constants */
// section -64--88--78-21--4895b171:14068a81887:-8000:0000000000002EFD-constants begin
// section -64--88--78-21--4895b171:14068a81887:-8000:0000000000002EFD-constants end

/**
 * //10  show calender
 * require_once('class_views/class.calender_month_view.php');
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class B9_view
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
     $this->load_language("b9");
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_column3_content()
    {
     $column3_content =  "" .
     $this->get_calender();
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_calender()
    {
     date_default_timezone_set('Europe/Berlin');
     $language = $this->get_language_array();
     $owner_id = $this->watched_entity->get_id();
     
     $today    = new DateTime( "now" );

     if(isset($_GET["y"]) && is_numeric($_GET["y"]))
     { $year = htmlspecialchars( $_GET["y"] ); }
     else
     { $year = $today->format("Y"); }

     if(isset($_GET["m"]) && is_numeric($_GET["m"]))
     { $month = htmlspecialchars( $_GET["m"] ); }
     else
     { $month = $today->format("m"); }

     if(isset($_GET["d"]) && is_numeric($_GET["d"]))
     { $day = htmlspecialchars( $_GET["d"] ); }
     else
     { $day = $today->format("d"); }

     if(isset($_GET["modus"]) && is_string($_GET["modus"]))
     { $modus = htmlspecialchars( $_GET["modus"] ); }
     else
     { $modus = "week"; }     
        
     if ( $modus == "day" )
     {
     $starttime = new DateTime();
     $starttime->setDate ( $year , $month , $day );
     $endtime =  clone $starttime;
     $endtime->add( new DateInterval('P1D') );

     $calendar = new calender_day_view( $owner_id );
     $calendar->set_language( $language );
     $calendar->set_frame( "B" );
     $calendar->set_control_frame( "B9_pre_frame.php" );
     $calendar->set_calender_day( $year, $month, $day );
     }
     else if ( $modus == "week" )
     {
     $starttime = new DateTime();
     $starttime->setDate ( $year , $month , $day );
     $endtime =  clone $starttime;
     $endtime->add( new DateInterval('P1W') );

     $calendar = new calender_week_view( $owner_id );
     $calendar->set_language( $language );
     $calendar->set_frame( "B" );
     $calendar->set_control_frame( "B9_pre_frame.php" );
     $calendar->set_calender_week( $year, $month, $day );
     }
     else
     {
     $starttime = new DateTime();
     $starttime->setDate ( $year , $month , (int)1 );
     $endtime =  clone $starttime;
     $endtime->modify('last day of this month');

     $calendar = new calender_month_view( $owner_id );
     $calendar->set_language( $language );
     $calendar->set_frame( "B" );
     $calendar->set_control_frame( "B9_pre_frame.php" );
     $calendar->set_calender_month( $year, $month );
     }     
     $startstr = $starttime->format('Y-m-d');
     $endstr = $endtime->format('Y-m-d');

     $model =
     $this->watched_entity->get_cal_event_list( $starttime, $endtime );
     $form = new event_list_presentation( $model, $language );
     $form->define_table();

     return
     $calendar->get_calender() .
     $form->get_form();
    }
}?>