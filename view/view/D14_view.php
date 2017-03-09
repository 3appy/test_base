<?php

error_reporting(E_ALL);

/**
 * //14  upload video data
 * require_once('form_controls/class.upload_data_form.php');
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
require_once('form_controls/class.upload_data_form.php');

/* user defined includes */
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001E36-includes begin
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001E36-includes end

/* user defined constants */
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001E36-constants begin
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001E36-constants end

/**
 * //14  upload video data
 * require_once('form_controls/class.upload_data_form.php');
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class D14_view
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
     $this->load_language("d14");
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_D3_content()
    {
     $language_array = $this->get_language_array();
     $column3_content =  "" .
     $language_array['info'] .
     $this->get_video_upload_form();
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_video_upload_form()
    {
     $language_array = $this->get_language_array();
     $action = $_SESSION['D_control_base'] . "D14_post_frame.php";
     $upload_form = new upload_data_form($action);
     $upload_form->set_language($language_array);
     $upload_form->set_header( $language_array['C3_form_header'] );
     $upload_form->set_enctype("multipart/form-data");
     return $upload_form->get_form();
    }
}?>