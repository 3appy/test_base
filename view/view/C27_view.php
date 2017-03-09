<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.C27_view.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 08.11.2016, 22:12:35 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
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
// section 10-5-28-20-335a9c0f:15583ef730f:-8000:000000000000F12F-includes begin
// section 10-5-28-20-335a9c0f:15583ef730f:-8000:000000000000F12F-includes end

/* user defined constants */
// section 10-5-28-20-335a9c0f:15583ef730f:-8000:000000000000F12F-constants begin
// section 10-5-28-20-335a9c0f:15583ef730f:-8000:000000000000F12F-constants end

/**
 * Short description of class C27_view
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class C27_view
    extends C_view
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function __construct()
    {
     parent::__construct();
     $this->load_language("c27");
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_column3_content()
    {
     $column3_content =  "";
     if(isset($_GET["cvs"]) && is_numeric($_GET["cvs"]))
     { $cvs = htmlspecialchars( $_GET["cvs"] ); }
     else
     { $cvs = (int)0; }
     
     switch( $cvs )
     {
     case ( 0 ):
     // standard selection
     $column3_content .= $this->get_csv_import_file();
     break;
     case ( 1 ):
     // import school structure
     $column3_content .= $this->get_csv_school_structure();
     break;
     case ( 2 ):
     // import timetable
     $column3_content .= $this->get_csv_room();
     break;
     case ( 3 ):
     // import timetable
     $column3_content .= $this->get_csv_timetable();
     break;
     case ( 4 ):
     // import member
     $column3_content .= $this->get_csv_member_import();
     break;
     case ( 5 ):
     // connect Administratoren
     $column3_content .= $this->get_csv_administrator_con();
     break;
     case ( 6 ):
     // connect members
     $column3_content .= $this->get_csv_member_con();
     break;
     case ( 7 ):
     // import connections
     $column3_content .= $this->get_csv_connections();
     break;
     default:
     $column3_content .= $this->get_csv_import_file();
     break;
     }
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_csv_import_file()
    {
     if( defined('__VIEW_CONTROL__') == FALSE )
     { define('__VIEW_CONTROL__', $this->get_root_view_control() ); }
     require_once(__VIEW_CONTROL__.'class.link_button.php');
     
     $language_array = $this->get_language_array();
     
     $header_file_0 = "<p>" . $language_array['C3_0_1'] . "</p>";
     
     // ---------------- csv file_1 -------------------
     
     $header_file_1 = "<p>" . $language_array['C3_1_1'] . "</p>";
     $link_1 = new link_button();
     $link_1->set_name($language_array['C3_1_0']);
     $link_1->set_link($_SESSION['C_control_base'] .
     "C27_pre_frame.php?cvs=" . (int)1 );
     
     // ---------------- csv file_2 -------------------
     
     $header_file_2 = "<p>" . $language_array['C3_2_1'] . "</p>";
     $link_2 = new link_button();
     $link_2->set_name($language_array['C3_2_0']);
     $link_2->set_link($_SESSION['C_control_base'] .
     "C27_pre_frame.php?cvs=" . (int)2 );
     
     // ---------------- csv file_3 -------------------
     
     $header_file_3 = "<p>" . $language_array['C3_3_1'] . "</p>";
     $link_3 = new link_button();
     $link_3->set_name($language_array['C3_3_0']);
     $link_3->set_link($_SESSION['C_control_base'] .
     "C27_pre_frame.php?cvs=" . (int)3 );
     
     // ---------------- csv file_4 -------------------
     
     $header_file_4 = "<p>" . $language_array['C3_4_1'] . "</p>";
     $link_4 = new link_button();
     $link_4->set_name($language_array['C3_4_0']);
     $link_4->set_link($_SESSION['C_control_base'] .
     "C27_pre_frame.php?cvs=" . (int)4 );
     
     // ---------------- csv file_5 -------------------
     
     $header_file_5 = "<p>" . $language_array['C3_5_1'] . "</p>";
     $link_5 = new link_button();
     $link_5->set_name($language_array['C3_5_0']);
     $link_5->set_link($_SESSION['C_control_base'] .
     "C27_pre_frame.php?cvs=" . (int)5 );
     
     // ---------------- csv file_6 -------------------
     
     $header_file_6 = "<p>" . $language_array['C3_6_1'] . "</p>";
     $link_6 = new link_button();
     $link_6->set_name($language_array['C3_6_0']);
     $link_6->set_link($_SESSION['C_control_base'] .
     "C27_pre_frame.php?cvs=" . (int)6 );
     
     // ---------------- csv file_7 -------------------
     
     $header_file_7 = "<p>" . $language_array['C3_7_1'] . "</p>";
     $link_7 = new link_button();
     $link_7->set_name($language_array['C3_7_0']);
     $link_7->set_link($_SESSION['C_control_base'] .
     "C27_pre_frame.php?cvs=" . (int)7 );
     
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
     "</section>" .
     "<section class=\"box info\">" .
     $link_4->get_button() . $header_file_4 .
     "</section>" .
     "<section class=\"box info\">" .
     $link_5->get_button() . $header_file_5 .
     "</section>" .
     "<section class=\"box info\">" .
     $link_6->get_button() . $header_file_6 .
     "</section>" .
     "<section class=\"box info\">" .
     $link_7->get_button() . $header_file_7 .
     "</section>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_csv_school_structure()
    {
     if( defined('__VIEW_FORM__') == FALSE )
     { define('__VIEW_FORM__', $this->get_root_view_form() ); }
     require_once(__VIEW_FORM__.'class.csv_import_form.php');
     
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.csv_document.php');
     
     $language_array = $this->get_language_array();
     $action = $_SESSION['C_control_base'] . "C27_1_post_frame.php";
     
     $form = new csv_import_form($action);
     $form->set_language($language_array);
     $form->set_enctype("multipart/form-data");
     $form->set_header( $language_array['C3_1_0'] );
     
     if(isset($_GET["document_id"]) && is_numeric($_GET["document_id"]))
     {
     $document_id = htmlspecialchars( $_GET["document_id"] );
     $csv_document = new csv_document();
     $csv_document->set_id( $document_id );
     $csv_document->set_width( (int)3 );
     $csv_document->load_csv_list_from_file();
     
     if( $csv_document->analyze_csv_list() )
     {
     $form->set_info_box( $language_array['C3_1_5_1'] .
     $csv_document->get_csv_list()->get_item_count() .
     $language_array['C3_1_5_2'] );
     }
     else
     {
     $form->set_info_box( $language_array['C3_1_5_0'] .
     $csv_document->get_csv_list()->get_error_line() );
     }
     $form->set_text_box_header( $language_array['C3_1_6'] );
     $form->set_text_box( $csv_document->get_csv_text() );
     }
     else
     {
     $form->set_info_box( $language_array['C3_1_2'] );
     $form->set_text_box_header( $language_array['C3_1_3'] );
     $form->set_text_box( $language_array['C3_1_4'] );
     }
     return $form->get_form();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_csv_room()
    {
     if( defined('__VIEW_FORM__') == FALSE )
     { define('__VIEW_FORM__', $this->get_root_view_form() ); }
     require_once(__VIEW_FORM__.'class.csv_import_form.php');
     
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.csv_document.php');
     
     $language_array = $this->get_language_array();
     $action = $_SESSION['C_control_base'] . "C27_2_post_frame.php";
     
     $form = new csv_import_form($action);
     $form->set_language($language_array);
     $form->set_enctype("multipart/form-data");
     $form->set_header( $language_array['C3_2_0'] );
     
     if(isset($_GET["document_id"]) && is_numeric($_GET["document_id"]))
     {
     $document_id = htmlspecialchars( $_GET["document_id"] );
     $csv_document = new csv_document();
     $csv_document->set_id( $document_id );
     $csv_document->set_width( (int)2 );
     $csv_document->load_csv_list_from_file();
     
     if( $csv_document->analyze_csv_list() )
     {
     $form->set_info_box( $language_array['C3_2_5_1'] .
     $csv_document->get_csv_list()->get_item_count() .
     $language_array['C3_2_5_2'] );
     }
     else
     {
     $form->set_info_box( $language_array['C3_2_5_0'] .
     $csv_document->get_csv_list()->get_error_line() );
     }
     $form->set_text_box_header( $language_array['C3_2_6'] );
     $form->set_text_box( $csv_document->get_csv_text() );
     }
     else
     {
     $form->set_info_box( $language_array['C3_2_2'] );
     $form->set_text_box_header( $language_array['C3_2_3'] );
     $form->set_text_box( $language_array['C3_2_4'] );
     }
     return $form->get_form();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_csv_timetable()
    {
     if( defined('__VIEW_FORM__') == FALSE )
     { define('__VIEW_FORM__', $this->get_root_view_form() ); }
     require_once(__VIEW_FORM__.'class.csv_import_form.php');
     
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.csv_document.php');
     
     $language_array = $this->get_language_array();
     $action = $_SESSION['C_control_base'] . "C27_3_post_frame.php";
     
     $form = new csv_import_form($action);
     $form->set_language($language_array);
     $form->set_enctype("multipart/form-data");
     $form->set_header( $language_array['C3_3_0'] );
     
     if(isset($_GET["document_id"]) && is_numeric($_GET["document_id"]))
     {
     $document_id = htmlspecialchars( $_GET["document_id"] );
     $csv_document = new csv_document();
     $csv_document->set_id( $document_id );
     $csv_document->set_width( (int)9 );
     $csv_document->load_csv_list_from_file();
     
     if( $csv_document->analyze_csv_list() )
     {
     $form->set_info_box( $language_array['C3_3_5_1'] .
     $csv_document->get_csv_list()->get_item_count() .
     $language_array['C3_3_5_2'] );
     }
     else
     {
     $form->set_info_box( $language_array['C3_3_5_0'] .
     $csv_document->get_csv_list()->get_error_line() );
     }
     $form->set_text_box_header( $language_array['C3_3_6'] );
     $form->set_text_box( $csv_document->get_csv_text() );
     }
     else
     {
     $form->set_info_box( $language_array['C3_3_2'] );
     $form->set_text_box_header( $language_array['C3_3_3'] );
     $form->set_text_box( $language_array['C3_3_4'] );
     }
     return $form->get_form();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_csv_member_import()
    {
     if( defined('__VIEW_FORM__') == FALSE )
     { define('__VIEW_FORM__', $this->get_root_view_form() ); }
     require_once(__VIEW_FORM__.'class.csv_import_form.php');
     
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.csv_document.php');
     
     $language_array = $this->get_language_array();
     $action = $_SESSION['C_control_base'] . "C27_4_post_frame.php";
     
     $form = new csv_import_form($action);
     $form->set_language($language_array);
     $form->set_enctype("multipart/form-data");
     $form->set_header( $language_array['C3_4_0'] );
     
     if(isset($_GET["document_id"]) && is_numeric($_GET["document_id"]))
     {
     $document_id = htmlspecialchars( $_GET["document_id"] );
     $csv_document = new csv_document();
     $csv_document->set_id( $document_id );
     $csv_document->set_width( (int)4 );
     $csv_document->load_csv_list_from_file();
     
     if( $csv_document->analyze_csv_list() )
     {
     $form->set_info_box( $language_array['C3_4_5_1'] .
     $csv_document->get_csv_list()->get_item_count() .
     $language_array['C3_4_5_2'] );
     }
     else
     {
     $form->set_info_box( $language_array['C3_4_5_0'] .
     $csv_document->get_csv_list()->get_error_line() );
     }
     $form->set_text_box_header( $language_array['C3_4_6'] );
     $form->set_text_box( $csv_document->get_csv_text() );
     }
     else
     {
     $form->set_info_box( $language_array['C3_4_2'] );
     $form->set_text_box_header( $language_array['C3_4_3'] );
     $form->set_text_box( $language_array['C3_4_4'] );
     }
     return $form->get_form();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_csv_administrator_con()
    {
     if( defined('__VIEW_FORM__') == FALSE )
     { define('__VIEW_FORM__', $this->get_root_view_form() ); }
     require_once(__VIEW_FORM__.'class.csv_import_form.php');
     
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.csv_document.php');
     
     $language_array = $this->get_language_array();
     $action = $_SESSION['C_control_base'] . "C27_5_post_frame.php";
     
     $form = new csv_import_form($action);
     $form->set_language($language_array);
     $form->set_enctype("multipart/form-data");
     $form->set_header( $language_array['C3_5_0'] );
     
     if(isset($_GET["document_id"]) && is_numeric($_GET["document_id"]))
     {
     $document_id = htmlspecialchars( $_GET["document_id"] );
     $csv_document = new csv_document();
     $csv_document->set_id( $document_id );
     $csv_document->set_width( (int)3 );
     $csv_document->load_csv_list_from_file();
     
     if( $csv_document->analyze_csv_list() )
     {
     $form->set_info_box( $language_array['C3_5_5_1'] .
     $csv_document->get_csv_list()->get_item_count() .
     $language_array['C3_5_5_2'] );
     }
     else
     {
     $form->set_info_box( $language_array['C3_5_5_0'] .
     $csv_document->get_csv_list()->get_error_line() );
     }
     $form->set_text_box_header( $language_array['C3_5_6'] );
     $form->set_text_box( $csv_document->get_csv_text() );
     }
     else
     {
     $form->set_info_box( $language_array['C3_5_2'] );
     $form->set_text_box_header( $language_array['C3_5_3'] );
     $form->set_text_box( $language_array['C3_5_4'] );
     }
     return $form->get_form();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_csv_member_con()
    {
     if( defined('__VIEW_FORM__') == FALSE )
     { define('__VIEW_FORM__', $this->get_root_view_form() ); }
     require_once(__VIEW_FORM__.'class.csv_import_form.php');
     
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.csv_document.php');
     
     $language_array = $this->get_language_array();
     $action = $_SESSION['C_control_base'] . "C27_6_post_frame.php";
     
     $form = new csv_import_form($action);
     $form->set_language($language_array);
     $form->set_enctype("multipart/form-data");
     $form->set_header( $language_array['C3_6_0'] );
     
     if(isset($_GET["document_id"]) && is_numeric($_GET["document_id"]))
     {
     $document_id = htmlspecialchars( $_GET["document_id"] );
     $csv_document = new csv_document();
     $csv_document->set_id( $document_id );
     $csv_document->set_width( (int)3 );
     $csv_document->load_csv_list_from_file();
     
     if( $csv_document->analyze_csv_list() )
     {
     $form->set_info_box( $language_array['C3_6_5_1'] .
     $csv_document->get_csv_list()->get_item_count() .
     $language_array['C3_6_5_2'] );
     }
     else
     {
     $form->set_info_box( $language_array['C3_6_5_0'] .
     $csv_document->get_csv_list()->get_error_line() );
     }
     $form->set_text_box_header( $language_array['C3_6_6'] );
     $form->set_text_box( $csv_document->get_csv_text() );
     }
     else
     {
     $form->set_info_box( $language_array['C3_6_2'] );
     $form->set_text_box_header( $language_array['C3_6_3'] );
     $form->set_text_box( $language_array['C3_6_4'] );
     }
     return $form->get_form();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_csv_connections()
    {
     if( defined('__VIEW_FORM__') == FALSE )
     { define('__VIEW_FORM__', $this->get_root_view_form() ); }
     require_once(__VIEW_FORM__.'class.csv_import_form.php');
     
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.csv_document.php');
     
     $language_array = $this->get_language_array();
     $action = $_SESSION['C_control_base'] . "C27_7_post_frame.php";
     
     $form = new csv_import_form($action);
     $form->set_language($language_array);
     $form->set_enctype("multipart/form-data");
     $form->set_header( $language_array['C3_7_0'] );
     
     if(isset($_GET["document_id"]) && is_numeric($_GET["document_id"]))
     {
     $document_id = htmlspecialchars( $_GET["document_id"] );
     $csv_document = new csv_document();
     $csv_document->set_id( $document_id );
     $csv_document->set_width( (int)2 );
     $csv_document->load_csv_list_from_file();
     
     if( $csv_document->analyze_csv_list() )
     {
     $form->set_info_box( $language_array['C3_7_5_1'] .
     $csv_document->get_csv_list()->get_item_count() .
     $language_array['C3_7_5_2'] );
     }
     else
     {
     $form->set_info_box( $language_array['C3_7_5_0'] .
     $csv_document->get_csv_list()->get_error_line() );
     }
     $form->set_text_box_header( $language_array['C3_7_6'] );
     $form->set_text_box( $csv_document->get_csv_text() );
     }
     else
     {
     $form->set_info_box( $language_array['C3_7_2'] );
     $form->set_text_box_header( $language_array['C3_7_3'] );
     $form->set_text_box( $language_array['C3_7_4'] );
     }
     return $form->get_form();
    }
}?>