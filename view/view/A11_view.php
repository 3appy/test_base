<?php

error_reporting(E_ALL);

/**
 * // jobs
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
// section 10-30-49-108--670f4fe9:14c5b43ffdc:-8000:0000000000002C14-includes begin
// section 10-30-49-108--670f4fe9:14c5b43ffdc:-8000:0000000000002C14-includes end

/* user defined constants */
// section 10-30-49-108--670f4fe9:14c5b43ffdc:-8000:0000000000002C14-constants begin
// section 10-30-49-108--670f4fe9:14c5b43ffdc:-8000:0000000000002C14-constants end

/**
 * // jobs
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class A11_view
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
     $this->load_language("a11");
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_column3_content()
    {
     $language_array = $this->get_language_array();
     $column3_content =  "" .

     "<section class=\"box info\">" .
     "<br />" .
     "<p>" . $language_array['C3_00'] . "</p>" .
     "</section>" .

     "<section class=\"box info\">" .
     "<br />" .
     "<h5>" . $language_array['C3_0_header'] . "</h5>" .
     "<h6>" . $language_array['C3_1_header'] . "</h6>" .
     "<p>" . $language_array['C3_1'] . "</p>" .
     "<h6>" . $language_array['C3_2_header'] . "</h6>" .
     "<p>" . $language_array['C3_2'] . "</p>" .
     "<h6>" . $language_array['C3_3_header'] . "</h6>" .
     "<p>" . $language_array['C3_3'] . "</p>" .
     "<h6>" . $language_array['C3_4_header'] . "</h6>" .
     "<p>" . $language_array['C3_4'] . "</p>" .
     "<h6>" . $language_array['C3_5_header'] . "</h6>" .
     "<p>" . $language_array['C3_5'] . "</p>" .
     "</section>";
     
/*     "<section class=\"box info\">" .
     "<br />" .
     "<h5>" . $language_array['C3_10_header'] . "</h5>" .
     "<h6>" . $language_array['C3_11_header'] . "</h6>" .
     "<p>" . $language_array['C3_11'] . "</p>" .
     "<h6>" . $language_array['C3_12_header'] . "</h6>" .
     "<p>" . $language_array['C3_12'] . "</p>" .
     "<h6>" . $language_array['C3_13_header'] . "</h6>" .
     "<p>" . $language_array['C3_13'] . "</p>" .
     "<h6>" . $language_array['C3_14_header'] . "</h6>" .
     "<p>" . $language_array['C3_14'] . "</p>" .
     "<h6>" . $language_array['C3_15_header'] . "</h6>" .
     "<p>" . $language_array['C3_15'] . "</p>" .
     "</section>"
*/
     return $column3_content;
    }
}?>