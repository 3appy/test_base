<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.fbox_select_table_item_element.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 04.01.2017, 11:34:03 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include fbox_select_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_select_element.php');

/* user defined includes */
// section 10-5-24--17--7ebbc626:15964f14ba2:-8000:0000000000003661-includes begin
// section 10-5-24--17--7ebbc626:15964f14ba2:-8000:0000000000003661-includes end

/* user defined constants */
// section 10-5-24--17--7ebbc626:15964f14ba2:-8000:0000000000003661-constants begin
// section 10-5-24--17--7ebbc626:15964f14ba2:-8000:0000000000003661-constants end

/**
 * Short description of class fbox_select_table_item_element
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_select_table_item_element
    extends fbox_select_element
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function define_model()
    {
     if( defined('__VIEW_CONTROL__') == FALSE )
     { define('__VIEW_CONTROL__', $this->get_root_view_control() ); }
     require_once(__VIEW_CONTROL__. 'class.fbox_model_element.php');
     
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.time_table_item_list_three_week.php');
     
     $timezone = new DateTimeZone('Europe/Berlin' );
     $now = new DateTime( "now",  $timezone);
     
     $table_item_list = new time_table_item_list_three_week();
     $table_item_list->set_owner_id( $_SESSION['watched_id'] );
     $table_item_list->set_year( $now->format("Y") );
     $table_item_list->set_month( $now->format("m") );
     $table_item_list->set_day( $now->format("d") );
     $table_item_list->load();
        
     $model_item = new fbox_model_element();
     $model_item->set_id( (int)0 );
     $model_item->set_text( $this->language['C3_select_time'] );
     $this->model->add_item( $model_item );
     
     for ($i = 0; $i < $table_item_list->get_item_count(); $i++)
     {
     $table_item = $table_item_list->get_item( $i );
     $text =
     $this->language['day_' . $table_item->get_day_number() ] .
     " " .
     $table_item->get_selection_date() .
     ". " .
     $table_item->get_time_number() .  "." . $this->language['hour'];
     
     $model_item = new fbox_model_element();
     $model_item->set_id( $table_item->get_id() );
     $model_item->set_text( $text );
     $this->model->add_item( $model_item );
     }
    }
}?>