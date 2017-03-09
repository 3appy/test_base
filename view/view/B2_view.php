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
 * The B - view is the basis of all views where the watched entity is of an
 * of a member:
 *
 * @author Bernd Schröder
 * @version 1.0
 */
require_once('class.B_view.php');


/* user defined includes */
// section 127-0-0-1-3620b25f:13ccf23c1b7:-8000:0000000000001540-includes begin
// section 127-0-0-1-3620b25f:13ccf23c1b7:-8000:0000000000001540-includes end

/* user defined constants */
// section 127-0-0-1-3620b25f:13ccf23c1b7:-8000:0000000000001540-constants begin
// section 127-0-0-1-3620b25f:13ccf23c1b7:-8000:0000000000001540-constants end

/**
 * //2  modify master data
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class B2_view
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
     $this->load_language("b2");
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
     $this->get_member_data_form();
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_member_data_form()
    {
     define('__ROOT__', dirname(dirname(dirname(__FILE__))));
     require_once(__ROOT__.'/view/view/form_controls/class.member_data_form.php');
     require_once(__ROOT__.'/view/view/form_controls/class.member_link_data_part.php');

     $member = $this->watched_entity;
     $language_array = $this->get_language_array();
     $action = $_SESSION['B_control_base'] . "B2_post_frame.php";
     
     $member_data_form = new member_data_form($action);
     $member_data_form->set_language($language_array);
     $member_data_form->set_header( $language_array['C3_form_header'] );
     $member_data_form->set_forname_value( $member->get_forename() );
     $member_data_form->set_name_value( $member->get_name() );
     $member_data_form->set_mail_value( $member->get_mail_address() );
     $member_data_form->set_gender( $member->get_gender() );
     
     $date_data_part = new date_data_part();
     $date_data_part->set_language($language_array);
     $date_data_part->set_day_value($member->get_day() );
     $date_data_part->set_month_value($member->get_month() );
     $date_data_part->set_year_value($member->get_year() );
     $member_data_form->set_date_data_part($date_data_part);
     
     $address_data_part = new address_data_part();
     $address_data_part->set_language($language_array);
     $address_data_part->set_address( $member->get_address() );
     $member_data_form->set_address_data_part($address_data_part);
     
     $private_data_part = new private_data_part();
     $private_data_part->set_language($language_array);
     $private_data_part->set_mobile_phone_value(
     $member->get_private_information()->get_mobile_phone() );
     $private_data_part->set_home_phone_value(
     $member->get_private_information()->get_home_phone() );
     $private_data_part->set_work_phone_value(
     $member->get_private_information()->get_work_phone() );
     $member_data_form->set_private_data_part($private_data_part);
     
     $link_data_part = new member_link_data_part();
     $link_data_part->set_language($language_array);
     $member_data_form->set_link_data_part($link_data_part);
     
     return
     $member_data_form->get_form();
    }
}?>