<?php

error_reporting(E_ALL);

/**
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * require_once('../../../data/list/function/class.basic_list.php');
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('../../view/presentation/function/class.func_standard_table_presentation.php');

/* user defined includes */
// section 127-0-0-1-521e17f0:144981393b8:-8000:0000000000000B01-includes begin
// section 127-0-0-1-521e17f0:144981393b8:-8000:0000000000000B01-includes end

/* user defined constants */
// section 127-0-0-1-521e17f0:144981393b8:-8000:0000000000000B01-constants begin
// section 127-0-0-1-521e17f0:144981393b8:-8000:0000000000000B01-constants end

/**
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class nasty_word_list_presentation
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
     $this->get_table_header_list()->add_item(
     $this->get_language()['C3_name'] );
     $this->get_table_header_list()->add_item(
     $this->get_language()['C3_upload_stamp'] );
     $this->get_table_header_list()->add_item(
     $this->get_language()['C3_uploader'] );
     $this->get_table_header_list()->add_item(
     $this->get_language()['C3_hit'] );
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
     $nasty_word = $model->get_item( $i ); 
     
     $member = new member();
     $member->set_id(  $nasty_word->get_uploader_id() );
     $member->load();
     
     $line = new basic_list();
     $line->add_item( $nasty_word->get_name() );
     $line->add_item( $nasty_word->get_upload_stamp()  ); 
     $line->add_item( $member->get_link( null ) );
     $line->add_item( $nasty_word->get_hit()  );
     $this->get_table_element_list()->add_item( $line );
     }
    }
}?>