<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.fbox_wrap_element.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 13.07.2013, 06:18:53 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include standard_element_form
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.standard_element_form.php');

/* user defined includes */
// section -64--88--78-21--704b3cc0:13f508c26e4:-8000:0000000000000CF3-includes begin
// section -64--88--78-21--704b3cc0:13f508c26e4:-8000:0000000000000CF3-includes end

/* user defined constants */
// section -64--88--78-21--704b3cc0:13f508c26e4:-8000:0000000000000CF3-constants begin
// section -64--88--78-21--704b3cc0:13f508c26e4:-8000:0000000000000CF3-constants end

/**
 * Short description of class fbox_wrap_element
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_wrap_element
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute header
     *
     * @access private
     * @var String
     */
    private $header = null;

    /**
     * Short description of attribute data_array
     *
     * @access private
     * @var Integer
     */
    private $data_array = null;

    // --- OPERATIONS ---
    /**
     * $return_element = "";
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_element()
    {
     switch(count( $this->data_array ))
     {
     case ( 1 ):
     $return_element = $this->one_element();
     break;
     case ( 2 ):
     $return_element = $this->two_element();
     break;
     case ( 3 ):
     $return_element = $this->three_element();
     break;
     default:
     break;
     }
     return $return_element;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  header
     * @version 1.0
     */
    public function set_header($header)
    {
     $this->header = $header;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_header()
    {
     return "<h6 class=\"ym-fbox-heading\">" . $this->header . "</h6>";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function __construct()
    {
     $this->header = "";
     $this->data_array = array();
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
//    public function add_item( standard_element_form $new_item)
    public function add_item( $new_item)
    {
     $this->data_array[] = $new_item;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function one_element()
    {
     return
     "<div class=\"ym-fbox-wrap ym-grid\">" .
     $this->get_header() .

     $this->data_array[ 0 ]->get_element() .
     "</div>";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function two_element()
    {
     return
     "<div class=\"ym-fbox-wrap ym-grid\">" .
     $this->get_header() .
     
     "<div class=\"ym-g50 ym-gl\">" .
     $this->data_array[ 0 ]->get_element() .
     "</div>" .
     
     "<div class=\"ym-g50 ym-gr\">" .
     $this->data_array[ 1 ]->get_element() .
     "</div>" .
     "</div>";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function three_element()
    {
     return
     "<div class=\"ym-fbox-wrap ym-grid\">" .
     $this->get_header() .
     
     "<div class=\"ym-g33 ym-gl\">" .
     $this->data_array[ 0 ]->get_element() .
     "</div>" .
     
     "<div class=\"ym-g33 ym-gl\">" .
     $this->data_array[ 1 ]->get_element() .
     "</div>" .
     
     "<div class=\"ym-g33 ym-gr\">" .
     $this->data_array[ 2 ]->get_element() .
     "</div>" .
     "</div>";
    }
}?>