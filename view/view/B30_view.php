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
 * The B - view is the basis of all views where the watched entity is of an
 * of a member:
 *
 * @author Bernd Schröder
 * @version 1.0
 */
require_once('class.B_view.php');
require_once('presentation/class/class.member_list_presentation.php');

/* user defined includes */
// section 10-30-8-63-32a249a2:13da0d9bd01:-8000:0000000000000F4A-includes begin
// section 10-30-8-63-32a249a2:13da0d9bd01:-8000:0000000000000F4A-includes end

/* user defined constants */
// section 10-30-8-63-32a249a2:13da0d9bd01:-8000:0000000000000F4A-constants begin
// section 10-30-8-63-32a249a2:13da0d9bd01:-8000:0000000000000F4A-constants end

/**
 * //30 show all related members
 * require_once('class_views/class.member_list_presentation.php');
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class B30_view
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
     $this->load_language("b30");
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
     $model = $this->watched_entity->get_follower_list();
     $language = $this->get_language_array();
     $form = new member_list_presentation( $model, $language );
     $form->define_table();
     return $form->get_form();
    }
}?>