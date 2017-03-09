<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.A_view.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 08.12.2016, 10:07:35 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author Bernd Schröder
 * @version 1.0
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include Yaml_framework
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Yaml_framework.php');

/* user defined includes */
// section 127-0-0-1-10ef0061:13cf3214d7d:-8000:0000000000000C29-includes begin
// section 127-0-0-1-10ef0061:13cf3214d7d:-8000:0000000000000C29-includes end

/* user defined constants */
// section 127-0-0-1-10ef0061:13cf3214d7d:-8000:0000000000000C29-constants begin
// section 127-0-0-1-10ef0061:13cf3214d7d:-8000:0000000000000C29-constants end

/**
 * Short description of class A_view
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class A_view
    extends Yaml_framework
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     */
    public function __construct()
    {
     parent::__construct( null );
     $this->watch_relation = (int)0;
     $this->watch_entity->generate_vertical_A_navigation( 
     $this->get_watch_entity() );
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     */
    public function get_left_header_content()
    {
     return $_SESSION['domain'];
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_right_header_content()
    {
     $lang = $this->language_array;
     if ( $this->watch_entity->is_online() )
     {
     $login_logout = $this->get_link_A( (int)9, $lang['header_nav_9'] );
     return $login_logout;
     }
     else
     {
     $login_logout = $this->get_link_A( (int)1, $lang['header_nav_1'] );
     $contact = $this->get_link_A( (int)25, $lang['header_nav_25'] );
     $language = $this->get_link_A( (int)24, $lang['header_nav_24'] );
     $register_school = $this->get_link_A( (int)20, $lang['header_nav_20'] );
     $contact = $this->get_link_A( (int)21, $lang['header_nav_21'] );
     return $login_logout . " | " . $contact . " | " .
     $language . " | " . $register_school . " | " . $contact;
     }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_top_navigation()
    {
     return "";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_right_navigation_content()
    {
     return "";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_watched_entity_avatar()
    {
     return  "";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_relation_info()
    {
     return "";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_top_search()
    {
     return "";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_column1_content()
    {
     $column1_content =  "" .
     "<p><img src=\"". $_SESSION['images'] .
     "3appy_logo.jpg\"" . "\" alt=\"\" class=\"flexible center\"/></p>";
     return $column1_content;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_left_grid()
    {
     return
     "<article class=\"ym-g33 ym-gl\">" .
     "<div class=\"ym-gbox-left secondary\">" .
     "<div class=\"ym-contain-oh\">" .
     $this->get_left_navigation_content() .
     $this->get_column1_content() .
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
     "<article class=\"ym-g66 ym-gr\">" .
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
    public function get_right_grid()
    {
     return "";
    }
}?>