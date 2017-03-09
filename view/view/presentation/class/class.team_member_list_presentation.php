<?php

error_reporting(E_ALL);

/**
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * require_once('../../../data/list/function/class.basic_list.php');
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('../../view/presentation/function/class.func_standard_table_presentation.php');

/* user defined includes */
// section 10-30-49-93-6aee215f:1446d3c10a3:-8000:0000000000000AB6-includes begin
// section 10-30-49-93-6aee215f:1446d3c10a3:-8000:0000000000000AB6-includes end

/* user defined constants */
// section 10-30-49-93-6aee215f:1446d3c10a3:-8000:0000000000000AB6-constants begin
// section 10-30-49-93-6aee215f:1446d3c10a3:-8000:0000000000000AB6-constants end

/**
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class team_member_list_presentation
    extends func_standard_table_presentation
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function define_table_header()
    {
     $this->get_table_header_list()->add_item(
     $this->get_language()['C3_picture'] );
     $this->get_table_header_list()->add_item(
     $this->get_language()['C3_name'] );
     $this->get_table_header_list()->add_item(
     $this->get_language()['C3_mobile_phone'] );
     $this->get_table_header_list()->add_item(
     $this->get_language()['C3_home_phone'] );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function define_cvs_header()
    {
     $this->get_cvs_header_list()->add_item(
     $this->get_language()['C3_picture'] );
     $this->get_cvs_header_list()->add_item(
     $this->get_language()['C3_name'] );
     $this->get_cvs_header_list()->add_item(
     $this->get_language()['C3_address_data'] );
     $this->get_cvs_header_list()->add_item(
     $this->get_language()['C3_mail'] );
     $this->get_cvs_header_list()->add_item(
     $this->get_language()['C3_mobile_phone'] );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function define_table_element()
    {
     $model = $this->get_list_model();
     $count = $model->get_item_count();
     for ($i = 0; $i < $count; $i++)
     {
     $member = $model->get_item( $i );
     $private_information = $member->get_private_information();
     
     $line = new basic_list();
     $line->add_item( $member->get_avatar_icon() );
     $link_parameter =
     "&entity_name=" . $this->get_frame()->get_entity_name() .
     "&entity_id=" . $this->get_frame()->get_id();

     $line->add_item( $member->get_link( $link_parameter ) );
     $line->add_item( $private_information->get_mobile_phone() );
     $line->add_item( $private_information->get_home_phone() );
     $this->get_table_element_list()->add_item( $line );
     }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function define_cvs_element()
    {
     $model = $this->get_list_model();
     $count = $model->get_item_count();
     for ($i = 0; $i < $count; $i++)
     {
     $member = $model->get_item( $i );
     $private_information = $member->get_private_information();
     $address = $member->get_address();
     $country = $address->get_country_id();

     $line = new basic_list();
     
     $line->add_item( $member->get_avatar_icon_path() );
     $line->add_item( $member->get_forename() );
     $line->add_item( $member->get_name() );
     $line->add_item( $address->get_street_name() );
     $line->add_item( $address->get_house_number() );
     $line->add_item( $address->get_zip_code() );
     $line->add_item( $address->get_city_name() );
     $line->add_item( $member->get_mail_address() );
     $line->add_item( $private_information->get_mobile_phone() );
     $this->get_cvs_element_list()->add_item( $line );
     }
    }
    
    public function get_button()
    {
     if( defined('__ROOT__') == FALSE )
     { define('__ROOT__',
     dirname(dirname(dirname(dirname(dirname(__FILE__)))))); }
     require_once(__ROOT__.'/view/view/form_controls/class.ok_button.php');
     
     $button = new ok_button();
     $button->set_name("PDF");
     return $button->get_button();
    }    
 }?>