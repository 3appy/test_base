<?php

error_reporting(E_ALL);

/**
 * //22  kontakt list
 * require_once('presentation/class/class.team_member_list_presentation.php');
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
require_once('presentation/class/class.team_member_list_presentation.php');

/* user defined includes */
// section -64--88--78-21-3afc44d4:142385ed04f:-8000:0000000000001B4B-includes begin
// section -64--88--78-21-3afc44d4:142385ed04f:-8000:0000000000001B4B-includes end

/* user defined constants */
// section -64--88--78-21-3afc44d4:142385ed04f:-8000:0000000000001B4B-constants begin
// section -64--88--78-21-3afc44d4:142385ed04f:-8000:0000000000001B4B-constants end

/**
 * //22  kontakt list
 * require_once('presentation/class/class.team_member_list_presentation.php');
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class B19_view
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
     $this->load_language("b19");
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
     $this->get_kontakt_list();
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_kontakt_list()
    {
     $model = $this->watched_entity->get_kontakt_list();
     $language = $this->get_language_array();
     $form = new team_member_list_presentation( $model, $language );
     $form->set_frame( $this->get_watched_entity() );
     $form->define_table();
     return $form->get_form();
    }
}?>