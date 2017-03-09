<?php

error_reporting(E_ALL);

/**
 * //12  upload document data
 * require_once('form_controls/class.upload_data_form.php');
 *
 * @author Bernd SChr�der
 * @version 1.0
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * The B - view is the basis of all views where the watched entity is of an
 * of a member:
 *
 * @author Bernd Schr�der
 * @version 1.0
 */
require_once('class.B_view.php');
require_once('form_controls/class.upload_data_form.php');

/* user defined includes */
// section 10-30-8-63-32a249a2:13da0d9bd01:-8000:0000000000000F23-includes begin
// section 10-30-8-63-32a249a2:13da0d9bd01:-8000:0000000000000F23-includes end

/* user defined constants */
// section 10-30-8-63-32a249a2:13da0d9bd01:-8000:0000000000000F23-constants begin
// section 10-30-8-63-32a249a2:13da0d9bd01:-8000:0000000000000F23-constants end

/**
 * //12  upload document data
 * require_once('form_controls/class.upload_data_form.php');
 *
 * @access public
 * @author Bernd SChr�der
 * @version 1.0
 */
class B12_view
    extends B_view
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schr�der
     * @version 1.0
     */
    public function __construct()
    {
     parent::__construct();
     $this->load_language("b12");
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_column3_content()
    {
     $language_array = $this->get_language_array();
     $column3_content =  "" .
     $language_array['info'] .     
     $this->get_doc_upload_form();
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author Bernd Schr�der
     * @version 1.0
     */
    public function get_doc_upload_form()
    {
     $language_array = $this->get_language_array();
     $action = $_SESSION['B_control_base'] . "B12_post_frame.php";
     $upload_form = new upload_data_form($action);
     $upload_form->set_language($language_array);
     $upload_form->set_header( $language_array['C3_form_header'] );
     $upload_form->set_enctype("multipart/form-data");
     return $upload_form->get_form();
    }
}?>