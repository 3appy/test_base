<?php

error_reporting(E_ALL);

/**
 * //4  show master data
 * //require_once('form_controls/class.team_presentation_form.php');
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
require_once('presentation/class/class.team_presentation.php');


/* user defined includes */
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001D84-includes begin
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001D84-includes end

/* user defined constants */
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001D84-constants begin
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001D84-constants end

/**
 * //4  show master data
 * //require_once('form_controls/class.team_presentation_form.php');
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class C4_view
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
     $this->load_language("c4");
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
     $this->get_team_presentation_form();
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_team_presentation_form()
    {
     $language_array = $this->get_language_array();
     $model = $this->watched_entity;
     $form = new team_presentation($model, $language_array );
     $form->define_table();
     return $form->get_form();
    }
}?>