<?php

error_reporting(E_ALL);

/**
 * // reset password
 * //require_once('form_controls/class.member_registration_form.php');
 *
 * @author Bernd Schröder
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * The a - view is the basis of all views where the is no watched entity:
 *
 * @author Bernd Schröder
 * @version 1.0
 */
require_once('class.A_view.php');
require_once('form_controls/class.member_registration_form.php');

/* user defined includes */
// section 10-30-8-120-371b0bb:13d0183520e:-8000:0000000000000C99-includes begin
// section 10-30-8-120-371b0bb:13d0183520e:-8000:0000000000000C99-includes end

/* user defined constants */
// section 10-30-8-120-371b0bb:13d0183520e:-8000:0000000000000C99-constants begin
// section 10-30-8-120-371b0bb:13d0183520e:-8000:0000000000000C99-constants end

/**
 * // reset password
 * //require_once('form_controls/class.member_registration_form.php');
 *
 * @access public
 * @author Bernd Schröder
 */
class A3_view
    extends A_view
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
     $this->load_language("a3");
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
     $this->get_reset_form() ;
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
     /*NEW*/
    public function get_reset_form()
    {
     $language_array = $this->get_language_array();
     $action = $_SESSION['A_control_base'] . "A3_post_frame.php";
     $member_reset_form = new member_registration_form($action);
     
     $member_reset_form->set_language($language_array);
     $member_reset_form->set_header( $language_array['C3_form_header'] );
     $member_reset_form->set_forename( "" );
     $member_reset_form->set_name( "" );
     $member_reset_form->set_mail( "" );
     return $member_reset_form->get_form();
    }
}?>