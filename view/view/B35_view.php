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
 * The B - view is the basis of all views where the watched entity is of an
 * of a member:
 *
 * @author Bernd Schröder
 * @version 1.0
 */
require_once('class.B_view.php');

/* user defined includes */
// section 10-30-8-112--7c413e89:13e1c00583b:-8000:000000000000104F-includes begin
// section 10-30-8-112--7c413e89:13e1c00583b:-8000:000000000000104F-includes end

/* user defined constants */
// section 10-30-8-112--7c413e89:13e1c00583b:-8000:000000000000104F-constants begin
// section 10-30-8-112--7c413e89:13e1c00583b:-8000:000000000000104F-constants end

/**
 * //35 select image for article
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class B35_view
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
     $this->load_language("b35");
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
     $this->get_member_image_list();
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
     * @param  image
     * @version 1.0
     */
    public function get_image_link($image)
    {
     $image_tag = "".
     "<a href=\"" . $_SESSION['B_control_base'] .
     "B35_post_frame.php" . "?image_id=" . $image->get_id() . "\">" .
     "<img src=\"". $image->get_medium_thumb() .
     "\" alt=\"ads\" class=\"float-left bordered\"/>" .
     "</a> ";
     return $image_tag;
    }
}?>