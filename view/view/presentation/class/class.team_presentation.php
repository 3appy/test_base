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
// section 10-30-49-93-1ce7cdec:144734efde7:-8000:0000000000000AD5-includes begin
// section 10-30-49-93-1ce7cdec:144734efde7:-8000:0000000000000AD5-includes end

/* user defined constants */
// section 10-30-49-93-1ce7cdec:144734efde7:-8000:0000000000000AD5-constants begin
// section 10-30-49-93-1ce7cdec:144734efde7:-8000:0000000000000AD5-constants end

/**
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class team_presentation
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
     $team  = $this->get_list_model();
     $address = $team->get_address();
     $country = $address->get_country_id();
     $private_information = $team->get_private_information();
     
     $line = new basic_list();
     $line->add_item( $this->get_language()['C3_picture'] );
     $line->add_item( $team->get_avatar_icon() );
     $this->get_table_element_list()->add_item( $line );
     
     $line = new basic_list();
     $line->add_item( $language['C3_name'] );
     $line->add_item( $team->get_name() );
     $this->get_table_element_list()->add_item( $line );
     
     $line = new basic_list();
     $line->add_item( $language['C3_day'] );
     $line->add_item( $team->get_day() . "-" .
     $team->get_month() . "-" .
     $team->get_year() );
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
    }
}?>