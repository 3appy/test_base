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
// section 10-30-49-93-1fd98e3f:14468ae66e4:-8000:00000000000009A0-includes begin
// section 10-30-49-93-1fd98e3f:14468ae66e4:-8000:00000000000009A0-includes end

/* user defined constants */
// section 10-30-49-93-1fd98e3f:14468ae66e4:-8000:00000000000009A0-constants begin
// section 10-30-49-93-1fd98e3f:14468ae66e4:-8000:00000000000009A0-constants end

/**
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class event_member_list_presentation
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
     $this->get_language()['C3_name'] );
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
     $link_parameter =
     "&entity_name=" . $this->get_frame()->get_entity_name() .
     "&entity_id=" . $this->get_frame()->get_id();
     
     $line = new basic_list();
     $line->add_item( $member->get_avatar_icon() );
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
     $line = new basic_list();
     $line->add_item( $member->get_forename() . " " . $member->get_name() );
     $this->get_cvs_element_list()->add_item( $line );
     }
    }
}?>