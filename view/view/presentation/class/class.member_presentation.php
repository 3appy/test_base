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
// section 10-30-49-93-6aee215f:1446d3c10a3:-8000:0000000000000AC6-includes begin
// section 10-30-49-93-6aee215f:1446d3c10a3:-8000:0000000000000AC6-includes end

/* user defined constants */
// section 10-30-49-93-6aee215f:1446d3c10a3:-8000:0000000000000AC6-constants begin
// section 10-30-49-93-6aee215f:1446d3c10a3:-8000:0000000000000AC6-constants end

/**
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class member_presentation
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
     $this->get_table_header_list()->
     add_item( $this->get_language()['C3_header_1'] );
     $this->get_table_header_list()->
     add_item( $this->get_language()['C3_header_2'] );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function define_table_element()
    {
     $language = $this->get_language();
     $member  = $this->get_list_model();
     $address = $member->get_address();
     $country = $address->get_country_id();
     $private_information = $member->get_private_information();
     
     $line = new basic_list();
     $line->add_item( $this->get_language()['C3_picture'] );
     $line->add_item( $member->get_avatar_icon() );
     $this->get_table_element_list()->add_item( $line );
     
     $line = new basic_list();
     $line->add_item( $language['C3_language'] );
     $line->add_item($member->get_flag());
     $this->get_table_element_list()->add_item( $line );
     
     $line = new basic_list();
     $line->add_item( $language['C3_forname'] );
     $line->add_item( $member->get_forename() );
     $this->get_table_element_list()->add_item( $line );
     
     $line = new basic_list();
     $line->add_item( $language['C3_name'] );
     $line->add_item( $member->get_name() );
     $this->get_table_element_list()->add_item( $line );
     
     $line = new basic_list();
     $line->add_item( $language['C3_birthday'] );
     $line->add_item( $member->get_day() . "-" .
     $member->get_month() . "-" .
     $member->get_year() );
     $this->get_table_element_list()->add_item( $line );
     
     $line = new basic_list();
     $line->add_item( $language['C3_last_activity'] );
     $line->add_item( $member->get_last_activity() );
     $this->get_table_element_list()->add_item( $line );
     
     $line = new basic_list();
     $line->add_item( $language['C3_gender'] );
     $line->add_item( $member->get_gender_symbol() );
     $this->get_table_element_list()->add_item( $line );
     
     $line = new basic_list();
     $line->add_item( $language['C3_mail'] );
     $line->add_item( $member->get_mail_address() );
     $this->get_table_element_list()->add_item( $line );
     
     $line = new basic_list();
     $line->add_item( $language['C3_street_name'] );
     $line->add_item( $address->get_street_name() );
     $this->get_table_element_list()->add_item( $line );
     
     $line = new basic_list();
     $line->add_item( $language['C3_house_number'] );
     $line->add_item( $address->get_house_number() );
     $this->get_table_element_list()->add_item( $line );
     
     $line = new basic_list();
     $line->add_item( $language['C3_zip_code'] );
     $line->add_item( $address->get_zip_code() );
     $this->get_table_element_list()->add_item( $line );
     
     $line = new basic_list();
     $line->add_item( $language['C3_city_name'] );
     $line->add_item( $address->get_city_name() );
     $this->get_table_element_list()->add_item( $line );
     
     $line = new basic_list();
     $line->add_item( $language['C3_country'] );
     $line->add_item( $language['country_' . $country ] );
     $this->get_table_element_list()->add_item( $line );
     
     $line = new basic_list();
     $line->add_item( $language['C3_mobile_phone'] );
     $line->add_item( $private_information->get_mobile_phone() );
     $this->get_table_element_list()->add_item( $line );
     
     $line = new basic_list();
     $line->add_item( $language['C3_home_phone'] );
     $line->add_item( $private_information->get_home_phone() );
     $this->get_table_element_list()->add_item( $line );
     
     $line = new basic_list();
     $line->add_item( $language['C3_work_phone'] );
     $line->add_item( $private_information->get_work_phone() );
     $this->get_table_element_list()->add_item( $line );
    }
}?>