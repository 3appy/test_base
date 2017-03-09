<?php

error_reporting(E_ALL);

/**
 * //16  show image
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

/* user defined includes */
// section 10-5-29--87-679a27d9:13d12107007:-8000:0000000000000D20-includes begin
// section 10-5-29--87-679a27d9:13d12107007:-8000:0000000000000D20-includes end

/* user defined constants */
// section 10-5-29--87-679a27d9:13d12107007:-8000:0000000000000D20-constants begin
// section 10-5-29--87-679a27d9:13d12107007:-8000:0000000000000D20-constants end

/**
 * //16  show image
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class B16_view
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
     $this->load_language("b16");
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
     $this->get_image();
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_image()
    {
     if (isset($_GET["image_id"]) && is_numeric($_GET["image_id"]))
     {
     $image_id = $_GET["image_id"];
     $new_image = new image();
     $new_image->set_id( $image_id );
     $new_image->load();
   
     $image = "" .
     "<div class=\"ym-wrapper\"> " .
     "<img src=\"". $new_image->get_image() .
     "\" alt=\"\" class=\"flexible\"/>" .
     "</div>";
     return $image;
    }}
}?>