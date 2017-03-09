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
// section 127-0-0-1--219a8e72:14ed0e88370:-8000:00000000000016D4-includes begin
// section 127-0-0-1--219a8e72:14ed0e88370:-8000:00000000000016D4-includes end

/* user defined constants */
// section 127-0-0-1--219a8e72:14ed0e88370:-8000:00000000000016D4-constants begin
// section 127-0-0-1--219a8e72:14ed0e88370:-8000:00000000000016D4-constants end

/**
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class price_list_presentation
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
     $this->get_language()['pupils'] );
     $this->get_table_header_list()->add_item(
     $this->get_language()['price'] );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function define_table_element()
    {
     $lang = $this->get_language();
     
     $line = new basic_list();
     $line->add_item( $lang['CL1_1'] );
     $line->add_item( $lang['CL1_2'] );
     $this->get_table_element_list()->add_item( $line );
     
     $line = new basic_list();
     $line->add_item( $lang['CL2_1'] );
     $line->add_item( $lang['CL2_2'] );
     $this->get_table_element_list()->add_item( $line );
     
     $line = new basic_list();
     $line->add_item( $lang['CL3_1'] );
     $line->add_item( $lang['CL3_2'] );
     $this->get_table_element_list()->add_item( $line );
     
     $line = new basic_list();
     $line->add_item( $lang['CL4_1'] );
     $line->add_item( $lang['CL4_2'] );
     $this->get_table_element_list()->add_item( $line );
     
     $line = new basic_list();
     $line->add_item( $lang['CL5_1'] );
     $line->add_item( $lang['CL5_2'] );
     $this->get_table_element_list()->add_item( $line );
     
     $line = new basic_list();
     $line->add_item( $lang['CL6_1'] );
     $line->add_item( $lang['CL6_2'] );
     $this->get_table_element_list()->add_item( $line );
     
     $line = new basic_list();
     $line->add_item( $lang['CL7_1'] );
     $line->add_item( $lang['CL7_2'] );
     $this->get_table_element_list()->add_item( $line );
     
     $line = new basic_list();
     $line->add_item( $lang['CL8_1'] );
     $line->add_item( $lang['CL8_2'] );
     $this->get_table_element_list()->add_item( $line );
     
     $line = new basic_list();
     $line->add_item( $lang['CL9_1'] );
     $line->add_item( $lang['CL9_2'] );
     $this->get_table_element_list()->add_item( $line );
     
     $line = new basic_list();
     $line->add_item( $lang['CL10_1'] );
     $line->add_item( $lang['CL10_2'] );
     $this->get_table_element_list()->add_item( $line );
     
     $line = new basic_list();
     $line->add_item( $lang['CL11_1'] );
     $line->add_item( $lang['CL11_2'] );
     $this->get_table_element_list()->add_item( $line );
     
     $line = new basic_list();
     $line->add_item( $lang['CL12_1'] );
     $line->add_item( $lang['CL12_2'] );
     $this->get_table_element_list()->add_item( $line );
     
     $line = new basic_list();
     $line->add_item( $lang['CL13_1'] );
     $line->add_item( $lang['CL13_2'] );
     $this->get_table_element_list()->add_item( $line );
    }
}?>