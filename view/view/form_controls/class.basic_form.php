<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.basic_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 17.04.2013, 11:49:16 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section 127-0-0-1--5e453202:13df496c13d:-8000:0000000000000A5E-includes begin
// section 127-0-0-1--5e453202:13df496c13d:-8000:0000000000000A5E-includes end

/* user defined constants */
// section 127-0-0-1--5e453202:13df496c13d:-8000:0000000000000A5E-constants begin
// section 127-0-0-1--5e453202:13df496c13d:-8000:0000000000000A5E-constants end

/**
 * Short description of class basic_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class basic_form
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute action
     *
     * @access public
     * @var String
     */
    public $action = null;

    /**
     * Short description of attribute name
     *
     * @access public
     * @var String
     */
    public $name = null;

    /**
     * Short description of attribute form_header
     *
     * @access public
     * @var String
     */
    public $form_header = null;

    /**
     * Short description of attribute enctype
     *
     * @access public
     * @var String
     */
    public $enctype = null;
    private $frame = null;

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

    public function __construct($action)
    {
     $this->action = $action;
     $this->name = "basic_form";
     $this->form_header = "";
     $this->enctype = "";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function set_name()
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
    public function set_form_header($header)
    {
     $this->form_header = $header;
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
     $this->get_form_header() .
     $this->get_form_list() .
     $this->get_form_buttons() .
     "</form>";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  label
     * @param  name
     * @version 1.0
     */
    public function get_fbox_text($label, $name)
    {
     return "" .
     "<div class=\"ym-fbox-text\">" .
     "<label for=\"header\">" . $label . "</label>" .
     "<input type=\"text\" name=\"" . $name .
     "\" id=\"" . $name . "\" size=\"40\" />" .
     "</div>";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  label
     * @param  name
     * @version 1.0
     */
    public function get_fbox_area($label, $name)
    {
     return "" .
     "<div class=\"ym-fbox-text\">" .
     "<label for=\"header\">" . $label . "</label>" .
     "<textarea name=\"" . $name .
     "\" id=\"" . $name . "\" rows=\"7\"></textarea>" .
     "</div>";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_form_header()
    {
     return "<h5>" . $this->form_header . "</h5>" .  "<br />";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_form_list()
    {
     return "";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_form_buttons()
    {
     return "";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  label
     * @param  name
     * @version 1.0
     */
    public function get_hidden_fbox_text($label, $name)
    {
     return "" .
     "<div class=\"ym-fbox-text\">" .
     "<label for=\"header\">" . $label . "</label>" .
     "<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"20000000\"  />" .
     "<input type=\"file\" name=\"" . $name . "\" id=\"file\" />" .
     "</div>";
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
    
    public function get_fbox_radio_check( $header, $vote_1, $vote_2 )
    {
     return "" .
     "<h6 class=\"ym-fbox-heading\">" . $header . "</h6>" .
     "<div class=\"ym-fbox-check\">" .
     "<div>" .
     "<input type=\"radio\"" .
     "name=\"add\" value=\"1\"" .
     "id=\"add_1\" />" .
     "<label for=\"add_1\">" .
     $vote_1 . "</label>" .
     "</div>" .
     "<div>" .
     "<input type=\"radio\"" .
     "name=\"add\" value=\"2\"" .
     "id=\"add_2\" />" .
     "<label for=\"add_2\">" .
     $vote_2 . "</label>" .
     "</div>" .
     "</div>";
    }
    
}?>