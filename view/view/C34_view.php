<?php

error_reporting(E_ALL);

/**
 * //34 show all related events
 * require_once('class_views/class.event_list_presentation.php');
 *
 * @author Bernd Schröder
 * @version 1.0
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
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001E3C-includes begin
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001E3C-includes end

/* user defined constants */
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001E3C-constants begin
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001E3C-constants end

/**
 * //34 show all related events
 * require_once('class_views/class.event_list_presentation.php');
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class C34_view
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
     $this->load_language("c34");
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_column3_content()
    {
     $modus = "actual";
     if(isset($_GET["modus"]))
     { $modus = htmlspecialchars( $_GET["modus"] ); }
     
     return
     $this->get_link_header( $modus ) .
     $this->get_event_list_presentation( $modus );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  modus
     */
    public function get_link_header($modus)
    {
     $language = $this->get_language_array();
     $active_link =
     "<a href=\"" .
     $_SESSION['C_control_base'] . "C_post_frame.php" .
     "?function=" . (int)34 .
     "&modus=" . "actual" .
     "\">" . $language['active_event'] .
     "</a>";
     
     $archived_link =
     "<a href=\"" .
     $_SESSION['C_control_base'] . "C_post_frame.php" .
     "?function=" . (int)34 .
     "&modus=" . "archived" .
     "\">" . $language['archived_event'] .
     "</a>";
     
     if ( $modus == "actual" )
     {
     $str_return =
     "<table class=\"calendar\">" .
     "<thead>" .
     "<tr>" .
     "<th>" . $language['active_event'] . "</th>" .
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
     "<th>" . $language['archived_event'] . "</th>" .
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
    public function get_event_list_presentation($modus)
    {
     return
     $this->get_interview_event_list_presentation( $modus ) .
     $this->get_invitation_event_list_presentation( $modus )  .
     $this->get_information_event_list_presentation( $modus );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  modus
     */
    public function get_interview_event_list_presentation($modus)
    {
     if( defined('__VIEW__') == FALSE )
     { define('__VIEW__', dirname(dirname(__FILE__))); }
     require_once(__VIEW__.
     '/view/presentation/class/class.event_list_presentation.php');
     
     $form_return = "";
     
     $member = $this->watched_entity;
     if ( $modus == "actual" )
     { $model = $member->get_active_interview_event_list(); }
     else
     { $model = $member->get_archived_interview_event_list(); }
     
     if ( $model->get_item_count() > (int)0 )
     {
     $language = $this->get_language_array();
     $language['C3_form_header'] = $language['interview_header'];
     $form = new event_list_presentation( $model, $language );
     $form->define_table();
     $form_return = $form->get_form();
     }
     return $form_return;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  modus
     */
    public function get_invitation_event_list_presentation($modus)
    {
     if( defined('__VIEW__') == FALSE )
     { define('__VIEW__', dirname(dirname(__FILE__))); }
     require_once(__VIEW__.
     '/view/presentation/class/class.event_list_presentation.php');
     
     $form_return = "";
     
     $member = $this->watched_entity;
     if ( $modus == "actual" )
     { $model = $member->get_active_invitation_event_list(); }
     else
     { $model = $member->get_archived_invitation_event_list(); }
     
     if ( $model->get_item_count() > (int)0 )
     {
     $language = $this->get_language_array();
     $language['C3_form_header'] = $language['invitation_header'];
     $form = new event_list_presentation( $model, $language );
     $form->define_table();
     $form_return = $form->get_form();
     }
     return $form_return;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  modus
     */
    public function get_information_event_list_presentation($modus)
    {
     if( defined('__VIEW__') == FALSE )
     { define('__VIEW__', dirname(dirname(__FILE__))); }
     require_once(__VIEW__.
     '/view/presentation/class/class.event_list_presentation.php');
     
     $form_return = "";
     
     $member = $this->watched_entity;
     if ( $modus == "actual" )
     { $model = $member->get_active_information_event_list(); }
     else
     { $model = $member->get_archived_information_event_list(); }
     
     if ( $model->get_item_count() > (int)0 )
     {
     $language = $this->get_language_array();
     $language['C3_form_header'] = $language['information_header'];
     $form = new event_list_presentation( $model, $language );
     $form->define_table();
     $form_return = $form->get_form();
     }
     return $form_return;
    }
}?>