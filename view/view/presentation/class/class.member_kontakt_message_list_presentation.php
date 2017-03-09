<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.member_kontakt_message_list_presentation.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 15.06.2015, 17:04:37 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

require_once('../../view/presentation/class/class.task_list_presentation.php');

/* user defined includes */
// section 10-30-49--125-20b8818d:14de7ce4264:-8000:0000000000000BBC-includes begin
// section 10-30-49--125-20b8818d:14de7ce4264:-8000:0000000000000BBC-includes end

/* user defined constants */
// section 10-30-49--125-20b8818d:14de7ce4264:-8000:0000000000000BBC-constants begin
// section 10-30-49--125-20b8818d:14de7ce4264:-8000:0000000000000BBC-constants end

/**
 * Short description of class member_kontakt_message_list_presentation
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class member_kontakt_message_list_presentation
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
     $this->get_language()['C3_all_messages'] );
     $this->get_table_header_list()->add_item(
     $this->get_language()['C3_unread_messages'] );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
/*change*/ 
    public function define_table_element()
    {
     $model = $this->get_list_model();
     $count = $model->get_item_count();
     for ($i = 0; $i < $count; $i++)
     {
     $member = $model->get_item( $i );
     
     $line = new basic_list();
     $line->add_item( $member->get_avatar_icon() );
     
     $member_link = $member->get_link
     ( "&entity_name=" . $this->get_frame()->get_entity_name() .
     "&entity_id=" . $this->get_frame()->get_id() );
     

     $unread = $member->get_receiver_unread_author_message_list_count();     
     if( $unread == (int)0 )
     { $message_text = $this->get_language()['C3_no_messages']; }
     
     else
     {
     $unread_list = $member->get_receiver_unread_author_message_list();
     $message = $unread_list->get_item( (int)0 );
     
     if( $unread == (int)1 ) 
     { 
     $message_text = "(" . $unread . ") " . 
     $this->get_language()['C3_no_1_message'] . "<br>" . 
     substr( $message->get_text(), 0, 40 ) . " ..."; 
     }
     else
     { 
     $message_text = "(" . $unread . ") " .
     $this->get_language()['C3_no_2_message'] . "<br>" .
     substr( $message->get_text(), 0, 40 ) . " ..."; 
     }
     }
     
     $message_link =
     "<a href=\"" .
     $_SESSION['B_control_base'] . "B_post_frame.php" .
     "?function=" . (int)500 .
     "&author_id=" . $member->get_id() . "\">" .
     $message_text .
     "</a> ";
     
     $line->add_item( $member_link );
     $line->add_item( $member->get_member_message_list_count() );
     $line->add_item( $message_link );
     $this->get_table_element_list()->add_item( $line );
     }
    }
}?>