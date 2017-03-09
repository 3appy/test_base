<?php

error_reporting(E_ALL);

/**
 * //2  modify master data
 *
 * @author Bernd Schröder
 * @version 1.0
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
require_once('form_controls/class.event_data_form.php');
require_once('form_controls/class.date_time_data_part.php');
require_once('form_controls/class.event_link_data_part.php');

/* user defined includes */
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001D7D-includes begin
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001D7D-includes end

/* user defined constants */
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001D7D-constants begin
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001D7D-constants end

/**
 * //2  modify master data
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class D2_view
    extends D_view
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
     $this->load_language("d2");
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_D3_content()
    {
     $column3_content =  "" .
     $this->get_event_data_form();
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_event_data_form()
    {
     $event = $this->watched_entity;
     $language_array = $this->get_language_array();
     $action = $_SESSION['D_control_base'] . "D2_post_frame.php";

     $event_data_form = new event_data_form($action);
     $event_data_form->set_language($language_array);
     $event_data_form->set_model( $event );
     $event_data_form->set_header( $language_array['C3_form_header'] );
     $event_data_form->set_name_value( $event->get_name() );
 
     $start_date_time_data_part = new date_time_data_part();
     $start_date_time_data_part->set_name("start");
     $start_date_time_data_part->set_header($language_array['C3_start_time_date']);
     $start_date_time_data_part->set_language($language_array);
     $start_date_time_data_part->set_datetime( $event->get_start_datetime_eu() );
     $event_data_form->set_start_time_data_part($start_date_time_data_part);

     $end_date_time_data_part = new date_time_data_part();
     $end_date_time_data_part->set_name("end");
     $end_date_time_data_part->set_header($language_array['C3_end_time_date']);
     $end_date_time_data_part->set_language($language_array);
     $end_date_time_data_part->set_datetime( $event->get_end_datetime_eu() );
     $event_data_form->set_end_time_data_part($end_date_time_data_part);

     $address_data_part = new address_data_part();
     $address_data_part->set_language($language_array);
     $address_data_part->set_address( $event->get_address() );
     $event_data_form->set_address_data_part($address_data_part);

     $private_data_part = new private_data_part();
     $private_data_part->set_language($language_array);
     $private_data_part->set_mobile_phone_value(
     $event->get_private_information()->get_mobile_phone() );
     $private_data_part->set_home_phone_value(
     $event->get_private_information()->get_home_phone() );
     $private_data_part->set_work_phone_value(
     $event->get_private_information()->get_work_phone() );
     $event_data_form->set_private_data_part($private_data_part);
     
     $link_data_part = new event_link_data_part();
     $link_data_part->set_language($language_array);
     $link_data_part->set_owner($event);
     $event_data_form->set_link_data_part($link_data_part);

     return
     $event_data_form->get_form();
     }
}?>