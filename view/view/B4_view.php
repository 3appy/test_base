<?php

error_reporting(E_ALL);

/**
 * //4  show master data
 * //require_once('form_controls/class.member_presentation_form.php');
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
require_once('presentation/class/class.member_presentation.php');


/* user defined includes */
// section 127-0-0-1-3620b25f:13ccf23c1b7:-8000:0000000000001513-includes begin
// section 127-0-0-1-3620b25f:13ccf23c1b7:-8000:0000000000001513-includes end

/* user defined constants */
// section 127-0-0-1-3620b25f:13ccf23c1b7:-8000:0000000000001513-constants begin
// section 127-0-0-1-3620b25f:13ccf23c1b7:-8000:0000000000001513-constants end

/**
 * //4  show master data
 * //require_once('form_controls/class.member_presentation_form.php');
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class B4_view
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
     $this->load_language("b4");
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
     $this->get_member_presentation_form();
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_member_presentation_form()
    {
     $language_array = $this->get_language_array();
     $model = $this->watched_entity;
     $form = new member_presentation($model, $language_array );          
     $form->define_table();
     return $form->get_form();
    }
}?>