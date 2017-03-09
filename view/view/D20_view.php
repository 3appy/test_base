<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.D20_view.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 06.12.2016, 13:24:34 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * The C - view is the basis of all views where the watched entity is of an
 * of an event:
 *
 * @author Bernd Schröder
 * @version 1.0
 */
require_once('class.D_view.php');

/* user defined includes */
// section -87--2--21--87-41c03d8a:158ce29ef0f:-8000:00000000000013AC-includes begin
// section -87--2--21--87-41c03d8a:158ce29ef0f:-8000:00000000000013AC-includes end

/* user defined constants */
// section -87--2--21--87-41c03d8a:158ce29ef0f:-8000:00000000000013AC-constants begin
// section -87--2--21--87-41c03d8a:158ce29ef0f:-8000:00000000000013AC-constants end

/**
 * Short description of class D20_view
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class D20_view
    extends D_view
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
     $this->load_language("d20");
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_column3_content()
    {
     $column3_content =  "" .
     $this->get_event_active_slot() .
     $this->get_event_slot_selection();
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_event_slot_selection()
    {
     if( defined('__VIEW_FORM__') == FALSE )
     { define('__VIEW_FORM__', $this->get_root_view_form() ); }
     require_once(__VIEW_FORM__.
     'class.interview_register_form.php');
     
     $event = $this->watched_entity;
     $model = $event->get_interview_requested_member_list();
     
     $action = $_SESSION['D_control_base'] . "D20_post_frame.php" .
     "?old_em_id=" . $_GET["event_member_id"];
     $form = new interview_register_form($action);
     $form->set_language( $this->language_array );
     $form->set_header( $this->language_array['C3_interview_time'] );
     $form->set_model( $model );
     $form->define_model();
     
     return $form->get_form();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_event_active_slot()
    {
     if(isset($_GET["event_member_id"]) &&
     is_numeric($_GET["event_member_id"]))
     {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.event_member.php');
     
     $event_member1 = new event_member();
     $event_member1->set_id( $_GET["event_member_id"] );
     $event_member1->load();
     
     $time_slot = $event_member1->get_time_slot();
     $format_class = $event_member1->get_format_class();
     $lang = $this->language_array;
     
     if( $event_member1->get_status() == (int)4 )
     {
     // noch keine Zeit gewählt ....
     return
     $this->get_slot_info( $lang['C3_no_time_selected'] );
     }
     else if ( $event_member1->get_status() == (int)5 )
     {
     // Zeit gewählt ....
     return
     $this->get_slot_info(
     $lang['C3_time_selected_1'] .
     $format_class->get_eu_time( $time_slot ) . "<br />" .
     $lang['C3_time_selected_2'] );
     }
     else
     // ...
     { return ""; }
     }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  text
     */
    public function get_slot_info($text)
    {
     return
     "<section class=\"box info\">" .
     "<br />" .
     "<img src=\"". $_SESSION['icons'] .  "info.png\" " . "/>" .
     "<p>" . $text . "</p>" .
     "</section>";
    }
}?>