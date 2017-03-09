<?php

error_reporting(E_ALL);

/**
 * // 38 task form
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

/* user defined includes */
// section 10-30-49--98--41c3492a:1430101fe3e:-8000:0000000000001A1B-includes begin
// section 10-30-49--98--41c3492a:1430101fe3e:-8000:0000000000001A1B-includes end

/* user defined constants */
// section 10-30-49--98--41c3492a:1430101fe3e:-8000:0000000000001A1B-constants begin
// section 10-30-49--98--41c3492a:1430101fe3e:-8000:0000000000001A1B-constants end

/**
 * // 38 task form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class C38_view
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
     $this->load_language("c38");
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
     $this->get_task_form();
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_task_form()
    {
     $return_form = "";
     
     if((isset($_GET["image_link_modus"]) &&
     is_numeric($_GET["image_link_modus"])) AND
     (isset($_GET["task_id"]) && is_numeric($_GET["task_id"])))
     {
     if ( ( $_GET["image_link_modus"] == 1 ) )
     // open in insert mode
     { $return_form = $this->get_insert_task_form(); }
     
     elseif ( $_GET["image_link_modus"] == 2 )
     // open in update mode
     { $return_form = $this->get_update_task_form(); }
     
     elseif ( ( $_GET["image_link_modus"] == 3 ) )
     // open in view mode
     { $return_form = $this->get_view_task_form(); }
     
     return $return_form;
     }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_insert_task_form()
    {
     if( isset($_GET["all"]) && is_string($_GET["all"]) AND
     ( $_GET["all"] == "all" ))
     { return $this->get_author_insert_all_task_form(); }
     else
     { return $this->get_author_insert_selected_task_form(); }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_update_task_form()
    {
     if (( $this->watch_relation == 1 ) OR ( $this->watch_relation == 2 ))
     { return $this->get_author_update_task_form(); }
     else
     { return $this->get_receiver_update_task_form(); }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_view_task_form()
    {
     if (( $this->watch_relation == 1 ) OR ( $this->watch_relation == 2 ))
     { return $this->get_author_view_task_form(); }
     else
     { return $this->get_receiver_view_task_form(); }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_author_insert_all_task_form()
    {
     if( defined('__VIEW_FORM__') == FALSE )
     { define('__VIEW_FORM__', $this->get_root_view_form() ); }
     require_once(__VIEW_FORM__.
     'class.author_insert_all_task_form.php');
     
     // The author is open the task in insert mode
     $language_array = $this->get_language_array();
     
     $action = $_SESSION['C_control_base'] . "C38_all_post_frame.php";
     $task_form = new author_insert_all_task_form($action);
     $task_form->set_language($language_array);
     $task_form->set_header( $language_array['C3_form_header'] );
     return $task_form->get_form();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_author_insert_selected_task_form()
    {
     if( defined('__VIEW_FORM__') == FALSE )
     { define('__VIEW_FORM__', $this->get_root_view_form() ); }
     require_once(__VIEW_FORM__.
     'class.author_insert_selected_task_form.php');
     
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.team.php');
     
     // The author is open the task in insert mode
     $language_array = $this->get_language_array();
     
     $team = new team();
     $team->set_id( $_SESSION['watched_id'] );
     $team->load();
     $member_list = $team->get_approved_member_list();
     
     $action = $_SESSION['C_control_base'] . "C38_selected_post_frame.php";
     $task_form = new author_insert_selected_task_form($action);
     $task_form->set_language($language_array);
     $task_form->set_header( $language_array['C3_form_header'] );
     $task_form->set_pupil_list( $member_list );
     return $task_form->get_form();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_author_update_task_form()
    {
     if( defined('__VIEW_FORM__') == FALSE )
     { define('__VIEW_FORM__', $this->get_root_view_form() ); }
     require_once(__VIEW_FORM__.
     'class.author_update_task_form.php');
     
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.task.php');
     
     // The author is open the task in insert mode
     $language_array = $this->get_language_array();
     
     $new_task = new task();
     $new_task->set_id( $_GET["task_id"] );
     $new_task->load();
     
     $action = $_SESSION['C_control_base'] . "C38_post_frame.php" .
     "?basic_element_function=" . (int)2 .
     "&id=" . $_GET["task_id"];
     $header = "<p>" .
     $language_array['C3_header_1'] . " " .
     $new_task->get_author_name() . " " .
     $language_array['C3_header_2'] . " " .
     $new_task->get_start_date_eu() . " " .
     $language_array['C3_header_3'] . " " .
     $new_task->get_end_date_eu() . " " .
     $language_array['C3_header_4'] . " " .
     "</p>";
     
     $task_form = new author_update_task_form($action);
     $task_form->set_model($new_task);
     $task_form->set_language($language_array);
     $task_form->set_header( $header );
     return $task_form->get_form();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_receiver_update_task_form()
    {
     if( defined('__VIEW_FORM__') == FALSE )
     { define('__VIEW_FORM__', $this->get_root_view_form() ); }
     require_once(__VIEW_FORM__.
     'class.receiver_update_task_form.php');
     
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.task.php');
     
     // The author is open the task in insert mode
     $language_array = $this->get_language_array();
     
     $new_task = new task();
     $new_task->set_id( $_GET["task_id"] );
     $new_task->load();
     
     $action = $_SESSION['C_control_base'] . "C38_post_frame.php" .
     "?basic_element_function=" . (int)2 .
     "&id=" . $_GET["task_id"];
     $header = "<p>" .
     $language_array['C3_header_1'] . " " .
     $new_task->get_author_name() . " " .
     $language_array['C3_header_2'] . " " .
     $new_task->get_start_date_eu() . " " .
     $language_array['C3_header_3'] . " " .
     $new_task->get_end_date_eu() . " " .
     $language_array['C3_header_4'] . " " .
     "</p>";
     
     $task_form = new receiver_update_task_form($action);
     $task_form->set_model($new_task);
     $task_form->set_language($language_array);
     $task_form->set_header( $header );
     return $task_form->get_form();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_author_view_task_form()
    {
     if( defined('__VIEW_FORM__') == FALSE )
     { define('__VIEW_FORM__', $this->get_root_view_form() ); }
     require_once(__VIEW_FORM__.
     'class.author_view_task_form.php');
     
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.task.php');
     
     // the author is open the task in view mode
     $language_array = $this->get_language_array();
     $new_task = new task();
     $new_task->set_id( $_GET["task_id"] );
     $new_task->load();
     
     $action = "";
     $task_form = new author_view_task_form($action);
     $task_form->set_model($new_task);
     $task_form->set_language($language_array);
     $task_form->set_header( "" );
     return $task_form->get_form();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_receiver_view_task_form()
    {
     if( defined('__VIEW_FORM__') == FALSE )
     { define('__VIEW_FORM__', $this->get_root_view_form() ); }
     require_once(__VIEW_FORM__.
     'class.receiver_view_task_form.php');
     
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.task.php');
     
     // the receiver is open the task in view mode
     $language_array = $this->get_language_array();
     $new_task = new task();
     $new_task->set_id( $_GET["task_id"] );
     $new_task->load();
     
     $action = "";
     $task_form = new receiver_view_task_form($action);
     $task_form->set_model($new_task);
     $task_form->set_language($language_array);
     $task_form->set_header( "" );
     return $task_form->get_form();
    }
}?>