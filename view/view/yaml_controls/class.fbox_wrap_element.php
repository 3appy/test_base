<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.fbox_wrap_element.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 12.01.2016, 17:17:59 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section 10-30--8--106--aeb2dc0:15235c5d6c7:-8000:0000000000000AAA-includes begin
// section 10-30--8--106--aeb2dc0:15235c5d6c7:-8000:0000000000000AAA-includes end

/* user defined constants */
// section 10-30--8--106--aeb2dc0:15235c5d6c7:-8000:0000000000000AAA-constants begin
// section 10-30--8--106--aeb2dc0:15235c5d6c7:-8000:0000000000000AAA-constants end

/**
 * Short description of class fbox_wrap_element
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_wrap_element
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute header
     *
     * @access public
     * @var String
     */
    public $header = null;

    /**
     * Short description of attribute data_array
     *
     * @access public
     * @var Integer
     */
    public $data_array = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function __construct()
    {
     $this->header = "";
     $this->data_array = array();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  header
     */
    public function set_header($header)
    {
     $this->header = $header;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_header()
    {
     return "<h6 class=\"ym-fbox-heading\">" . $this->header . "</h6>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  item
     */
    public function add_item($item)
    {
     $this->data_array[] = $item;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
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
     * @author firstname and lastname of author, <author@example.org>
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
     * @author firstname and lastname of author, <author@example.org>
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
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
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
}?>