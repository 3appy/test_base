<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.B8_view.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 09.12.2016, 17:42:27 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * The B - view is the basis of all views where the watched entity is of an
 * of a member:
 *
 * @author Bernd Schröder
 * @version 1.0
 */
require_once('class.B_view.php');

/* user defined includes */
// section 10-5-29--89-74b01f67:158e4400dc1:-8000:00000000000035C1-includes begin
// section 10-5-29--89-74b01f67:158e4400dc1:-8000:00000000000035C1-includes end

/* user defined constants */
// section 10-5-29--89-74b01f67:158e4400dc1:-8000:00000000000035C1-constants begin
// section 10-5-29--89-74b01f67:158e4400dc1:-8000:00000000000035C1-constants end

/**
 * Short description of class B8_view
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class B8_view
    extends B_view
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
     $this->load_language("b8");
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_column3_content()
    {
     $column3_content =  "" .
     $this->get_mobbing_selection();
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_mobbing_selection()
    {
     ;
    }
}?>