<?php

error_reporting(E_ALL);

/**
 * // definiert, zu wieviel % die Hausaufgaben fertig gestellt sind
 * // Gebraucht wird dieses Control ist der Definition der Hausaufgaben und in
 * // Beantwortung der Hausaufgaben
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
// section 10-5-24--17--7ebbc626:15964f14ba2:-8000:000000000000367C-includes begin
// section 10-5-24--17--7ebbc626:15964f14ba2:-8000:000000000000367C-includes end

/* user defined constants */
// section 10-5-24--17--7ebbc626:15964f14ba2:-8000:000000000000367C-constants begin
// section 10-5-24--17--7ebbc626:15964f14ba2:-8000:000000000000367C-constants end

/**
 * // definiert, zu wieviel % die Hausaufgaben fertig gestellt sind
 * // Gebraucht wird dieses Control ist der Definition der Hausaufgaben und in
 * // Beantwortung der Hausaufgaben
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_select_status_element
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
     
     $item = new fbox_model_element();
     $item->set_id( (int)0 );
     $item->set_text( $this->language['C3_select_status'] );
     $this->model->add_item( $item );
          
     for ($i = 1; $i <= 3; $i++)
     {
     $item = new fbox_model_element();
     $item->set_id( $i );
     $item->set_text( $this->language['selectstatus_' . $i] );
     $this->model->add_item( $item );
     }
    }
}?>