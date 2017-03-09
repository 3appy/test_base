<?php

error_reporting(E_ALL);

/**
 * // Impressum
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * The a - view is the basis of all views where the is no watched entity:
 *
 * @author Bernd Schröder
 * @version 1.0
 */
require_once('class.A_view.php');

/* user defined includes */
// section 10-5-25-11-53c52816:13cfe21cbec:-8000:0000000000000CB3-includes begin
// section 10-5-25-11-53c52816:13cfe21cbec:-8000:0000000000000CB3-includes end

/* user defined constants */
// section 10-5-25-11-53c52816:13cfe21cbec:-8000:0000000000000CB3-constants begin
// section 10-5-25-11-53c52816:13cfe21cbec:-8000:0000000000000CB3-constants end

/**
 * // Impressum
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class A4_view
    extends A_view
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
     $this->load_language("a4");
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

     "<section class=\"box info\">" .
     "<br />" .
     "<p>" . $language_array['C3_00'] . "</p>" .
     "</section>" .

     "<h5>" . $language_array['C3_0_header'] . "</h5>" .
     "<h6>" . $language_array['C3_1_header'] . "</h6>" .
     "<p>" . $language_array['C3_1'] . "</p>" .
     "<h6>" . $language_array['C3_2_header'] . "</h6>" .
     "<p>" . $language_array['C3_2'] . "</p>" .
     "<h6>" . $language_array['C3_3_header'] . "</h6>" .
     "<p>" . $language_array['C3_3'] . "</p>" .
     "<p>" . $language_array['C3_4'] . "</p>" ;
     return $column3_content;
    }
}?>