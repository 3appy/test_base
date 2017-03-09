<?php

error_reporting(E_ALL);

/**
 * // presentation
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
// section 10-30-49-108--670f4fe9:14c5b43ffdc:-8000:0000000000002C05-includes begin
// section 10-30-49-108--670f4fe9:14c5b43ffdc:-8000:0000000000002C05-includes end

/* user defined constants */
// section 10-30-49-108--670f4fe9:14c5b43ffdc:-8000:0000000000002C05-constants begin
// section 10-30-49-108--670f4fe9:14c5b43ffdc:-8000:0000000000002C05-constants end

/**
 * // presentation
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class A_view_presentation
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
     parent::__construct( null );
     $this->watch_relation = (int)0;
     $this->watch_entity->generate_vertical_A15_navigation(
     $this->get_watch_entity() );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_left_grid()
    {
     return
     "<article class=\"ym-g25 ym-gl\">" .
     "<div class=\"ym-gbox-left secondary\">" .
     "<div class=\"ym-contain-oh\">" .
     $this->get_left_navigation_content() .
     "</div>" .
     "</div>" .
     "</article>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_middle_grid()
    {
     return
     "<article class=\"ym-g75 ym-gr\">" .
     "<div class=\"ym-gbox-left secondary\">" .
     "<div class=\"ym-contain-oh\">" .
     $this->get_Session_error_information() .
     $this->get_column3_content() .
     "</div>" .
     "</div>" .
     "</article>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_info_box()
    {
     $language = $this->get_language_array();
     return
     "<section class=\"box info\">" .
     "<br />" .
     "<h5>" . $language['C3_1_info_header'] . "</h5>" .
     "<p>" . $language['C3_2_info'] . "</p>" .
     "</section>" ;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_column3_content()
    {
     ;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_html_header()
    {
     require_once('class.carousel_html_header.php');
     
     $header = new carousel_html_header();
     return $header->get_representation();
    }
}?>