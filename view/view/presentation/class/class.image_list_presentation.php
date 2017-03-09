<?php

error_reporting(E_ALL);

/**
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

require_once('../../view/presentation/function/class.func_standard_table_presentation.php');

/* user defined includes */
// section 10-30-49-43--15ac4a3e:1490d8a7722:-8000:0000000000000AA1-includes begin
// section 10-30-49-43--15ac4a3e:1490d8a7722:-8000:0000000000000AA1-includes end

/* user defined constants */
// section 10-30-49-43--15ac4a3e:1490d8a7722:-8000:0000000000000AA1-constants begin
// section 10-30-49-43--15ac4a3e:1490d8a7722:-8000:0000000000000AA1-constants end

/**
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class image_list_presentation
    extends func_standard_table_presentation
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function define_table_header()
    {
     // format [ doc, excel, txt, opg ... ]
     $this->get_table_header_list()->add_item(
     $this->get_language()['C3_format'] );
     // link to file
     $this->get_table_header_list()->add_item(
     $this->get_language()['C3_link'] );
     // uploader link
     $this->get_table_header_list()->add_item(
     $this->get_language()['C3_uploader'] );
     // date of upload
     $this->get_table_header_list()->add_item(
     $this->get_language()['C3_date'] );
     // size of file
     $this->get_table_header_list()->add_item(
     $this->get_language()['C3_size'] );
     // delete function
     $this->get_table_header_list()->add_item(
     $this->get_language()['delete'] );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function define_table_element()
    {
     $model = $this->get_list_model();
     $count = $model->get_item_count();
     for ($i = 0; $i < $count; $i++)
     {
     $image = $model->get_item( $i );
     $line = new basic_list();
     // format [ jpg, jpeg, png ... ]
     $line->add_item( $image->get_image_format_icon() );
     
     // link to file
     $control_base =
     $this->get_frame()->get_entity_name() . '_control_base';
     $line->add_item(
     "<a href=\"" . $_SESSION[$control_base] .
     $this->get_frame()->get_basic_post_frame() . ".php" .
     "?function=" . (int)16 .
     "&image_id=" . $image->get_id() . "\">" .
     "<img src=\"". $image->get_small_thumb() .
     "\" alt=\"ads\" class=\"flexible\"/>" .
     "</a> " );
     
     // uploader link
     $line->add_item( $image->get_uploader()->get_link( null ) );
     
     // date of upload
     $line->add_item( $image->get_upload_stamp() );
     
     // size of file
     $line->add_item( $image->get_size() . " Byte" );
     
     // delete function
     if ( $_SESSION['watch_id'] == $image->get_uploader_id() )
     {
     $line->add_item( $this->get_delete_item(
     $this->get_frame(), $image, $this->get_post_frame() ));
     }
     else
     {
     $line->add_item( $this->get_forbitten_item());
     }
     $this->get_table_element_list()->add_item( $line );
     }
    }
}?>