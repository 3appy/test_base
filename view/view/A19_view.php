<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.A19_view.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 28.07.2015, 09:14:44 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
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
// section 127-0-0-1--219a8e72:14ed0e88370:-8000:00000000000021EF-includes begin
// section 127-0-0-1--219a8e72:14ed0e88370:-8000:00000000000021EF-includes end

/* user defined constants */
// section 127-0-0-1--219a8e72:14ed0e88370:-8000:00000000000021EF-constants begin
// section 127-0-0-1--219a8e72:14ed0e88370:-8000:00000000000021EF-constants end

/**
 * Short description of class A19_view
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class A19_view
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
     $this->load_language("a19");
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
     "<br /><p>" . $language['C3_00'] . "</p>" .
     "</section>" .

     "<h6>" . $language['C3_1_header'] . "</h6>" .
     "<p>" . $language['C3_1_1'] . "</p>" .
     "<p>" . $language['C3_1_2'] . "</p>" .
     "<h6>" . $language['C3_2_header'] . "</h6>" .
     "<p>" . $language['C3_2_1'] . "</p>" .
     "<h6>" . $language['C3_3_header'] . "</h6>" .
     "<p>" . $language['C3_3_1'] . "</p>" .
     "<p>" . $language['C3_3_2'] . "</p>" .
     "<p>" . $language['C3_3_3'] . "</p>" .
     "<p>" . $language['C3_3_4'] . "</p>" .
     "<p>" . $language['C3_3_5'] . "</p>" .
     "<h6>" . $language['C3_4_header'] . "</h6>" .
     "<p>" . $language['C3_4_1'] . "</p>" .
     "<h6>" . $language['C3_5_header'] . "</h6>" .
     "<p>" . $language['C3_5_1'] . "</p>" .
     "<p>" . $language['C3_5_2'] . "</p>" .
     "<p>" . $language['C3_5_3'] . "</p>" .
     "<p>" . $language['C3_5_4'] . "</p>" .
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
     "<p>" . $language['C3_12_1'] . "</p>";
     return $column3_content;
    }
}?>