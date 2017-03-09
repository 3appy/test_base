<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.control_time_table_item_list_presentation.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 24.03.2014, 09:35:10 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
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
// section -64--88--78-21--10f8f4ca:144bd5e4be0:-8000:0000000000000B3E-includes begin
// section -64--88--78-21--10f8f4ca:144bd5e4be0:-8000:0000000000000B3E-includes end

/* user defined constants */
// section -64--88--78-21--10f8f4ca:144bd5e4be0:-8000:0000000000000B3E-constants begin
// section -64--88--78-21--10f8f4ca:144bd5e4be0:-8000:0000000000000B3E-constants end

/**
 * Short description of class control_time_table_item_list_presentation
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class control_time_table_item_list_presentation
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
     $this->get_language()['start_week'] );
     $this->get_table_header_list()->add_item(
     $this->get_language()['start_year'] );
     $this->get_table_header_list()->add_item(
     $this->get_language()['end_week'] );
     $this->get_table_header_list()->add_item(
     $this->get_language()['end_year'] );
     $this->get_table_header_list()->add_item(
     $this->get_language()['day_number'] );
     $this->get_table_header_list()->add_item(
     $this->get_language()['time_number'] );
     $this->get_table_header_list()->add_item(
     $this->get_language()['delete'] );
     $this->get_table_header_list()->add_item(
     $this->get_language()['generate'] );
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
     $table_item = $model->get_item( $i );
     $line = new basic_list();
     $line->add_item( $table_item->get_start_week() );
     $line->add_item( $table_item->get_start_year() );
     $line->add_item( $table_item->get_end_week() );
     $line->add_item( $table_item->get_end_year() );
     $line->add_item( $this->get_language()
     ['day_' . $table_item->get_day_number() ] );
     $line->add_item( $table_item->get_time_number() );
     
     $line->add_item( $this->get_delete_item(
     $this->get_frame(), $table_item, $this->get_post_frame() ));

     if( $table_item->get_generated() )
     { $line->add_item( $this->get_forbitten_item()); }
     else
     { $line->add_item( $this->get_generate_item(
     $this->get_frame(), $table_item, $this->get_post_frame() )); }

     $this->get_table_element_list()->add_item( $line );
     }
    }
}?>