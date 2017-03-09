<?php

error_reporting(E_ALL);

/**
 * The member_list_presentation is presented from the right vertical menu, where
 * members are showed in relation to menu.
 *
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
// section 10-30-49-93-1ce7cdec:144734efde7:-8000:0000000000000ACF-includes begin
// section 10-30-49-93-1ce7cdec:144734efde7:-8000:0000000000000ACF-includes end

/* user defined constants */
// section 10-30-49-93-1ce7cdec:144734efde7:-8000:0000000000000ACF-constants begin
// section 10-30-49-93-1ce7cdec:144734efde7:-8000:0000000000000ACF-constants end

/**
 * The member_list_presentation is presented from the right vertical menu, where
 * members are showed in relation to menu.
 *
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class member_list_presentation
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
     $this->get_language()['C3_status'] );
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
     $link_parameter =   
     "&entity_name=" . $this->get_frame()->get_entity_name() .
     "&entity_id=" . $this->get_frame()->get_id();

     $line = new basic_list();
     $line->add_item( $member->get_avatar_icon() );
     $line->add_item( $member->get_link( $link_parameter ));
     $line->add_item( $this->get_language()[$member->get_status_text()] );
     $this->get_table_element_list()->add_item( $line );
     }
    }
}?>