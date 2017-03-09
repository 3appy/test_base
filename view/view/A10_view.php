<?php

error_reporting(E_ALL);

/**
 * // extra
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include A_view
 *
 * @author Bernd Schröder
 * @version 1.0
 */
require_once('class.A_view.php');
require_once('presentation/class/class.price_list_presentation.php');


/* user defined includes */
// section 10-30-49-108--670f4fe9:14c5b43ffdc:-8000:0000000000002C13-includes begin
// section 10-30-49-108--670f4fe9:14c5b43ffdc:-8000:0000000000002C13-includes end

/* user defined constants */
// section 10-30-49-108--670f4fe9:14c5b43ffdc:-8000:0000000000002C13-constants begin
// section 10-30-49-108--670f4fe9:14c5b43ffdc:-8000:0000000000002C13-constants end

/**
 * // extra
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class A10_view
    extends A_view
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
     $this->load_language("a10");
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_column3_content()
    {
     return 
     $this->get_info_box() .
     $this->get_price_list_presentation();
    }
     
    public function get_info_box()
    {
     $language = $this->get_language_array();
     return
     "<section class=\"box info\">" .
     "<br />" .
     "<h5>" . $language['C3_1_header'] . "</h5>" .
     "<p>" . $language['C3_2'] . "</p>" .
     "<p>" . $language['C3_3'] . "</p>" .    
     "<p>" . $language['C3_4'] . "</p>" .
     "<p>" . $language['C3_5'] . "</p>" .
     "</section>" ;
    }

    public function get_price_list_presentation()
    {
     $language = $this->get_language_array();
     $form = new price_list_presentation( null, $language );
     $form->define_table();
     return $form->get_form();
    }
}?>