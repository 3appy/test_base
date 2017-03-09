<?php

error_reporting(E_ALL);

/**
 * // Wir über uns
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
// section 10-30-49-108--670f4fe9:14c5b43ffdc:-8000:0000000000002C03-includes begin
// section 10-30-49-108--670f4fe9:14c5b43ffdc:-8000:0000000000002C03-includes end

/* user defined constants */
// section 10-30-49-108--670f4fe9:14c5b43ffdc:-8000:0000000000002C03-constants begin
// section 10-30-49-108--670f4fe9:14c5b43ffdc:-8000:0000000000002C03-constants end

/**
 * // Wir über uns
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class A8_view
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
     $this->load_language("a8");
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
     "<p>" . $language_array['C3_1_header'] . "</p>" .
     "<p>" . $language_array['C3_1'] . "</p>" .
     "<p>" . $language_array['C3_2'] . "</p>" .
     "<p>" . $language_array['C3_3'] . "</p>" ;
     return $column3_content;
    }
}?>