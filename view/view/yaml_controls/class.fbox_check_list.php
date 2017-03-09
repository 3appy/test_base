<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.fbox_check_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 17.01.2017, 14:40:09 with ArgoUML PHP module 
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
// section 10-30-49-48-4b357242:159a6cece72:-8000:0000000000000B5E-includes begin
// section 10-30-49-48-4b357242:159a6cece72:-8000:0000000000000B5E-includes end

/* user defined constants */
// section 10-30-49-48-4b357242:159a6cece72:-8000:0000000000000B5E-constants begin
// section 10-30-49-48-4b357242:159a6cece72:-8000:0000000000000B5E-constants end

/**
 * Short description of class fbox_check_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_check_list
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
     // here we need a new checkbox
     $return_string ="";
     $count = $this->model->get_item_count();
     
     for( $n = 0; $n < $count; $n++ )
     {
     $element = $this->model->get_item( $n );
     $name = $this->name; // name will be "pupils[]"
     $value = $element->get_id();  // id from member
     $label = $element->get_text(); // name from member
     
     $return_string .=
     "<div class=\"ym-fbox-check\">" .
     "<input type=\"checkbox\"" .
     "name= \"" . $name . "\"" .
     "id= \"" . $name . "\"" .
     "value= \"" . $value . "\">" .
     "<label for= \"" . $name . "\">" . $label . "</label>" .
     "</div>";
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
     { $return = "<div class=\"ym-fbox-check ym-error\">"; }
     else
     { $return = "<div class=\"ym-fbox-check\">"; }
     
     $return .=
     "<div class=\"ym-fbox\">" .
     "<span class=\"ym-label\">" . $this->label . "</span>" .
     "<div class=\"ym-fbox-wrap\">" .
     $this->load_model() .
     "</div>" .
     "</div>";
     return $return;
    }
}?>