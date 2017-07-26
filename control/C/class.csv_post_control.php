<?php

error_reporting(E_ALL);

/**
 * require_once('../basic/class.basic_control.php');
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include basic_control
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('../basic/class.basic_control.php');

/* user defined includes */
// section 10-30-49-50--e9381ca:15a7eab1717:-8000:0000000000001C39-includes begin
// section 10-30-49-50--e9381ca:15a7eab1717:-8000:0000000000001C39-includes end

/* user defined constants */
// section 10-30-49-50--e9381ca:15a7eab1717:-8000:0000000000001C39-constants begin
// section 10-30-49-50--e9381ca:15a7eab1717:-8000:0000000000001C39-constants end

/**
 * require_once('../basic/class.basic_control.php');
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class csv_post_control
    extends basic_control
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute top_team
     *
     * @access public
     * @var Integer
     */
    public $top_team = null;

    /**
     * Short description of attribute string_today
     *
     * @access public
     * @var String
     */
    public $string_today = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function set_top_team()
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.team.php');
     
     //set_top_team
     $this->top_team = new team();
     $this->top_team->set_id( $_SESSION['watched_id'] );
     $this->top_team->load();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_top_team()
    {
     return $this->top_team;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function set_string_today()
    {
     date_default_timezone_set('Europe/Berlin');
     $today = new DateTime( "now" );
     $this->string_today =
     $today->format('d') . "." .
     $today->format('m') . "." .
     $today->format('Y');
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_string_today()
    {
     return $this->string_today;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  file_name
     * @param  csv_table
     */
    public function write_csv_file($file_name, $csv_table)
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.csv_document.php');
     
     $owner_group = "m";
     $owner_id    = $_SESSION['watch_id'];
     $uploader_id = $owner_id;
     
     $document = new csv_document();
     $document->set_owner_group( $owner_group );
     $document->set_owner_id( $owner_id );
     $document->set_uploader_id( $uploader_id );
     $document->set_header( $file_name );
     $document->set_size( 1111 );
     $document->set_file_error( NULL );
     $document->set_type( "csv" );
     $document->set_text( "" );
     $document->set_csv_list( $csv_table );
     $document->set_visible( (int)1 );     

     $document->save_csv_document();
     $document->write_csv_list_to_file();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  file_name
     * @param  log_table
     */
    public function write_log_file($file_name, $log_table)
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.csv_document.php');
     
     $owner_group = "m";
     $owner_id    = $_SESSION['watch_id'];
     $uploader_id = $owner_id;
     
     $document = new csv_document();
     $document->set_owner_group( $owner_group );
     $document->set_owner_id( $owner_id );
     $document->set_uploader_id( $uploader_id );
     $document->set_header( $file_name );
     $document->set_size( 1111 );
     $document->set_file_error( NULL );
     $document->set_type( "txt" );
     $document->set_text( "" );
     $document->set_csv_list( $log_table );
     $document->set_visible( (int)1 ); 
     
     $document->save_csv_document();
     $document->write_csv_list_to_file();
    }
}?>