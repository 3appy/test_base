<?php

error_reporting(E_ALL);

/**
 * //11  show image data list
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
require_once('presentation/class/class.image_list_presentation.php');

/* user defined includes */
// section -64--88--78-21-39a5dd1c:13d0db4ecdb:-8000:0000000000001B42-includes begin
// section -64--88--78-21-39a5dd1c:13d0db4ecdb:-8000:0000000000001B42-includes end

/* user defined constants */
// section -64--88--78-21-39a5dd1c:13d0db4ecdb:-8000:0000000000001B42-constants begin
// section -64--88--78-21-39a5dd1c:13d0db4ecdb:-8000:0000000000001B42-constants end

/**
 * //11  show image data list
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class B11_view
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
     $this->load_language("b11");
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_column3_content()
    {
     $column3_content =  "" .
//     $this->get_image_list();
     $this->get_image_list_presentation();

     return $column3_content;
    }
    
    public function get_image_list_presentation()
    {
     $model = $this->watched_entity->get_image_list();
     $language = $this->get_language_array();
     $form = new image_list_presentation( $model, $language );
     $form->set_post_frame( "B11_post_frame.php" );
     $form->set_frame( $this->get_watched_entity() );
     $form->define_table();
     return $form->get_form();
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
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
     * @author Bernd Schröder
     * @param  image
     * @version 1.0
     */
     
     
    public function get_image_link($image)
    {
     $image_tag = "".
     "<a href=\"" . $_SESSION['B_control_base'] .
     "B_post_frame.php" . 
     "?function=" . (int)16 .
     "&image_id=" . $image->get_id() . "\">" .
     "<img src=\"". $image->get_medium_thumb() .
     "\" alt=\"ads\" class=\"flexible\"/>" .
     "</a> ";
     return $image_tag;
    }
}?>