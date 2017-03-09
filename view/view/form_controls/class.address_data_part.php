<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.address_data_part.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 23.09.2014, 10:10:22 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include fbox_city_select_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_city_select_element.php');

/**
 * include fbox_country_select_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_country_select_element.php');

/**
 * include fbox_text_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_text_element.php');

/**
 * include fbox_wrap_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_wrap_element.php');

/**
 * include fbox_zip_select_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */

class address_data_part
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute language
     *
     * @access public
     * @var String
     */
    public $language = null;

    /**
     * Short description of attribute address
     *
     * @access public
     * @var Integer
     */
    public $address = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @return mixed
     * @version 1.0
     */
    public function get_element_list()
    {
     $street_wrap_element = new fbox_wrap_element();
     $street_wrap_element->set_header($this->language['C3_address_data']);
     $street_name = new fbox_text_element();
     $street_name->set_label($this->language['C3_street_name']);
     $street_name->set_name("street_name");
     $street_name->set_value($this->address->get_street_name());
     $street_wrap_element->add_item($street_name);
     
     $house_number = new fbox_text_element();
     $house_number->set_label($this->language['C3_house_number']);
     $house_number->set_name("house_number");
     $house_number->set_value($this->address->get_house_number() );
     $street_wrap_element->add_item($house_number);
     
     $zip_wrap_element = new fbox_wrap_element();
     $plz_element = new fbox_text_element();
     $plz_element->set_label(
     $this->language['C3_zip_code']);
     $plz_element->set_name("plz");
     $plz_element->set_value($this->address->get_zip_code() );
     $zip_wrap_element->add_item($plz_element);
     
     $city_element = new fbox_text_element();
     $city_element->set_label($this->language['C3_city_name']);
     $city_element->set_name("city");
     $city_element->set_value($this->address->get_city_name() );
     $zip_wrap_element->add_item($city_element);
     
     $country_element   = new 
     fbox_country_select_element();
     $country_element->set_language( $this->language );
//     $country_element->set_address( $this->address );
     $country_element->
     set_label($this->language['C3_country']);
     $country_element->set_name("country_id");
     $country_element->set_value( $this->address->get_country_id() );
     $zip_wrap_element->add_item($country_element);
     
     return
     $street_wrap_element->get_element() .
     $zip_wrap_element->get_element();
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  language
     * @version 1.0
     */
    public function set_language($language)
    {
     $this->language = $language;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  address
     * @version 1.0
     */
    public function set_address($address)
    {
     $this->address = $address;
    }
}?>