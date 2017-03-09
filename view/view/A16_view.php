<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.A16_view.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 17.07.2015, 10:16:21 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * // presentation
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.A_view_presentation.php');

/* user defined includes */
// section 10-30-49-68--161175f9:14e9af3e710:-8000:0000000000002FEC-includes begin
// section 10-30-49-68--161175f9:14e9af3e710:-8000:0000000000002FEC-includes end

/* user defined constants */
// section 10-30-49-68--161175f9:14e9af3e710:-8000:0000000000002FEC-constants begin
// section 10-30-49-68--161175f9:14e9af3e710:-8000:0000000000002FEC-constants end

/**
 * Short description of class A16_view
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class A16_view
    extends A_view_presentation
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
     parent::__construct( null );
     $this->load_language("a16");
    }
    
    // Bilder werden Textabhängig !!!!
    
    
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_column3_content()
    {
     return 
     $this->get_info_box() . 
     "<div id=\"owl-demo\" class=\"owl-carousel owl-theme\">" .
     "<div><img src=\"". $_SESSION['carousel'] . "lehrer1.jpg\" class=\"flexible bordered center\" alt=\"\" role=\"presentation\"/></div>" .
     "<div><img src=\"". $_SESSION['carousel'] . "lehrer2.jpg\" class=\"flexible bordered center\" alt=\"\" role=\"presentation\"/></div>" .
     "<div><img src=\"". $_SESSION['carousel'] . "lehrer3.jpg\" class=\"flexible bordered center\" alt=\"\" role=\"presentation\"/></div>" .
     "<div><img src=\"". $_SESSION['carousel'] . "lehrer4.jpg\" class=\"flexible bordered center\" alt=\"\" role=\"presentation\"/></div>" .
     "<div><img src=\"". $_SESSION['carousel'] . "lehrer5.jpg\" class=\"flexible bordered center\" alt=\"\" role=\"presentation\"/></div>" .
     "<div><img src=\"". $_SESSION['carousel'] . "lehrer6.jpg\" class=\"flexible bordered center\" alt=\"\" role=\"presentation\"/></div>" .
     "<div><img src=\"". $_SESSION['carousel'] . "lehrer7.jpg\" class=\"flexible bordered center\" alt=\"\" role=\"presentation\"/></div>" .
     "<div><img src=\"". $_SESSION['carousel'] . "lehrer8.jpg\" class=\"flexible bordered center\" alt=\"\" role=\"presentation\"/></div>" .
     "<div><img src=\"". $_SESSION['carousel'] . "lehrer9.jpg\" class=\"flexible bordered center\" alt=\"\" role=\"presentation\"/></div>" .
     "<div><img src=\"". $_SESSION['carousel'] . "lehrer10.jpg\" class=\"flexible bordered center\" alt=\"\" role=\"presentation\"/></div>" .
     "<div><img src=\"". $_SESSION['carousel'] . "lehrer11.jpg\" class=\"flexible bordered center\" alt=\"\" role=\"presentation\"/></div>" .
     "</div>";
    }
}?>