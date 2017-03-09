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
 * The C - view is the basis of all views where the watched entity is of an
 * of an event:
 *
 * @author Bernd Schröder
 * @version 1.0
 */
require_once('class.D_view.php');
require_once('presentation/class/class.image_list_presentation.php');


/* user defined includes */
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001E2F-includes begin
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001E2F-includes end

/* user defined constants */
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001E2F-constants begin
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001E2F-constants end

/**
 * //11  show image data list
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class D11_view
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
     $this->load_language("d11");
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
     $this ->get_image_tile_presentation();
     //$this->get_image_list_presentation();
//     $this->get_image_list();
     return $column3_content;
    }
    

    public function get_image_list_presentation()
    {
     $model = $this->watched_entity->get_image_list();
     $language = $this->get_language_array();
     $form = new image_list_presentation( $model, $language );
     $form->set_post_frame( "D11_post_frame.php" );
     $form->set_frame( $this->get_watched_entity() );
     $form->define_table();
     return $form->get_form();
    }
    
    
    public function get_image_tile_presentation()
    {
     $tile_form = "";
     $model = $this->watched_entity->get_image_list();

     $count = $model->get_item_count();
     $tile_form .= "<div class=\"ym-contain-dt\">";

     for( $i = 0; $i < $count; $i++ )
     {
     $image = $model->get_item($i);
     // link to file


     $control_base = $this->get_watched_entity()->get_entity_name() . '_control_base';
     $tile_form .=
     "<a href=\"" . $_SESSION[$control_base] .
     $this->get_watched_entity()->get_basic_post_frame() . ".php" .
     "?function=" . (int)16 .
     "&image_id=" . $image->get_id() . "\">" .
     "<img src=\"". $image->get_article_thumb() .
     "\" alt=\"ads\" class=\"float-left bordered\"/>" .
     "</a>";
     }

     $tile_form .= "</div>";

     return $tile_form;
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
     "<a href=\"" . $_SESSION['D_control_base'] .
     "D_post_frame.php" .
     "?function=" . (int)16 .
     "&image_id=" . $image->get_id() . "\">" .
     "<img src=\"". $image->get_medium_thumb() .
     "\" alt=\"ads\" class=\"flexible  bordered float-left\"/>" .
     "</a> ";
     return $image_tag;
    }
}?>