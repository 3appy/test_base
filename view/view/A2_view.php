<?php

error_reporting(E_ALL);

/**
 * Registration
 *
 * @author firstname and lastname of author, <author@example.org>
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
require_once('form_controls/class.member_captscha_registration_form.php');

/* user defined includes */
// section 10-5-25-11-53c52816:13cfe21cbec:-8000:0000000000000C80-includes begin
// section 10-5-25-11-53c52816:13cfe21cbec:-8000:0000000000000C80-includes end

/* user defined constants */
// section 10-5-25-11-53c52816:13cfe21cbec:-8000:0000000000000C80-constants begin
// section 10-5-25-11-53c52816:13cfe21cbec:-8000:0000000000000C80-constants end

/**
 * Registration
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class A2_view
    extends A_view
{
    // --- ASSOCIATIONS ---

    var $font = 'monofont.ttf';

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
     $this->load_language("a2");
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
     $this->get_registration_form() ;
     return $column3_content;
    }
    /**
     * "" );
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
     /*NEW*/
    public function get_registration_form()
    {
     $language_array = $this->get_language_array();
     $action = $_SESSION['A_control_base'] . "A2_post_frame.php";
     $member_registration_form = new member_captscha_registration_form($action);
     
     $member_registration_form->set_language($language_array);
     $member_registration_form->set_header(
     $language_array['C3_form_header'] );
     $member_registration_form->set_name( "" );
     $member_registration_form->set_mail( "" );
     return $member_registration_form->get_form();
    }
}?>