<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.fbox_select_element.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 01.12.2016, 11:53:04 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include standard_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.standard_element.php');

/* user defined includes */
// section 10-30--8--106--aeb2dc0:15235c5d6c7:-8000:0000000000000A8B-includes begin
// section 10-30--8--106--aeb2dc0:15235c5d6c7:-8000:0000000000000A8B-includes end

/* user defined constants */
// section 10-30--8--106--aeb2dc0:15235c5d6c7:-8000:0000000000000A8B-constants begin
// section 10-30--8--106--aeb2dc0:15235c5d6c7:-8000:0000000000000A8B-constants end

/**
 * Short description of class fbox_select_element
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_select_element
    extends standard_element
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute language
     *
     * @access public
     * @var String
     */
    public $language = null;

    /**
     * Short description of attribute model
     *
     * @access public
     * @var Integer
     */
    public $model = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function __construct()
    {
     if( defined('__VIEW_CONTROL__') == FALSE )
     { define('__VIEW_CONTROL__', $this->get_root_view_control() ); }
     require_once(__VIEW_CONTROL__. 'class.fbox_model.php');
     
     parent::__construct();
     $this->model = new fbox_model();
     $this->size = 1;
     $this->value = 0;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  language
     */
    public function set_language($language)
    {
     $this->language = $language;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  model
     */
    public function set_model($model)
    {
     $this->model = $model;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function define_model()
    {
     ;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_model()
    {
     $return_string ="";
     $count = $this->model->get_item_count();
     
     for( $n = 0; $n < $count; $n++ )
     {
     $element = $this->model->get_item( $n );
     $id = $element->get_id();
     
//     if( ( $this->value == (int)0 ) AND ( $id == (int)0 ) )
     if( $id == (int)0 )
     {
     $return_string .=
     "<option value=\"". $element->get_id() . "\"" .
     "selected=\"selected\" disabled=\"disabled\">" .
     $element->get_text() .
     "</option>";
     }
     
     else if( $this->value == $element->get_id() )
     {
     $return_string .=
     "<option selected value=\"". $element->get_id() . "\">" .
     $element->get_text() .
     "</option>";
     }
     
     else
     {
     $return_string .=
     "<option value=\"". $element->get_id() . "\">" .
     $element->get_text() .
     "</option>";
     }
     }
     return $return_string;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_element()
    {
     if ( $this->requested )
     {
     $return =
     "<div class=\"ym-fbox-select ym-error\"" .
     "role=\"alert\" aria-live=\"assertive\">" .
     "<label for=\"" . $this->name . "\">" . $this->label .
     "<sup class=\"ym-required\" title=\"".
     "This field is mandatory.\">*</sup></label>";
     }
     else
     {
     $return =
     "<div class=\"ym-fbox-select\">" .
     "<label for=\"" . $this->name . "\">" . $this->label . "</label>";
     }
     $return .=
     "<select name= \"" . $this->name . "\"" .
     " id= \"" . $this->name . "\"" .
     " size= \"" . $this->size . "\">" .
     $this->load_model() .
     "</select>" .
     "</div>";
     return $return;
    }
}?>