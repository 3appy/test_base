<?php

error_reporting(E_ALL);

/**
 * // 39 control_table_item_form
 * require_once('form_controls/class.control_table_item_form.php');
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * The C - view is the basis of all views where the watched entity is of an
 * of a team:
 *
 * @author Bernd Schröder
 * @version 1.0
 */
require_once('class.C_view.php');
require_once('presentation/class/class.control_time_table_item_list_presentation.php');
require_once('form_controls/class.control_table_item_form.php');
require_once('../../../data/class.control_time_table_item_list.php');


/* user defined includes */
// section 10-30-49--98--41c3492a:1430101fe3e:-8000:0000000000001A1C-includes begin
// section 10-30-49--98--41c3492a:1430101fe3e:-8000:0000000000001A1C-includes end

/* user defined constants */
// section 10-30-49--98--41c3492a:1430101fe3e:-8000:0000000000001A1C-constants begin
// section 10-30-49--98--41c3492a:1430101fe3e:-8000:0000000000001A1C-constants end

/**
 * // 39 control_table_item form
 * require_once('form_controls/class.control_table_item_form.php');
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class C39_view
    extends C_view
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
     $this->load_language("c39");
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_column3_content()
    {
     $column3_content =  "" .
     $this->get_control_table_item_form() .
     $this->get_control_table_item_list();
     return $column3_content;
    }
    /**
     * ;
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_control_table_item_list()
    {
     $language = $this->get_language_array();
     $model = new control_time_table_item_list();
     $model->set_owner_id( $this->watched_entity->get_id() );
     $model->load();

     $form = new control_time_table_item_list_presentation( $model, $language );
     $form->set_post_frame( "C39_post_frame" );
     $form->set_frame( $this->get_watched_entity() );
     $form->define_table();
     return $form->get_form();
    }    
    
    public function get_control_table_item_form()
    {
     $language_array = $this->get_language_array();
     $action = $_SESSION['C_control_base'] . "C39_post_frame.php";

     $timetable = new control_table_item_form($action);

     $timetable->set_language($language_array);
     $timetable->set_header( $language_array['C3_form_header'] );
     return $timetable->get_form();
    }
}?>