<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.A0_view.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 08.06.2015, 09:05:00 with ArgoUML PHP module 
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
// section -64--88--78-21-467d1499:1424322966b:-8000:0000000000001230-includes begin
// section -64--88--78-21-467d1499:1424322966b:-8000:0000000000001230-includes end

/* user defined constants */
// section -64--88--78-21-467d1499:1424322966b:-8000:0000000000001230-constants begin
// section -64--88--78-21-467d1499:1424322966b:-8000:0000000000001230-constants end

/**
 * Short description of class A0_view
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class A0_view
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
     /*NEW*/
    public function __construct()
    {
     parent::__construct();
     $this->load_language("a0");
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
     "<p>" . "</p>" .
     "<h5>" . $language_array['C3_1_header'] . "</h5>" .
     "<p>" . $language_array['C3_1_1'] . "</p>" .
     "<p>" . $language_array['C3_1_2'] . "</p>" .
     "<h5>" . $language_array['C3_2_header'] . "</h5>" .
     
     "<img src=\"". $_SESSION['images'] .
     "skolenet_front.jpg\"" . "\" alt=\"\"" .
     " class=\"flexible float-right \"/> " .
     
     "<p>" . $language_array['C3_2_1'] . "</p>" .
     "<p>" . $language_array['C3_2_2'] . "</p>" .
     "<p>" . $language_array['C3_2_3'] . "</p>";
     return $column3_content;
    }
}?>