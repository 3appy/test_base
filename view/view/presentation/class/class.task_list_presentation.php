<?php

error_reporting(E_ALL);

/**
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '4')) {
    die('This file was generated for PHP 4');
}

require_once('../../view/presentation/function/class.func_standard_table_presentation.php');

/* user defined includes */
// section -64--88--78-21--10f8f4ca:144bd5e4be0:-8000:0000000000000B3D-includes begin
// section -64--88--78-21--10f8f4ca:144bd5e4be0:-8000:0000000000000B3D-includes end

/* user defined constants */
// section -64--88--78-21--10f8f4ca:144bd5e4be0:-8000:0000000000000B3D-constants begin
// section -64--88--78-21--10f8f4ca:144bd5e4be0:-8000:0000000000000B3D-constants end

/**
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class task_list_presentation
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
    function define_table_header()
    {
     ;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    function define_table_element()
    {
     ;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  task
     */
    function get_view_item($task)
    {
     $image_link = new view_image_link();
     $image_link->set_frame( $this->get_frame() );
     $image_link->set_function_id( (int)38 );
     $image_link->set_item( $task );
     return $image_link->get_image_link();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  task
     */
    function get_edit_item($task)
    {
     $image_link = new edit_image_link();
     $image_link->set_frame( $this->get_frame() );
     $image_link->set_function_id( (int)38 );
     $image_link->set_item( $task );
     return $image_link->get_image_link();
    }
}?>