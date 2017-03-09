<?php

error_reporting(E_ALL);

/**
 * require_once('../../../data/class.time_table_item_list_three_week.php');
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
require_once('../../../data/class.time_table_item_list_three_week.php');

/* user defined includes */
// section 10-30-49--98--6eee8edd:142dc97b419:-8000:0000000000000F9A-includes begin
// section 10-30-49--98--6eee8edd:142dc97b419:-8000:0000000000000F9A-includes end

/* user defined constants */
// section 10-30-49--98--6eee8edd:142dc97b419:-8000:0000000000000F9A-constants begin
// section 10-30-49--98--6eee8edd:142dc97b419:-8000:0000000000000F9A-constants end

/**
 * require_once('../../../data/class.time_table_item_list_three_week.php');
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_table_item_select_element
    extends fbox_select_element
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  value
     */
    public function load($value)
    {
     $return_string = "";
     
     $item_list = new time_table_item_list_three_week();
     $timezone = new DateTimeZone('Europe/Berlin' );
     $now = new DateTime( "now",  $timezone);
     $item_list->set_owner_id( $_SESSION['watched_id'] );
     $item_list->set_year( $now->format("Y") );
     $item_list->set_month( $now->format("m") );
     $item_list->set_day( $now->format("d") );
     $item_list->load();
     
     $count = $item_list->get_item_count();
     $return_string = "";
     if( $this->value == 0)
     {
     $return_string =
     "<option value=\"0\" selected=\"selected\"" .
     "disabled=\"disabled\">" .
     $this->language['C3_select_time'] .
     "</option>";
     }
     for ($i = 0; $i < $count; $i++)
     {
     $item = $item_list->get_item( $i );
     if( $item->get_id() ==  $this->value )
     {
     $return_string = $return_string .
     "<option value=\"" .
     $item->get_id() .
     "\" selected=\"selected\" >" .
     $this->language['day_' . $item->get_day_number() ] .
     " " .
     $item->get_selection_date() .
     ". " .
     $item->get_time_number() .  "." . $this->language['hour'] .
     "</option>";
     }
     else
     {
     $return_string = $return_string .
     "<option value=\"" .
     $item->get_id() .
     "\">" .
     $this->language['day_' . $item->get_day_number() ] .
     " " .
     $item->get_selection_date() .
     ". " .
     $item->get_time_number() .  "." . $this->language['hour'] .
     "</option>";
     }
     }
     return $return_string;
    }
}?>