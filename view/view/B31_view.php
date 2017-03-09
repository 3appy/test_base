<?php

error_reporting(E_ALL);

/**
 * //31 register team
 * require_once('form_controls/class.team_registration_form.php');
 *
 * @author Bernd Schröder
 * @version 1.0
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
// section 10-30-8-121--4c413848:13d3f0e22f6:-8000:00000000000016C3-includes begin
// section 10-30-8-121--4c413848:13d3f0e22f6:-8000:00000000000016C3-includes end

/* user defined constants */
// section 10-30-8-121--4c413848:13d3f0e22f6:-8000:00000000000016C3-constants begin
// section 10-30-8-121--4c413848:13d3f0e22f6:-8000:00000000000016C3-constants end

require_once('form_controls/class.team_registration_form.php');

/**
 * //31 register team
 * require_once('form_controls/class.team_registration_form.php');
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class B31_view
    extends B_view
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
     $this->load_language("b31");
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
     $this->get_team_registration_form() ;
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_team_registration_form()
    {
     $language_array = $this->get_language_array();
     $action = $_SESSION['B_control_base'] . "B31_post_frame.php";
     $team_registration_form = new team_registration_form($action);
     
     $team_registration_form->set_language($language_array);
     $team_registration_form->set_header( $language_array['C3_form_header'] );
     $team_registration_form->set_team_name( "" );
     return $team_registration_form->get_form();    
    }
}?>