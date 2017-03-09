<?php

error_reporting(E_ALL);

/**
 * //27external invitation
 * require_once('presentation/class/class.task_list_presentation.php');
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
require_once('form_controls/class.member_inviation_form.php');


/* user defined includes */
// section 10-30-49-73--1a75083e:145699ca881:-8000:0000000000002608-includes begin
// section 10-30-49-73--1a75083e:145699ca881:-8000:0000000000002608-includes end

/* user defined constants */
// section 10-30-49-73--1a75083e:145699ca881:-8000:0000000000002608-constants begin
// section 10-30-49-73--1a75083e:145699ca881:-8000:0000000000002608-constants end

/**
 * //27external invitation
 * require_once('presentation/class/class.task_list_presentation.php');
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class C28_view
    extends C_view
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
     $this->load_language("c28");
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_column3_content()
    {
     $column3_content =  "" .
     $this->get_external_invitation();
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_external_invitation()
    {
     $language_array = $this->get_language_array();
     $action = $_SESSION['C_control_base'] . "C28_post_frame.php";
     $invitation_form = new member_inviation_form($action);

     $invitation_form->set_language($language_array);
     $invitation_form->set_header( $language_array['C3_form_header'] );
     return $invitation_form->get_form();
     
    }
}?>