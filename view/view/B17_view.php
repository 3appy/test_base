<?php

error_reporting(E_ALL);

/**
 * //17  show video
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
// section 10-30-8-63-32a249a2:13da0d9bd01:-8000:0000000000000F3C-includes begin
// section 10-30-8-63-32a249a2:13da0d9bd01:-8000:0000000000000F3C-includes end

/* user defined constants */
// section 10-30-8-63-32a249a2:13da0d9bd01:-8000:0000000000000F3C-constants begin
// section 10-30-8-63-32a249a2:13da0d9bd01:-8000:0000000000000F3C-constants end

/**
 * //17  show video
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class B17_view
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
     $this->load_language("b17");
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
     $this->get_video();
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_video()
    {
     if (isset($_GET["video_id"]) && is_numeric($_GET["video_id"]))
     {
     $source = $this->watched_entity->get_video( $_GET["video_id"] )->get_video();
     return
     "<div class=\"ym-gbox-left\">" .
     "<video width=\"400\" height=\"300\" controls>" .
     "<source src=\"" . $source. "\"type='video/mp4' />" .
     "Your browser does not support the video tag." .
     "</video>" .
     "</div>";     
     }
    }
}?>