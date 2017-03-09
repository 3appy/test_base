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
 * require_once('../../view/presentation/function/class.delete_image_link.php');
 * require_once('../../view/presentation/function/class.edit_image_link.php');
 * require_once('../../view/presentation/function/class.view_image_link.php');
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('../../view/presentation/function/class.func_standard_table_presentation.php');

/* user defined includes */
// section 10-30-45--31--10c39078:146b3b0f931:-8000:0000000000001D48-includes begin
// section 10-30-45--31--10c39078:146b3b0f931:-8000:0000000000001D48-includes end

/* user defined constants */
// section 10-30-45--31--10c39078:146b3b0f931:-8000:0000000000001D48-constants begin
// section 10-30-45--31--10c39078:146b3b0f931:-8000:0000000000001D48-constants end

/**
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class invited_interview_member_presentation
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
     $this->get_language()['C3_interview_time'] );
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
     if( defined('__ROOT__') == FALSE )
     { define('__ROOT__', 
     dirname(dirname(dirname(dirname(dirname(__FILE__)))))); }
     require_once(__ROOT__.'/data/class.member.php');
     require_once(__ROOT__.'/data/generated/class.basic_list.php');
     
     $model = $this->get_list_model();
     $count = $model->get_item_count();
     
     for ($i = 0; $i < $count; $i++)
     {
     $event_member = $model->get_item( $i );
     
     $member = new member();
     $member->set_id( $event_member->get_member_id() );
     $member->load();
     
     $line = new basic_list();
     $line->add_item( $member->get_avatar_icon() );
     $line->add_item( $member->get_link( null )  );
     
     if( $event_member->get_status() == (int)5 )
     {
     $format_class = $event_member->get_format_class();
     $time_slot = $event_member->get_time_slot();
     $line->add_item( $format_class->get_eu_time( $time_slot ) );
     }
     else
     {
     $line->add_item( "..." );
     }
     
     if( $_SESSION['watch_id'] == $member->get_id() )
     { $line->add_item( $this->get_edit_item( $event_member )); }
     // is the author acting, then he can edit ...
     else
     { $line->add_item( $this->get_forbitten_item()); }
     // otherwise editing is not an option
     
     
     $this->get_table_element_list()->add_item( $line );
    }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    
    function get_edit_item($event_member)
    {
     $image_link = new edit_image_link();
     $image_link->set_frame( $this->get_frame() );
     $image_link->set_function_id( (int)20 );
     $image_link->set_item( $event_member );
     return $image_link->get_image_link();
    }
}?>