<?php

error_reporting(E_ALL);

/**
 * //30 show all related members
 * require_once('class_views/class.member_list_presentation.php');
 *
 * @author Bernd Schröder
 * @version 1.0
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * The C - view is the basis of all views where the watched entity is of an
 * of an event:
 *
 * @author Bernd Schröder
 * @version 1.0
 */
require_once('class.D_view.php');
require_once('presentation/class/class.member_list_presentation.php');

/* user defined includes */
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001E3E-includes begin
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001E3E-includes end

/* user defined constants */
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001E3E-constants begin
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001E3E-constants end

/**
 * //30 show all related members
 * require_once('class_views/class.member_list_presentation.php');
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class D30_view
    extends D_view
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
     $this->load_language("d30");
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_D3_content()
    {
     $column3_content =  "" .
     $this->get_member_list_presentation();
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_member_list_presentation()
    {
     $model = $this->watched_entity->get_approved_member_list();
     $language = $this->get_language_array();
     $form = new member_list_presentation( $model, $language );
     $form->set_frame( $this->get_watched_entity() );
     $form->define_table();
     return $form->get_form();
    }
}?>