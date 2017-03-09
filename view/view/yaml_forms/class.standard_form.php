<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.standard_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 25.01.2017, 13:00:58 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section -87--2--7--80--2c38c271:1522fb535ee:-8000:0000000000000866-includes begin
// section -87--2--7--80--2c38c271:1522fb535ee:-8000:0000000000000866-includes end

/* user defined constants */
// section -87--2--7--80--2c38c271:1522fb535ee:-8000:0000000000000866-constants begin
// section -87--2--7--80--2c38c271:1522fb535ee:-8000:0000000000000866-constants end

/**
 * Short description of class standard_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class standard_form
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute action
     *
     * @access protected
     * @var String
     */
    protected $action = null;

    /**
     * Short description of attribute name
     *
     * @access protected
     * @var String
     */
    protected $name = null;

    /**
     * Short description of attribute header
     *
     * @access protected
     * @var String
     */
    protected $header = null;

    /**
     * Short description of attribute enctype
     *
     * @access protected
     * @var String
     */
    protected $enctype = null;

    /**
     * Short description of attribute language
     *
     * @access protected
     * @var Integer
     */
    protected $language = null;

    /**
     * Short description of attribute model
     *
     * @access protected
     * @var Integer
     */
    protected $model = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_root_view_control()
    {
     return
     dirname(dirname(dirname(dirname(__FILE__)))) .
     '/view/view/yaml_controls/';
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_root()
    {
     return
     dirname(dirname(dirname(dirname(__FILE__)))) .
     '';
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  action
     */
    public function __construct($action)
    {
     $this->action = $action;
     $this->name = "standard_form";
     $this->enctype = "";
     $this->header = $this->language['C3_form_header'];
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  name
     */
    public function set_name($name)
    {
     $this->name = $name;
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
     * @param  enctype
     */
    public function set_enctype($enctype)
    {
     $this->enctype = $enctype;
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
    public function get_model()
    {
     return $this->model;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_element_list()
    {
     ;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_button()
    {
     if( defined('__VIEW_CONTROL__') == FALSE )
     { define('__VIEW_CONTROL__', $this->get_root_view_control() ); }
     require_once(__VIEW_CONTROL__.'class.send_reset_button_group.php');
     
     $button = new send_reset_button_group();
     $button->set_send($this->language['C3_send_button']);
     $button->set_reset($this->language['C3_reset_button']);
     return $button->get_button();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_form()
    {
     return
     "<form method=\"post\"" .
     "enctype=\"" . $this->enctype . "\"" .
     "action=" . "\"" . $this->action . "\"" .
     "id=" .
     "\"" . $this->name . "\"" .
     "class=" .
     "\"" . "ym-form ym-full linearize-form"  . "\"" . 
     "role=" . 
     "\"" .  "application" . "\">" . 
     $this->get_header() .
     $this->get_element_list() .
     $this->get_button() .
     "</form>";
    }
}?>