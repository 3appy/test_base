<?php

error_reporting(E_ALL);

/**
 * //32 show all related teams
 *
 * @author Bernd Schröder
 * @version 1.0
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
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001E3A-includes begin
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001E3A-includes end

/* user defined constants */
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001E3A-constants begin
// section -64--88--78-21-49e103:13d8e9e7cd9:-8000:0000000000001E3A-constants end

/**
 * //32 show all related teams
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class C32_view
    extends C_view
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
     $this->load_language("c32");
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_column3_content()
    {
     $column3_content =  "" .
     $this->get_working_info( "show all related teams" );
     return $column3_content;
    }
}?>