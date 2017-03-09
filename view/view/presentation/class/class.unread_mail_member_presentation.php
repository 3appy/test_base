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
// section 10-30-49-93-6a9f5eee:14472e50fe2:-8000:0000000000000AC8-includes begin
// section 10-30-49-93-6a9f5eee:14472e50fe2:-8000:0000000000000AC8-includes end

/* user defined constants */
// section 10-30-49-93-6a9f5eee:14472e50fe2:-8000:0000000000000AC8-constants begin
// section 10-30-49-93-6a9f5eee:14472e50fe2:-8000:0000000000000AC8-constants end

/**
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class unread_mail_member_presentation
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
     $this->get_language()['C3_text'] );
     $this->get_table_header_list()->add_item(
     $this->get_language()['C3_written_stamp'] );
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
     $message = $model->get_item( $i );
     
     $author = new member();
     $author->set_id( $message->get_author_id() );
     $author->load();
     
     $message_link = "" .
     "<a href=\"" .
     $_SESSION['B_control_base'] . "B_post_frame.php" .
     "?function=" . (int)500 . 
     "&author_id=" . $author->get_id() . "\">" .
     substr( $message->get_text(), 0, 20 ) . " ..." .
     "</a> ";
     
     $line = new basic_list();
     $line->add_item( $author->get_avatar_icon() );
     $line->add_item( $author->get_link( null )  );
     $line->add_item( $message_link );
     $line->add_item( $message->get_written_stamp() );
     $this->get_table_element_list()->add_item( $line );
     }
    }
}?>