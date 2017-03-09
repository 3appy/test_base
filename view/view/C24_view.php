<?php

error_reporting(E_ALL);

/**
 * The C24 view is the view for connection schools
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * The C - view is the basis of all views where the watched entity is of an
 * of a team:
 *
 * @author Bernd Schröder
 * @version 1.0
 */
require_once('class.C_view.php');

/* user defined includes */
// section 10-5-23--98--6bb21e0c:15a2ee96cfc:-8000:00000000000027A3-includes begin
// section 10-5-23--98--6bb21e0c:15a2ee96cfc:-8000:00000000000027A3-includes end

/* user defined constants */
// section 10-5-23--98--6bb21e0c:15a2ee96cfc:-8000:00000000000027A3-constants begin
// section 10-5-23--98--6bb21e0c:15a2ee96cfc:-8000:00000000000027A3-constants end

/**
 * The C24 view is the view for connection schools
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class C24_view
    extends C_view
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
     $this->load_language("c24");
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_column3_content()
    {
     // standard selection
     $column3_content = $this->get_school_connection();
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_school_connection()
    {
     return "hier erscheint die Schule - Schule Funktion. Anhand von einer Liste von Schulen kann die Schule herausgesucht werden, mit der man zusammenarbeiten m&ouml;chte.";
    }
}?>