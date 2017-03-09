<?php

error_reporting(E_ALL);

/**
 * require_once('../../../data/list/function/class.basic_list.php');
 * require_once('../../view/presentation/function/class.delete_image_link.php');
 * require_once('../../view/presentation/function/class.edit_image_link.php');
 * require_once('../../view/presentation/function/class.view_image_link.php');
 *
 * @author firstname and lastname of author, <author@example.org>
 */
 
require_once('../../../data/generated/class.basic_list.php');
require_once('../../../view/view/presentation/function/class.delete_image_link.php');
require_once('../../../view/view/presentation/function/class.edit_image_link.php');
require_once('../../../view/view/presentation/function/class.view_image_link.php');
require_once('../../../view/view/presentation/function/class.forbitten_image_link.php');
require_once('../../../view/view/presentation/function/class.generate_image_link.php');
require_once('generated/class.generated_standard_table_presentation.php');


if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * require_once('../../../data/list/function/class.basic_list.php');
 * require_once('../../view/presentation/function/class.delete_image_link.php');
 * require_once('../../view/presentation/function/class.edit_image_link.php');
 * require_once('../../view/presentation/function/class.view_image_link.php');
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class func_standard_table_presentation
    extends generated_standard_table_presentation
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  model
     * @param  language
     */
    public function __construct($model, $language)
    {
     $this->set_list_model( $model );
     $this->set_language( $language );
     
     $this->set_name("table presentation");
     $this->set_show_excel_export( FALSE );
     
     $this->set_table_header_list( new basic_list );
     $this->set_table_element_list( new basic_list );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_form()
    {
     return 
     "<form method=\"post\"" .
     "action=" . "\"" .
     $this->get_action() .
     "\"" .
     "id=" .
     "\"" . $this->get_name() . "\"" .
     "class=" .
     "\"" . "ym-form ym-full linearize-form"  . "\"" .
     "role=" .
     "\"" .  "application" . "\">" .
     $this->get_header() .
     $this->get_table() .
     $this->get_button() .
     "</form>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_header()
    {
     return
     "<h6 class=\"ym-fbox-heading\">" .
     $this->get_language()['C3_form_header'] .
     "</h6>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_table()
    {
     return
     "<table class=\"bordertable narrow\">" .
     "<thead>" .
     "<tr>" .
     $this->generate_table_header_list() .
     "</tr>" .
     "</thead>" .
     "<tbody>" .
     "<tr>" .
     $this->generate_table_element_list() .
     "</tr>".
     $this->load_cvs() .
     "</tbody> " .
     "</table> ";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function generate_table_header_list()
    {
     $header_string = "";
     
     $count = $this->get_table_header_list()->get_item_count();
     for( $i = 0; $i < $count; $i++ )
     {
     $item = $this->get_table_header_list()->get_item($i);
     $header_string .= "<th>" . $item . "</th>";
     }
     return $header_string;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function generate_csv_table_header_list()
    {
     $csv_header = "";
     
     $count = $this->get_cvs_header_list()->get_item_count();
     for( $i = 0; $i < $count; $i++ )
     {
     $item = $this->get_cvs_header_list()->get_item($i);
     $csv_header .= $item . ";";
     }
     return $csv_header .= "\n";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function generate_table_element_list()
    {
     $element_string = "";
     
     $count = $this->get_table_element_list()->get_item_count();
     for( $i = 0; $i < $count; $i++ )
     {
     $item = $this->get_table_element_list()->get_item($i);
     $table_element_line = $this->get_table_element_line($item);
     $element_string .= "<tr>" . $table_element_line .  "</tr>";
     }
     return $element_string;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function generate_cvs_table_element_list()
    {
     $csv_element = "";
     
     $count = $this->get_cvs_element_list()->get_item_count();
     for( $i = 0; $i < $count; $i++ )
     {
     $item = $this->get_cvs_element_list()->get_item($i);
     $csv_element_line = $this->get_csv_element_line($item);
     $csv_element .= $csv_element_line .  "|";
     }
     $csv_element = rtrim( $csv_element, "|" );
     return $csv_element;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  item
     */
    public function get_table_element_line($item)
    {
     $element_line_string = "";
     $count = $item->get_item_count();
     for( $i = 0; $i < $count; $i++ )
     {
     $element_line_string .= "<td>" . $item->get_item($i) .  "</td>";
     }
     return $element_line_string;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  item
     */
    public function get_csv_element_line($item)
    {
     $element_line_string = "";
     $count = $item->get_item_count();
     for( $i = 0; $i < $count; $i++ )
     {
     $element_line_string .= $item->get_item($i) . ";";
     }
//     $element_line_string = rtrim( $element_line_string, ";" );

     return $element_line_string;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_cvs()
    {
     if ( $this->get_show_excel_export() )
     {
     return
     "<input type=\"hidden\" name=\"csv_header\" value=\" " .
     $this->generate_csv_table_header_list() .
     " \" />" .
     "<input type=\"hidden\" name=\"csv_element\" value=\" " .
     $this->generate_cvs_table_element_list() .
     " \" />";
     }
     else
     {
     return ""; 
     }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_button()
    {
     if ( $this->get_show_excel_export() )
     {
     return "" .
     "<div class=\"ym-fbox-button\">" .
     "<input type=\"submit\" value=\"" .
     "PDF" .
     "\"  class=\"save\" id=\"submit\" name=\"submit\" />" .
     "</div>";
     }
     else
     {
     return ""; 
     }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function define_table_header()
    {
     ;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function define_cvs_header()
    {
     ;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function define_table_element()
    {
     ;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function define_cvs_element()
    {
     ;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  show_excel_export
     */
    public function set_show_excel_export($show_excel_export)
    {
     parent::set_show_excel_export( $show_excel_export );
     $this->set_cvs_header_list( new basic_list );
     $this->set_cvs_element_list( new basic_list );
     $this->define_cvs_header();
     $this->define_cvs_element();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  post_frame
     * @param  item_id
     */
    public function get_view_item( $item_id )
    {
    return "";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  post_frame
     * @param  item_id
     */
    public function get_edit_item( $item_id)
    {
    return "";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  post_frame
     * @param  item_id
     */
    public function get_delete_item($frame, $item, $post_frame)
    {       
     $text = $this->get_language()['confirm_delete']; 
     $image_link = new delete_image_link();
     $image_link->set_frame( $frame );
     $image_link->set_item( $item );
     $image_link->set_post_frame( $post_frame );     
     return $image_link->get_image_link( $text );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function define_table()
    {
     $this->define_table_header();
     $this->define_table_element();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  post_frame
     * @param  item_id
     */
    public function get_forbitten_item()
    {
     $image_link = new forbitten_image_link();
     return $image_link->get_image_link();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  post_frame
     * @param  item_id
     */
    public function get_generate_item($frame, $item, $post_frame)
    {
     $image_link = new generate_image_link();
     $image_link->set_frame( $frame );
     $image_link->set_item( $item );
     $image_link->set_post_frame( $post_frame );
     return $image_link->get_image_link();
    }
    
    /*NEW*/
    public function get_eu_time( $time )
    {
     date_default_timezone_set('Europe/Berlin');
     $date = new datetime( $time );
     return
     $date->format('d') . "." .
     $date->format('m') . "." .
     $date->format('Y') . " " .
     $date->format('H') . ":" .
     $date->format('i');
    }
}?>