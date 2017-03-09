<?php

error_reporting(E_ALL);

/**
 * //6  show message data
 *
 * @author Bernd Schröder
 * @version 1.0
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
//require_once('form_controls/class.message_form.php');
require_once('class_views/class.message_view.php');

/* user defined includes */
// section -64--88--78-21--1712c833:13cc066acdb:-8000:0000000000000B86-includes begin
// section -64--88--78-21--1712c833:13cc066acdb:-8000:0000000000000B86-includes end

/* user defined constants */
// section -64--88--78-21--1712c833:13cc066acdb:-8000:0000000000000B86-constants begin
// section -64--88--78-21--1712c833:13cc066acdb:-8000:0000000000000B86-constants end

/**
 * //6  show message data
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class B6_view
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
     $this->load_language("b6");
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
     $this->get_message_form() .
     $this->show_message_data();
     return $column3_content;
    }
    
    public function get_column2_content()
    {
     return ""; 
     /*  
     return 
     "<a href=\"" . $_SESSION['B_control_base'] .
     "B_post_frame.php" . "?function=8" . "\">" .
     "<img src=\"". $_SESSION['icons'] . "mobbing.jpg\"" .
     "\" alt=\"ads\" class=\"center flexible\"/>" .
     "</a> " . "<br />" .                                         
     "<p>" .  $this->get_language_array()['C3_mobbing'] . "</p>";
     */
    }

    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_message_form()
    {
     $language_array = $this->get_language_array();
     $action = 
     $_SESSION['B_control_base'] . "B6_post_frame.php" .
     "?reader_id=" . $_SESSION['watched_id'] . 
     "&author_id=" . $_SESSION['watch_id'];
     
     if( defined('__VIEW_VIEW_ROOT__') == FALSE )
     { define('__VIEW_VIEW_ROOT__', dirname(__FILE__) ); }
     require_once(__VIEW_VIEW_ROOT__.
     '/yaml_forms/class.member_message_form.php');

     $form = new member_message_form($action);
     $form->set_language($language_array);
     $form->set_header( $language_array['C3_form_header'] );
     $form->set_enctype("multipart/form-data");

     return $form->get_form();
    }
    
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  message_list
     * @version 1.0
     */
    public function get_message_body($message_list)
    {
     $count_to = (int)50;
     $count = $message_list->get_item_count();

     if ( $count < $count_to )
     { $count_to = $count; }
         
     $table_body = "";
     if ($count > 0)
     {     
     $table_body = 
     "<table>" .
     "<thead>" .
     "<tr>" .
	 "<th>" . $count . " " . $this->get_language_array()['C3_form_header'] . 
//     "<br />" . "Seite 1: Nachrichten 1 - 25" . "</th>" .
	 "</tr>" .
	 "</thead>" .
     "<tbody>";     
     for ($i = 0; $i < $count_to; $i++)
//     for ($i = 0; $i < $count; $i++)
     {
     $table_body = $table_body . 
     "<tr>" .
     "<td>" .
     $this->get_message_line( $message_list->get_item( $i ) ) .
     "</td>" .
     "</tr>";
     }
     $table_body = $table_body .    
     "</tbody>" .
     "</table>";
     }
     return $table_body;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  member_message
     * @version 1.0
     */
    public function get_message_line($member_message)
    {
     $reader = new member();
     $reader->set_id( $member_message->get_reader_id());
     $reader->load();
     
     
     $message_view = new message_view( $this->get_watch_entity() );
     $message_view->set_text_model($member_message);
     $message_view->set_language($this->get_language_array());
     $message_view->set_base_frame( $this->get_watched_entity() );     
     $message_view->set_reader( $reader );
     return $message_view->get_view();
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function show_message_data()
    {  
     $representation = "";
     
     $message_list = $this->get_watched_entity()->get_member_message_list();                 
     $representation = $this->get_message_body( $message_list );

     return $representation;
    }
}?>