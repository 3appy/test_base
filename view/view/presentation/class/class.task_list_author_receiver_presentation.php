<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.task_list_author_receiver_presentation.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 10.04.2014, 14:54:09 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.task_list_presentation.php');

/* user defined includes */
// section 10-30-49-73--68428b49:1454ba0389f:-8000:0000000000001C23-includes begin
// section 10-30-49-73--68428b49:1454ba0389f:-8000:0000000000001C23-includes end

/* user defined constants */
// section 10-30-49-73--68428b49:1454ba0389f:-8000:0000000000001C23-constants begin
// section 10-30-49-73--68428b49:1454ba0389f:-8000:0000000000001C23-constants end

/**
 * Short description of class task_list_author_receiver_presentation
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class task_list_author_receiver_presentation
    extends task_list_presentation
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
     $this->get_language()['author'] );
     $this->get_table_header_list()->add_item(
     $this->get_language()['receiver'] );
     $this->get_table_header_list()->add_item(
     $this->get_language()['C3_task_description'] );
     $this->get_table_header_list()->add_item(
     $this->get_language()['status'] );
     $this->get_table_header_list()->add_item(
     $this->get_language()['view'] );
     $this->get_table_header_list()->add_item(
     $this->get_language()['edit'] );
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
     $task = $model->get_item( $i );
     $line = new basic_list();
     
     if( $_SESSION['watch_id'] == $task->get_author_id())
     // is a teacher viewing the list 
     { $line->add_item( $task->get_author_name() ); }
     else
     { $line->add_item( $task->get_author_link() ); }
     
     if( $_SESSION['watch_id'] == $task->get_receiver_id())
     // is a pupil viewing the list 
     { $line->add_item( $task->get_receiver_name() ); }
     else
     { $line->add_item( $task->get_receiver_link() ); }
     
     $line->add_item( $task->get_task_description_for_listing() );
     $line->add_item( $task->get_status_item() );
     $line->add_item( $this->get_view_item( $task ));
     
     if(( $_SESSION['watch_id'] == $task->get_author_id()) OR
     ( $_SESSION['watch_id'] == $task->get_receiver_id()))
     { $line->add_item( $this->get_edit_item( $task )); }
     // is the author or receiver acting, then he can edit ...
     else
     { $line->add_item( $this->get_forbitten_item()); }
     // otherwise editing is not an option
     
     $this->get_table_element_list()->add_item( $line );
     }
    }
}?>