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
// section 10-5-26--54--ba40285:1535f795941:-8000:00000000000051F1-includes begin
// section 10-5-26--54--ba40285:1535f795941:-8000:00000000000051F1-includes end

/* user defined constants */
// section 10-5-26--54--ba40285:1535f795941:-8000:00000000000051F1-constants begin
// section 10-5-26--54--ba40285:1535f795941:-8000:00000000000051F1-constants end

/**
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class invited_interview_admin_presentation
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
     $this->get_language()['C3_parent'] );
     $this->get_table_header_list()->add_item(
     $this->get_language()['C3_pupil'] );
     $this->get_table_header_list()->add_item(
     $this->get_language()['C3_interview_time'] );
     $this->get_table_header_list()->add_item(
     $this->get_language()['C3_accept'] );
     $this->get_table_header_list()->add_item(
     $this->get_language()['C3_changed'] );     
    }
    
    public function define_cvs_header()
    {
     $this->get_cvs_header_list()->add_item(
     $this->get_language()['C3_parent'] );
     $this->get_cvs_header_list()->add_item(
     $this->get_language()['C3_pupil'] );
     $this->get_cvs_header_list()->add_item(
     $this->get_language()['C3_interview_time'] );
    }
    /**
     *
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
     
     $parent = new member();
     $parent->set_id( $event_member->get_member_id() );
     $parent->load();
     
     $pupil = new member();
     $pupil->set_id( $event_member->get_followed_id() );
     $pupil->load();

     $line = new basic_list();
     // Eltern - Teil 
     $line->add_item( $parent->get_link( null ) . "<br />" . $parent->get_avatar_icon() );
     // Schüler - Teil
     $line->add_item( $pupil->get_link( null ) . "<br />" . $pupil->get_avatar_icon() );

     if( $event_member->get_status() == (int)5 )
     {
     $format_class = $event_member->get_format_class();
     
     $time_slot = $event_member->get_time_slot();
     $line->add_item( $format_class->get_eu_time( $time_slot ) );
     $line->add_item( $event_member->get_relation_item() );
     $requested = $event_member->get_requested();
     $line->add_item( $format_class->get_eu_time( $requested ) );
     }
     else
     {
     $line->add_item( "..." );
     $line->add_item( "..." );
     $line->add_item( "..." );         
     }
     $this->get_table_element_list()->add_item( $line );
    }
    }
    
    public function define_cvs_element()
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
     $line->add_item( $member->get_forename() . " " . $member->get_name() );
     $line->add_item( $this->get_eu_time( $event_member->get_time_slot()));
     $this->get_cvs_element_list()->add_item( $line );
    }
    }
    
}?>