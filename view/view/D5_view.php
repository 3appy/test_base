<?php

error_reporting(E_ALL);

/**
 * //5  show member data ( only team and event )
 *
 * @author Bernd Schröder
 * @version 1.0
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * The C - view is the basis of all views where the watched entity is of an
 * of an event:
 *
 * @author Bernd Schröder
 * @version 1.0
 */
require_once('class.D_view.php');

/* user defined includes */
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001D87-includes begin
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001D87-includes end

/* user defined constants */
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001D87-constants begin
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001D87-constants end

/**
 * //5  show member data ( only team and event )
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class D5_view
    extends D_view
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function __construct()
    {
     parent::__construct();
     $this->load_language("d5");
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_D3_content()
    {
     // is this invitation an interview
     if ( $this->watched_entity->get_type() == (int)3 )
     {
     // is the viewer an admin
     if ( $this->watch_relation == (int)2 )
     {
     $column3_content =
     $this->get_interview_list_admin_presentation();
     }
     // it is a simple member
     else
     {
     $column3_content =  
     $this->get_interview_list_member_presentation();
     }
     }
     // it is an invitation event
     else
     {
     $column3_content =
     $this->get_event_member_list_presentation();
     }
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_interview_list_admin_presentation()
    {
     if( defined('__VIEW__') == FALSE )
     { define('__VIEW__', dirname(dirname(__FILE__))); }
     require_once(__VIEW__.'/view/presentation/class/' . 
     'class.invited_interview_admin_presentation.php');
     
     $model = $this->watched_entity->get_interview_event_members();
     
     $return_str = "";
     
     if ( $model->get_item_count() > (int)0 )
     {
     $language = $this->language_array;
     $form = new invited_interview_admin_presentation( $model, $language );
     $form->set_action( $_SESSION['D_control_base'] . "D5_post_frame.php" );
     $form->set_frame( $this->get_watched_entity() );
     //$form->set_show_excel_export( TRUE );
     $form->define_table();
     $return_str = $form->get_form();
     }
     return $return_str;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_interview_list_member_presentation()
    {
     if( defined('__VIEW__') == FALSE )
     { define('__VIEW__', dirname(dirname(__FILE__))); }
     require_once(__VIEW__.'/view/presentation/class/' . 
     'class.invited_interview_member_presentation.php');
     
     $member_id = $this->get_watch_entity()->get_id(); 
     $model = $this->watched_entity->
     get_my_interview_event_members( $member_id );
     
     $return_str = "";
     
     if ( $model->get_item_count() > (int)0 )
     {
     $language = $this->language_array;
     $form = new invited_interview_member_presentation( $model, $language );
     $form->set_frame( $this->get_watched_entity() );
     $form->define_table();
     $return_str = $form->get_form();
     }
     return $return_str;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_event_member_list_presentation()
    {
     if( defined('__VIEW__') == FALSE )
     { define('__VIEW__', dirname(dirname(__FILE__))); }
     require_once(__VIEW__.'/view/presentation/class/' .
     'class.event_member_list_presentation.php');
     
     $model = $this->watched_entity->get_member_list();
     $return_str = "";
     
     if ( $model->get_item_count() > (int)0 )
     {
     $language = $this->get_language_array();
     $form = new event_member_list_presentation( $model, $language );
     $form->set_frame( $this->get_watched_entity() );
     $form->define_table();
     $return_str = $form->get_form();
     }
     return $return_str;
    }
}?>