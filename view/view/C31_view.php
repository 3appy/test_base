<?php

error_reporting(E_ALL);

/**
 * //31 register team
 * require_once('form_controls/class.team_registration_form.php');
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
// section 10-30-8-63-32a249a2:13da0d9bd01:-8000:0000000000000F4D-includes begin
// section 10-30-8-63-32a249a2:13da0d9bd01:-8000:0000000000000F4D-includes end

/* user defined constants */
// section 10-30-8-63-32a249a2:13da0d9bd01:-8000:0000000000000F4D-constants begin
// section 10-30-8-63-32a249a2:13da0d9bd01:-8000:0000000000000F4D-constants end


/**
 * //31 register team
 * require_once('form_controls/class.team_registration_form.php');
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class C31_view
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
     $this->load_language("c31");
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
     if( defined('__VIEW_VIEW_ROOT__') == FALSE )
     { define('__VIEW_VIEW_ROOT__', dirname(__FILE__) ); }
     require_once(__VIEW_VIEW_ROOT__.
     '/yaml_forms/class.team_registration_form.php');
     
     $language_array = $this->get_language_array();
     $action = $_SESSION['C_control_base'] . "C31_post_frame.php";
     $team_registration_form = new team_registration_form($action);

     $team_registration_form->set_language($language_array);
     $team_registration_form->set_header( $language_array['C3_form_header'] );
//     $team_registration_form->set_team_name( "" );
     return $team_registration_form->get_form();
    }
}?>