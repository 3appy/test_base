<?php

error_reporting(E_ALL);

/**
 * //35 select image for article
 *
 * @author firstname and lastname of author, <author@example.org>
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

/* user defined includes */
// section 10-30-8--109--73ec6de5:13eb16fc444:-8000:00000000000010D7-includes begin
// section 10-30-8--109--73ec6de5:13eb16fc444:-8000:00000000000010D7-includes end

/* user defined constants */
// section 10-30-8--109--73ec6de5:13eb16fc444:-8000:00000000000010D7-constants begin
// section 10-30-8--109--73ec6de5:13eb16fc444:-8000:00000000000010D7-constants end

/**
 * //35 select image for article
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class C35_view
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
     $this->load_language("c35");
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_column3_content()
    {
     $language_array = $this->get_language_array();
     $column3_content =  "" .
     $language_array['info'] .
     "here are images from the member profile" .
     $this->get_member_image_list() .
     "here are images from the team profile" .
     $this->get_team_image_list();
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_member_image_list()
    {
     $image_list = $this->watch_entity->get_image_list();
     $count = $image_list->get_item_count();
     
     $table_body = "";
     if ($count > 0)
     {
     $table_body = "<div class=\"ym-contain-dt\">";
     for ($i = 0; $i < $count; $i++)
     {
     $image = $image_list->get_item( $i );
     $table_body = $table_body .
     $this->get_image_link( $image );
     }
     $table_body = $table_body . "</div>";
     }
     return $table_body;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_team_image_list()
    {
     $image_list = $this->watched_entity->get_image_list();
     $count = $image_list->get_item_count();
     
     $table_body = "";
     if ($count > 0)
     {
     $table_body = "<div class=\"ym-contain-dt\">";
     for ($i = 0; $i < $count; $i++)
     {
     $image = $image_list->get_item( $i );
     $table_body = $table_body .
     $this->get_image_link( $image );
     }
     $table_body = $table_body . "</div>";
     }
     return $table_body;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  image
     * @version 1.0
     */
    public function get_image_link($image)
    {
     $image_tag = "".
     "<a href=\"" . $_SESSION['C_control_base'] .
     "C35_post_frame.php" . "?image_id=" . $image->get_id() . "\">" .
     "<img src=\"". $image->get_medium_thumb() .
     "\" alt=\"ads\" class=\"float-left bordered\"/>" .
     "</a> ";
     return $image_tag;
    }
}?>