<?php

error_reporting(E_ALL);

/**
 * The C25 view is the view for exporting CSV files based on the school
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
// section 10-5-23--98--6bb21e0c:15a2ee96cfc:-8000:0000000000002798-includes begin
// section 10-5-23--98--6bb21e0c:15a2ee96cfc:-8000:0000000000002798-includes end

/* user defined constants */
// section 10-5-23--98--6bb21e0c:15a2ee96cfc:-8000:0000000000002798-constants begin
// section 10-5-23--98--6bb21e0c:15a2ee96cfc:-8000:0000000000002798-constants end

/**
 * The C25 view is the view for exporting CSV files based on the school
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class C25_view
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
     $this->load_language("c25");
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_column3_content()
    {
     // standard selection
     $column3_content = $this->get_csv_export_file();
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_csv_export_file()
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
     "C25_post_frame.php?cvs=" . (int)1 );
     
     // ---------------- csv file_2 -------------------
     
     $header_file_2 = "<p>" . $language_array['C3_2_1'] . "</p>";
     $link_2 = new link_button();
     $link_2->set_name($language_array['C3_2_0']);
     $link_2->set_link($_SESSION['C_control_base'] .
     "C25_post_frame.php?cvs=" . (int)2 );
     
     // ---------------- csv file_3 -------------------
     
     $header_file_3 = "<p>" . $language_array['C3_3_1'] . "</p>";
     $link_3 = new link_button();
     $link_3->set_name($language_array['C3_3_0']);
     $link_3->set_link($_SESSION['C_control_base'] .
     "C25_post_frame.php?cvs=" . (int)3 );
     
     // ---------------- csv file_4 -------------------
     
     $header_file_4 = "<p>" . $language_array['C3_4_1'] . "</p>";
     $link_4 = new link_button();
     $link_4->set_name($language_array['C3_4_0']);
     $link_4->set_link($_SESSION['C_control_base'] .
     "C25_post_frame.php?cvs=" . (int)4 );
     
     // ---------------- csv file_5 -------------------
     
     $header_file_5 = "<p>" . $language_array['C3_5_1'] . "</p>";
     $link_5 = new link_button();
     $link_5->set_name($language_array['C3_5_0']);
     $link_5->set_link($_SESSION['C_control_base'] .
     "C25_post_frame.php?cvs=" . (int)5 );
     
     // ---------------- csv file_6 -------------------
     
     $header_file_6 = "<p>" . $language_array['C3_6_1'] . "</p>";
     $link_6 = new link_button();
     $link_6->set_name($language_array['C3_6_0']);
     $link_6->set_link($_SESSION['C_control_base'] .
     "C25_post_frame.php?cvs=" . (int)6 );
     
     // ---------------- csv file_7 -------------------
     
     $header_file_7 = "<p>" . $language_array['C3_7_1'] . "</p>";
     $link_7 = new link_button();
     $link_7->set_name($language_array['C3_7_0']);
     $link_7->set_link($_SESSION['C_control_base'] .
     "C25_post_frame.php?cvs=" . (int)7 );
     
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
}?>