<?php

error_reporting(E_ALL);

/**
 * // AGB
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

/* user defined includes */
// section 10-30-49-108--670f4fe9:14c5b43ffdc:-8000:0000000000002BFF-includes begin
// section 10-30-49-108--670f4fe9:14c5b43ffdc:-8000:0000000000002BFF-includes end

/* user defined constants */
// section 10-30-49-108--670f4fe9:14c5b43ffdc:-8000:0000000000002BFF-constants begin
// section 10-30-49-108--670f4fe9:14c5b43ffdc:-8000:0000000000002BFF-constants end

/**
 * // AGB
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class A6_view
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
     $this->load_language("a6");
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_column3_content()
    {
     $language = $this->get_language_array();
     $column3_content =  "" .

     "<section class=\"box info\">" .
     "<br />" .
     "<p>" . $language['C3_00'] . "</p>" .
     "</section>" .

     "<h5>" . $language['C3_1_header'] . "</h5>" .
     "<h6>" . $language['C3_2_header'] . "</h6>" .
     "<p>" . $language['C3_2_1'] . "</p>" .
     "<h6>" . $language['C3_3_header'] . "</h6>" .
     "<p>" . $language['C3_3_1'] . "</p>" .
     "<h6>" . $language['C3_4_header'] . "</h6>" .
     "<p>" . $language['C3_4_1'] . "</p>" .
     "<h6>" . $language['C3_5_header'] . "</h6>" .
     "<p>" . $language['C3_5_1'] . "</p>" .
     "<h6>" . $language['C3_6_header'] . "</h6>" .
     "<p>" . $language['C3_6_1'] . "</p>" .
     "<h6>" . $language['C3_7_header'] . "</h6>" .
     "<p>" . $language['C3_7_1'] . "</p>" .
     "<h6>" . $language['C3_8_header'] . "</h6>" .
     "<p>" . $language['C3_8_1'] . "</p>" .
     "<h6>" . $language['C3_9_header'] . "</h6>" .
     "<p>" . $language['C3_9_1'] . "</p>" .
     "<h6>" . $language['C3_10_header'] . "</h6>" .
     "<p>" . $language['C3_10_1'] . "</p>" .
     "<h6>" . $language['C3_11_header'] . "</h6>" .
     "<p>" . $language['C3_11_1'] . "</p>" .
     "<h6>" . $language['C3_12_header'] . "</h6>" .
     "<p>" . $language['C3_12_1'] . "</p>" .
     "<h6>" . $language['C3_13_header'] . "</h6>" .
     "<p>" . $language['C3_13_1'] . "</p>" .
     "<h6>" . $language['C3_14_header'] . "</h6>" .
     "<p>" . $language['C3_14_1'] . "</p>" .
     "<h6>" . $language['C3_15_header'] . "</h6>" .
     "<p>" . $language['C3_15_1'] . "</p>";
     "<h6>" . $language['C3_16_header'] . "</h6>" .
     "<p>" . $language['C3_16_1'] . "</p>";
     "<h6>" . $language['C3_17_header'] . "</h6>" .
     "<p>" . $language['C3_17_1'] . "</p>";
     return $column3_content;
    }
}?>