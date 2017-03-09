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
 * The C - view is the basis of all views where the watched entity is of an
 * of an event:
 *
 * @author Bernd Schröder
 * @version 1.0
 */
require_once('class.D_view.php');

/* user defined includes */
// section 10-30-8-63-32a249a2:13da0d9bd01:-8000:0000000000000F40-includes begin
// section 10-30-8-63-32a249a2:13da0d9bd01:-8000:0000000000000F40-includes end

/* user defined constants */
// section 10-30-8-63-32a249a2:13da0d9bd01:-8000:0000000000000F40-constants begin
// section 10-30-8-63-32a249a2:13da0d9bd01:-8000:0000000000000F40-constants end

/**
 * //17  show video
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class D17_view
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
     $this->load_language("d17");
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
     return
     $column3_content =  "" .
     "<video id=\"example_video_1\"" .
     "class=\"video-js vjs-default-skin\"" .
     "controls preload=\"auto\" " .
     "width=\"640\" height=\"264\" " .
     "data-setup='{\"example_option\":true}'>" .
     "<source src=\"" . 
     $this->watched_entity->get_video( $_GET["video_id"] )->get_video() .
     "\" type='video/mp4' />" .
     "</video>";
     }
    }
}?>