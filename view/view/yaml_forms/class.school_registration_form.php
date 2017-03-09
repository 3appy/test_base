<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.school_registration_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 20.01.2016, 11:52:21 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include standard_form
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.standard_form.php');

/* user defined includes */
// section 10-30--8--106--5cd99d76:1522fed5592:-8000:0000000000000CCF-includes begin
// section 10-30--8--106--5cd99d76:1522fed5592:-8000:0000000000000CCF-includes end

/* user defined constants */
// section 10-30--8--106--5cd99d76:1522fed5592:-8000:0000000000000CCF-constants begin
// section 10-30--8--106--5cd99d76:1522fed5592:-8000:0000000000000CCF-constants end

/**
 * Short description of class school_registration_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class school_registration_form
    extends standard_form
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_element_list()
    {
     if( defined('__VIEW_CONTROL__') == FALSE )
     { define('__VIEW_CONTROL__', $this->get_root_view_control() ); }

     require_once(__VIEW_CONTROL__.'class.fbox_text_element.php');
     require_once(__VIEW_CONTROL__.'class.fbox_wrap_element.php');
     require_once(__VIEW_CONTROL__.'class.fbox_select_salutation_element.php');
     require_once(__VIEW_CONTROL__.'class.fbox_select_school_size.php');
     require_once(__VIEW_CONTROL__.'class.fbox_select_country_element.php');
     require_once(__VIEW_CONTROL__.'class.fbox_check_element.php');
     require_once(__VIEW_CONTROL__.'class.fbox_check_condition_list.php');
     
     
     // -----------------------school ----------------------
     
     $school_name = new fbox_text_element();
     $school_name->set_label($this->language['C3_school_name']);
     $school_name->set_name("school_name");
     $school_name->set_value("");
     $school_name->set_requested( TRUE );
     
     $size = new fbox_select_school_size();
     $size->set_language( $this->language );
     $size->set_label($this->language['C3_schoolsize']);
     $size->set_name("schoolsize");
     $size->set_value( (int)0 );
     $size->set_requested( TRUE );
     $size->define_model();
     
     $street_wrap_element = new fbox_wrap_element();
     $street_name = new fbox_text_element();
     $street_name->set_label($this->language['C3_street_name']);
     $street_name->set_name("school_street_name");
     $street_name->set_value("");
     $street_wrap_element->add_item($street_name);
     
     $house_number = new fbox_text_element();
     $house_number->set_label($this->language['C3_house_number']);
     $house_number->set_name("school_house_number");
     $house_number->set_value("");
     $street_wrap_element->add_item($house_number);
     
     $zip_wrap_element = new fbox_wrap_element();
     $plz_element = new fbox_text_element();
     $plz_element->set_label( $this->language['C3_zip_code']);
     $plz_element->set_name("school_plz");
     $plz_element->set_value("");
     $zip_wrap_element->add_item($plz_element);
     
     $city_element = new fbox_text_element();
     $city_element->set_label($this->language['C3_city_name']);
     $city_element->set_name("school_city");
     $city_element->set_value("");
     $zip_wrap_element->add_item($city_element);
     
     $country = new fbox_select_country_element();
     $country->set_language( $this->language );
     $country->set_label($this->language['C3_country']);
     $country->set_name("country_id");
     $country->set_value("");
     $country->define_model();
     $zip_wrap_element->add_item($country);
     
     // ----------------------- rector ----------------------
     
     $rec_salutation = new fbox_select_salutation_element();
     $rec_salutation->set_language( $this->language );
     $rec_salutation->set_label($this->language['C3_salution']);
     $rec_salutation->set_name("rec_salution");
     $rec_salutation->set_value( (int)0 );
     $rec_salutation->define_model();
     
     
     $rec_name_wrap_element = new fbox_wrap_element();
     $rec_forname = new fbox_text_element();
     $rec_forname->set_label($this->language['C3_forname']);
     $rec_forname->set_name("rec_forname");
     $rec_forname->set_value( "" );
     $rec_forname->set_requested( TRUE );
     $rec_name_wrap_element->add_item($rec_forname);
     
     $rec_surname = new fbox_text_element();
     $rec_surname->set_label($this->language['C3_surname']);
     $rec_surname->set_name("rec_surname");
     $rec_surname->set_value( "" );
     $rec_surname->set_requested( TRUE );
     $rec_name_wrap_element->add_item($rec_surname);
     
     $rec_contact_wrap_element = new fbox_wrap_element();
     $rec_mail = new fbox_text_element();
     $rec_mail->set_label($this->language['C3_mail']);
     $rec_mail->set_name("rec_mail");
     $rec_mail->set_value( "" );
     $rec_mail->set_requested( TRUE );
     $rec_contact_wrap_element->add_item($rec_mail);
     
     $rec_phone = new fbox_text_element();
     $rec_phone->set_label($this->language['C3_phone']);
     $rec_phone->set_name("rec_phone");
     $rec_phone->set_value( "" );
     $rec_contact_wrap_element->add_item($rec_phone);
     
     // ----------------------- admin ----------------------
     
     $check_rec_adm = new fbox_check_element();
     $check_rec_adm->set_label( $this->language['C3_rec_adm'] );
     $check_rec_adm->set_name( "rec_adm" );
     
     $adm_salutation = new fbox_select_salutation_element();
     $adm_salutation->set_language( $this->language );
     $adm_salutation->set_label($this->language['C3_salution']);
     $adm_salutation->set_name("adm_salution");
     $adm_salutation->set_value( (int)0 );
     $adm_salutation->define_model();
     
     $adm_name_wrap_element = new fbox_wrap_element();
     $adm_forname = new fbox_text_element();
     $adm_forname->set_label($this->language['C3_forname']);
     $adm_forname->set_name("adm_forname");
     $adm_forname->set_value( "" );
     $adm_forname->set_requested( TRUE );
     $adm_name_wrap_element->add_item($adm_forname);
     
     $adm_surname = new fbox_text_element();
     $adm_surname->set_label($this->language['C3_surname']);
     $adm_surname->set_name("adm_surname");
     $adm_surname->set_value( "" );
     $adm_surname->set_requested( TRUE );
     $adm_name_wrap_element->add_item($adm_surname);
     
     $adm_contact_wrap_element = new fbox_wrap_element();
     $adm_mail = new fbox_text_element();
     $adm_mail->set_label($this->language['C3_mail']);
     $adm_mail->set_name("adm_mail");
     $adm_mail->set_value( "" );
     $adm_mail->set_requested( TRUE );
     $adm_contact_wrap_element->add_item($adm_mail);
     
     $adm_phone = new fbox_text_element();
     $adm_phone->set_label($this->language['C3_phone']);
     $adm_phone->set_name("adm_phone");
     $adm_phone->set_value( "" );
     $adm_contact_wrap_element->add_item($adm_phone);
     
     // ------------------agb - nutzung----------------------
     $accept_list = new fbox_check_condition_list();
     
     $accept_list->set_language( $this->language );
     $accept_list->set_name("accept[]");
     $accept_list->set_requested( TRUE );
     $accept_list->define_model();

     return
     "<h6 class=\"ym-fbox-heading\">" . 
     $this->language['C3_school_data'] . "</h6>" .
     "<section class=\"box info\">" .
     "<br />" . "<p>" . $this->language['C3_annotation'] . 
     "</p>" . "</section>" .
     $school_name->get_element() .
     $size->get_element() .
     $street_wrap_element->get_element() .
     $zip_wrap_element->get_element() .
     "<hr>" .
     "<h6 class=\"ym-fbox-heading\">" . 
     $this->language['C3_rector_data'] . "</h6>" .
     $rec_salutation->get_element() .
     $rec_name_wrap_element->get_element() .
     $rec_contact_wrap_element->get_element() .
     "<hr>" .
     "<h6 class=\"ym-fbox-heading\">" . 
     $this->language['C3_admin_data'] . "</h6>" .
     $check_rec_adm->get_element() .
     "<hr>" .
     $adm_salutation->get_element() .
     $adm_name_wrap_element->get_element() .
     $adm_contact_wrap_element->get_element() .
     "<hr>" .
     "<h6 class=\"ym-fbox-heading\">" . 
     $this->language['C3_legis_data'] . "</h6>" .
     $accept_list->get_element();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_button()
    {
     if( defined('__VIEW_CONTROL__') == FALSE )
     { define('__VIEW_CONTROL__', $this->get_root_view_control() ); }
     require_once(__VIEW_CONTROL__.'class.send_reset_button_group.php');
     
     $button = new send_reset_button_group();
     $button->set_send($this->language['C3_send_button']);
     $button->set_reset($this->language['C3_reset_button']);
     return $button->get_button();
    }
}?>