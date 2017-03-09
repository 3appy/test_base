<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.standard_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 30.07.2013, 15:42:35 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section 127-0-0-1--5df516b5:13f33bf834e:-8000:0000000000000C1D-includes begin
// section 127-0-0-1--5df516b5:13f33bf834e:-8000:0000000000000C1D-includes end

/* user defined constants */
// section 127-0-0-1--5df516b5:13f33bf834e:-8000:0000000000000C1D-constants begin
// section 127-0-0-1--5df516b5:13f33bf834e:-8000:0000000000000C1D-constants end

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
     * @access private
     * @var String
     */
    private $action = null;

    /**
     * Short description of attribute name
     *
     * @access private
     * @var String
     */
    private $name = null;

    /**
     * Short description of attribute header
     *
     * @access private
     * @var String
     */
    private $header = null;

    /**
     * Short description of attribute enctype
     *
     * @access public
     * @var String
     */
    public $enctype = null;
    private $frame = null;
    private $model = null;


    /**
     * Short description of attribute language
     *
     * @access public
     * @var Integer
     */
    public $language = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  action
     * @version 1.0
     */
    public function set_frame($frame)
    {
      $this->frame = $frame;
    }

    /**
     * Short description of attribute frame
     *
     * @access public
     * @var Integer
     */
    public function get_frame()
    {
      return $this->frame;
    }

    public function set_model($model)
    {
      $this->model = $model;
    }

    /**
     * Short description of attribute frame
     *
     * @access public
     * @var Integer
     */
    public function get_model()
    {
      return $this->model;
    }

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
     * @author Bernd Schröder
     * @param  name
     * @version 1.0
     */
    public function set_name($name)
    {
     $this->name = $name;
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
    public function get_element_list()
    {
     ;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_button()
    {
     return ;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
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
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  language
     * @version 1.0
     */
    public function set_language($language)
    {
     $this->language = $language;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  enctype
     * @version 1.0
     */
    public function set_enctype($enctype)
    {
     $this->enctype = $enctype;
    }
}?>