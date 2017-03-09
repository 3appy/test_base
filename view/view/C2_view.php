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
 * of a team:
 *
 * @author Bernd Schröder
 * @version 1.0
 */
require_once('class.C_view.php');
require_once('form_controls/class.team_data_form.php');
require_once('form_controls/class.team_link_data_part.php');


/* user defined includes */
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001D7C-includes begin
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001D7C-includes end

/* user defined constants */
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001D7C-constants begin
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001D7C-constants end

/**
 * //2  modify master data
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class C2_view
    extends C_view
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
     $this->load_language("c2");
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
     $this->get_team_data_form();
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_team_data_form()
    {
     $team = $this->watched_entity;
     $language_array = $this->get_language_array();
     $action = $_SESSION['C_control_base'] . "C2_post_frame.php";
     
     $team_data_form = new team_data_form($action);
     $team_data_form->set_language($language_array);
     $team_data_form->set_header( $language_array['C3_form_header'] );
     $team_data_form->set_name_value( $team->get_name() );
     
     $date_data_part = new date_data_part();
     $date_data_part->set_language($language_array);
     $date_data_part->set_day_value($team->get_day() );
     $date_data_part->set_month_value($team->get_month() );
     $date_data_part->set_year_value($team->get_year() );
     $team_data_form->set_date_data_part($date_data_part);
     
     $address_data_part = new address_data_part();
     $address_data_part->set_language($language_array);
     $address_data_part->set_address( $team->get_address() );
     $team_data_form->set_address_data_part($address_data_part);
        
     $private_data_part = new private_data_part();
     $private_data_part->set_language($language_array);
     $private_data_part->set_mobile_phone_value(
     $team->get_private_information()->get_mobile_phone() );
     $private_data_part->set_home_phone_value(
     $team->get_private_information()->get_home_phone() );
     $private_data_part->set_work_phone_value(
     $team->get_private_information()->get_work_phone() );
     $team_data_form->set_private_data_part($private_data_part);
     
     $link_data_part = new team_link_data_part();
     $link_data_part->set_language($language_array);
     $link_data_part->set_owner($team);     
     $team_data_form->set_link_data_part($link_data_part);
     
     return
     $team_data_form->get_form();
    }
}?>