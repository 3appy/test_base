<?php

error_reporting(E_ALL);

/**
 * untitledModel - task_list_receiver_presentation.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 08.04.2014, 17:34:11 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '4')) {
    die('This file was generated for PHP 4');
}

/**
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('../../view/presentation/class/class.task_list_presentation.php');

/* user defined includes */
// section -64--88--78-21-6e3051b2:14541ccdb4c:-8000:0000000000000B80-includes begin
// section -64--88--78-21-6e3051b2:14541ccdb4c:-8000:0000000000000B80-includes end

/* user defined constants */
// section -64--88--78-21-6e3051b2:14541ccdb4c:-8000:0000000000000B80-constants begin
// section -64--88--78-21-6e3051b2:14541ccdb4c:-8000:0000000000000B80-constants end

/**
 * Short description of class task_list_receiver_presentation
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class task_list_receiver_presentation
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
    function define_table_header()
    {
     $this->get_table_header_list()->add_item(
     $this->get_language()['receiver'] );
     $this->get_table_header_list()->add_item(
     $this->get_language()['team'] );
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
    function define_table_element()
    {
     $model = $this->get_list_model();
     $count = $model->get_item_count();
     for ($i = 0; $i < $count; $i++)
     {
     $task = $model->get_item( $i );
     $line = new basic_list();
     
     $line->add_item( $task->get_receiver_link() );    
     $line->add_item( $task->get_team_link() );
     $line->add_item( $task->get_task_description_for_listing() );
     $line->add_item( $task->get_status_item() );
     $line->add_item( $this->get_view_item( $task ));
     
     if( $_SESSION['watch_id'] == $task->get_author_id()) 
     { $line->add_item( $this->get_edit_item( $task )); }
     // is the author acting, then he can edit ...
     else
     { $line->add_item( $this->get_forbitten_item()); }
     // otherwise editing is not an option
     
     $this->get_table_element_list()->add_item( $line );
     }
    }
}?>