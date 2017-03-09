<?php

error_reporting(E_ALL);

/**
 * //13  show document data list
 * require_once('class_views/class.document_list_presentation.php');
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
require_once('presentation/class/class.document_list_presentation.php');

/* user defined includes */
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001E31-includes begin
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001E31-includes end

/* user defined constants */
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001E31-constants begin
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001E31-constants end

/**
 * //13  show document data list
 * require_once('class_views/class.document_list_presentation.php');
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class C13_view
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
     $this->load_language("c13");
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
     $this->get_document_list_presentation();
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_document_list_presentation()
    {
     $model = $this->watched_entity->get_document_list();
     $language = $this->get_language_array();
     $form = new document_list_presentation( $model, $language );
     $form->set_post_frame( "C13_post_frame.php" );
     $form->set_frame( $this->get_watched_entity() );
     $form->define_table();
     return $form->get_form();
    }
}?>