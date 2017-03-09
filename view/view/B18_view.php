<?php

error_reporting(E_ALL);

/**
 * //18  select Avatar
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

/* user defined includes */
// section -64--88--78-21-3afc44d4:142385ed04f:-8000:0000000000001B43-includes begin
// section -64--88--78-21-3afc44d4:142385ed04f:-8000:0000000000001B43-includes end

/* user defined constants */
// section -64--88--78-21-3afc44d4:142385ed04f:-8000:0000000000001B43-constants begin
// section -64--88--78-21-3afc44d4:142385ed04f:-8000:0000000000001B43-constants end

/**
 * //18  select Avatar
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class B18_view
    extends B_view
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function __construct()
    {
     parent::__construct();
     $this->load_language("b18");
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_column3_content()
    {
     $column3_content =  "" .
     $this->get_image_list();
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_image_list()
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
     * @author firstname and lastname of author, <author@example.org>
     * @param  image
     */
    public function get_image_link($image)
    {
     $image_tag = "".
     "<a href=\"" . $_SESSION['B_control_base'] .
     "B18_post_frame.php" .
     "?image_id=" . $image->get_id() . "\">" .
     "<img src=\"". $image->get_medium_thumb() .
     "\" alt=\"ads\" class=\"float-left bordered\"/>" .
     "</a> ";
     return $image_tag;
    }
}?>