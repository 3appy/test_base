<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.C27_post_control.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 02.03.2017, 12:02:45 with ArgoUML PHP module 
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
// section 10-5-29-6-db38f61:15732b60707:-8000:00000000000042A3-includes begin
// section 10-5-29-6-db38f61:15732b60707:-8000:00000000000042A3-includes end

/* user defined constants */
// section 10-5-29-6-db38f61:15732b60707:-8000:00000000000042A3-constants begin
// section 10-5-29-6-db38f61:15732b60707:-8000:00000000000042A3-constants end

/**
 * Short description of class C27_post_control
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class C27_post_control
    extends csv_post_control
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute csv_id
     *
     * @access private
     * @var Integer
     */
    private $csv_id = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function is_entered_completed()
    {
     $completed = TRUE;
     if ( empty($_FILES['userfile']['name']) AND
     ( empty($_POST["message"])))
     { $completed = FALSE; }
     else
     {
     $this->set_top_team();
     $this->set_string_today();
     }
     return $completed;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function perform()
    {
     if ( !empty($_FILES['userfile']['name']))
     // read in file
     { $this->csv_id = $this->add_csv_file(); }
     elseif (isset ($_POST["message"]))
     // perform the text in the multi line box
     { $this->handle_csv_text( $_POST["message"] ); }
     else
     // do nothing
     { ; }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_csv_id()
    {
     return $this->csv_id;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function add_csv_file()
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.csv_document.php');
     
     $csv_id = (int)0;
     $owner_group = "m";
     $author_id = $_SESSION['watch_id'];
     $file_name = $_FILES['userfile']['name'];
     $file_source = $_FILES['userfile']['tmp_name'];
     $file_size = $_FILES['userfile']['size'];
     $file_error = $_FILES['userfile']['error'];
     
     $csv_file = new csv_document();
     $csv_file->set_max_file_size( (int)100000 ); // 100 KB
     $csv_file->set_owner_group( $owner_group );
     $csv_file->set_owner_id( $author_id );
     $csv_file->set_uploader_id( $author_id );
     $csv_file->set_upload_file_name( $file_name );
     $csv_file->set_size( $file_size );
     $csv_file->set_file_error( $file_error );
     $csv_file->set_header( $csv_file->get_upload_file_name() );
     $csv_file->set_text( "" );
     $csv_file->set_visible( (int)1 );
     
     if ( $csv_file->upload_document( $file_source ) )
     { 
     $csv_id = $csv_file->get_id(); 
     $csv_file->set_width( $this->get_requested_width() );
     $csv_file->load_csv_list_from_file();
     $csv_file->analyze_csv_list();  
     }   
     return $csv_id;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  csv_text
     */
    public function handle_csv_text($csv_text)
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.csv_document.php');
     require_once(__ROOT_DATA__.'class.csv_list.php');
     
     $csv_document = new csv_document();
     $log_table = new csv_list();
     
     $csv_document->set_width( $this->get_requested_width() );
     $csv_document->load_csv_list_from_text($csv_text);
     if ($csv_document->analyze_csv_list())
     {
     $csv_list = $csv_document->get_csv_list();
     $list_count = $csv_list->get_item_count();
     for ( $n=0; $n < $list_count; $n++ )
     {
     $log_entry = new csv_list();
     $csv_line = $csv_list->get_item( $n );
     if( $this->handle_csv_line( $csv_line ) )
     {
     $log_entry->add_item( "add item:       " );
     $log_entry->add_item( $csv_line->implode() );
     }
     else
     {
     $log_entry->add_item( "not added item: " );
     $log_entry->add_item( $csv_line->implode() );
     }
     $log_table->add_item( $log_entry );
     }
     $this->write_csv_file( $this->get_modified_file_name(), $csv_list );
     $this->write_log_file( $this->get_log_file_name(), $log_table );
     }
    }
}?>