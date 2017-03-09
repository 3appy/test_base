<?php

error_reporting(E_ALL);

/**
 * // disclaim
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
// section 10-30-8-120-371b0bb:13d0183520e:-8000:0000000000000C8D-includes begin
// section 10-30-8-120-371b0bb:13d0183520e:-8000:0000000000000C8D-includes end

/* user defined constants */
// section 10-30-8-120-371b0bb:13d0183520e:-8000:0000000000000C8D-constants begin
// section 10-30-8-120-371b0bb:13d0183520e:-8000:0000000000000C8D-constants end

/**
 * // disclaim
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class A5_view
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
     $this->load_language("a5");
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
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
     "<p>" . $language['C3_1_1'] . "</p>" .
     "<p>" . $language['C3_1_2'] . "</p>" .
     "<h6>" . $language['C3_2_header'] . "</h6>" .
     "<p>" . $language['C3_2_1'] . "</p>" .
     "<h6>" . $language['C3_3_header'] . "</h6>" .
     "<p>" . $language['C3_3_1'] . "</p>" .
     "<h6>" . $language['C3_4_header'] . "</h6>" .
     "<p>" . $language['C3_4_1'] . "</p>" .
     "<p>" . $language['C3_4_2'] . "</p>" .
     "<h6>" . $language['C3_5_header'] . "</h6>" .
     "<p>" . $language['C3_5_1'] . "</p>" .
     "<h6>" . $language['C3_6_header'] . "</h6>" .
     "<p>" . $language['C3_6_1'] . "</p>";
     return $column3_content;
    }
}?>