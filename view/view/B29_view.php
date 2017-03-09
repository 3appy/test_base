<?php

error_reporting(E_ALL);

/**
 * //29 show all related tasks
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
// section -64--88--78-21--40e61889:145338282e8:-8000:000000000000161F-includes begin
// section -64--88--78-21--40e61889:145338282e8:-8000:000000000000161F-includes end

/* user defined constants */
// section -64--88--78-21--40e61889:145338282e8:-8000:000000000000161F-constants begin
// section -64--88--78-21--40e61889:145338282e8:-8000:000000000000161F-constants end

/**
 * //29 show all related tasks
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class B29_view
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
     $this->load_language("b29");
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_column3_content()
    {
     $modus = "actual";
     if(isset($_GET["modus"]))
     { $modus = htmlspecialchars( $_GET["modus"] ); }
     
     return
     $this->get_link_header( $modus ) .
     $this->get_task_list( $modus );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  modus
     */
    public function get_link_header($modus)
    {
     $active_amount =
     $this->watched_entity->get_active_receiver_task_count() +
     $this->watched_entity->get_active_author_task_count();
     $archived_amount =
     $this->watched_entity->get_archived_receiver_task_count() +
     $this->watched_entity->get_archived_author_task_count();
     
     $language = $this->get_language_array();
     $active_link =
     "<a href=\"" .
     $_SESSION['B_control_base'] . "B_post_frame.php" .
     "?function=" . (int)29 .
     "&modus=" . "actual" .
     "\">" . $language['active_homework'] .
     " " . "[" . $active_amount . "]" .
     "</a>";
     
     $archived_link =
     "<a href=\"" .
     $_SESSION['B_control_base'] . "B_post_frame.php" .
     "?function=" . (int)29 .
     "&modus=" . "archived" .
     "\">" . $language['archived_homework'] .
     " " . "[" . $archived_amount . "]" .
     "</a>";
     
     if ( $modus == "actual" )
     {
     $str_return =
     "<table class=\"calendar\">" .
     "<thead>" .
     "<tr>" .
     "<th>" . $language['active_homework'] .
     " " . "[" . $active_amount . "]" . "</th>" .
     "<th>"  . $archived_link . "</th>" .
     "</tr>" .
     "</thead>" .
     "</table>";
     }
     else
     {
     $str_return =
     "<table class=\"calendar\">" .
     "<thead>" .
     "<tr>" .
     "<th>" . $active_link . "</th>" .
     "<th>" . $language['archived_homework'] .
     " " . "[" . $archived_amount . "]" . "</th>" .
     "</tr>" .
     "</thead>" .
     "</table>";
     }
     return $str_return;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  modus
     */
    public function get_task_list($modus)
    {
     if( defined('__VIEW__') == FALSE )
     { define('__VIEW__', dirname(dirname(__FILE__))); }
     
     $form_return ="";
     $language = $this->get_language_array();
     
     if ( $modus == "actual" )
     {
     $receiver_model =
     $this->watched_entity->get_active_receiver_task_list();
     $author_model =
     $this->watched_entity->get_active_author_task_list();
     }
     else
     {
     $receiver_model =
     $this->watched_entity->get_archived_receiver_task_list();
     $author_model =
     $this->watched_entity->get_archived_author_task_list();
     }
     
     if ( $receiver_model->get_item_count() > 0 )
     {
     require_once(__VIEW__.
     '/view/presentation/class/class.task_list_author_presentation.php');
     $author_form =
     new task_list_author_presentation( $receiver_model, $language );
     $author_form->set_frame( $this->get_watched_entity() );
     $author_form->set_show_excel_export( FALSE );
     $author_form->define_table();
     $form_return .= $author_form->get_form();
     }
     
     if ( $author_model->get_item_count() > 0 )
     {
     require_once(__VIEW__.
     '/view/presentation/class/class.task_list_receiver_presentation.php');
     $receiver_form =
     new task_list_receiver_presentation( $author_model, $language );
     $receiver_form->set_frame( $this->get_watched_entity() );
     $receiver_form->define_table();
     $receiver_form->set_show_excel_export( FALSE );
     $form_return .= $receiver_form->get_form();
     }
     return $form_return;
    }
}?>