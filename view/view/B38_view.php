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
 * The B - view is the basis of all views where the watched entity is of an
 * of a member:
 *
 * @author Bernd Schröder
 * @version 1.0
 */
require_once('class.B_view.php');

/* user defined includes */
// section -64--88--78-21--457ecb83:145c8bc0bcf:-8000:00000000000023C5-includes begin
// section -64--88--78-21--457ecb83:145c8bc0bcf:-8000:00000000000023C5-includes end

/* user defined constants */
// section -64--88--78-21--457ecb83:145c8bc0bcf:-8000:00000000000023C5-constants begin
// section -64--88--78-21--457ecb83:145c8bc0bcf:-8000:00000000000023C5-constants end

/**
 * // 38 task form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class B38_view
    extends B_view
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function __construct()
    {
     parent::__construct();
     $this->load_language("b38");
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
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
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_task_form()
    {
     $return_form = "";
     
     if((isset($_GET["image_link_modus"]) &&
     is_numeric($_GET["image_link_modus"])) AND
     (isset($_GET["task_id"]) && is_numeric($_GET["task_id"])))
     {
     if ( $_GET["image_link_modus"] == 2 )
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
    public function get_update_task_form()
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.task.php');
     
     $watch_entity_id = $this->get_watch_entity()->get_id();
     $task = new task();
     $task->set_id( $_GET["task_id"] );
     $task->load();
     
     if( $watch_entity_id == $task->get_receiver_id() )
     { return $this->get_receiver_update_task_form( $task); }
     elseif( $watch_entity_id == $task->get_author_id() )
     { return $this->get_author_update_task_form( $task ); }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_view_task_form()
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.task.php');
     
     $watch_entity_id = $this->get_watch_entity()->get_id();
     $task = new task();
     $task->set_id( $_GET["task_id"] );
     $task->load();
     
     if( $watch_entity_id == $task->get_receiver_id() )
     { return $this->get_receiver_view_task_form( $task ); }
     elseif( $watch_entity_id == $task->get_author_id() )
     { return $this->get_author_view_task_form( $task ); }
     else
     { return $this->get_follower_view_task_form( $task ); }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  task
     */
    public function get_receiver_update_task_form($task)
    {
     if( defined('__VIEW_FORM__') == FALSE )
     { define('__VIEW_FORM__', $this->get_root_view_form() ); }
     require_once(__VIEW_FORM__.
     'class.receiver_update_task_form.php');
     
     // The author is open the task in insert mode
     $language_array = $this->get_language_array();
     
     $action = $_SESSION['C_control_base'] . "B38_post_frame.php" .
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
     $task_form->set_model($task);
     $task_form->set_language($language_array);
     $task_form->set_header( $header );
     return $task_form->get_form();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  task
     */
    public function get_author_update_task_form($task)
    {
     if( defined('__VIEW_FORM__') == FALSE )
     { define('__VIEW_FORM__', $this->get_root_view_form() ); }
     require_once(__VIEW_FORM__.
     'class.author_update_task_form.php');
     
     // The author is open the task in insert mode
     $language_array = $this->get_language_array();
     
     $action = $_SESSION['C_control_base'] . "B38_post_frame.php" .
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
     $task_form->set_model($task);
     $task_form->set_language($language_array);
     $task_form->set_header( $header );
     return $task_form->get_form();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  task
     */
    public function get_receiver_view_task_form($task)
    {
     if( defined('__VIEW_FORM__') == FALSE )
     { define('__VIEW_FORM__', $this->get_root_view_form() ); }
     require_once(__VIEW_FORM__.
     'class.receiver_view_task_form.php');
     
     // the receiver is open the task in view mode
     $language_array = $this->get_language_array();
     
     $action = "";
     $task_form = new receiver_view_task_form($action);
     $task_form->set_model($task);
     $task_form->set_language($language_array);
     $task_form->set_header( "" );
     return $task_form->get_form();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  task
     */
    public function get_author_view_task_form($task)
    {
     if( defined('__VIEW_FORM__') == FALSE )
     { define('__VIEW_FORM__', $this->get_root_view_form() ); }
     require_once(__VIEW_FORM__.
     'class.author_view_task_form.php');
     
     // the author is open the task in view mode
     $language_array = $this->get_language_array();
     
     $action = "";
     $task_form = new author_view_task_form($action);
     $task_form->set_model($task);
     $task_form->set_language($language_array);
     $task_form->set_header( "" );
     return $task_form->get_form();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  task
     */
    public function get_follower_view_task_form($task)
    {
     if( defined('__VIEW_FORM__') == FALSE )
     { define('__VIEW_FORM__', $this->get_root_view_form() ); }
     require_once(__VIEW_FORM__.
     'class.follower_view_task_form.php');
     
     // the receiver is open the task in view mode
     $language_array = $this->get_language_array();
     
     $action = "";
     $task_form = new follower_view_task_form($action);
     $task_form->set_model($task);
     $task_form->set_language($language_array);
     $task_form->set_header( "" );
     return $task_form->get_form();
    }
}?>