<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.send_reset_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 17.04.2013, 16:22:09 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include basic_form
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.basic_form.php');

/* user defined includes */
// section 127-0-0-1--5e453202:13df496c13d:-8000:0000000000000ACD-includes begin
// section 127-0-0-1--5e453202:13df496c13d:-8000:0000000000000ACD-includes end

/* user defined constants */
// section 127-0-0-1--5e453202:13df496c13d:-8000:0000000000000ACD-constants begin
// section 127-0-0-1--5e453202:13df496c13d:-8000:0000000000000ACD-constants end

/**
 * Short description of class send_reset_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class send_reset_form
    extends basic_form
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute send
     *
     * @access private
     * @var String
     */
    private $send = null;

    /**
     * Short description of attribute reset
     *
     * @access private
     * @var String
     */
    private $reset = null;

    /**
     * Short description of attribute vote1_string
     *
     * @access private
     * @var String
     */
    private $vote1_string = null;

    /**
     * Short description of attribute vote2_string
     *
     * @access private
     * @var String
     */
    private $vote2_string = null;

    /**
     * Short description of attribute vote3_string
     *
     * @access private
     * @var String
     */
    private $vote3_string = null;

    /**
     * Short description of attribute radio_box_header
     *
     * @access public
     * @var String
     */
    public $radio_box_header = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  send
     * @version 1.0
     */
    public function set_send($send)
    {
     $this->send = $send;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  reset
     * @version 1.0
     */
    public function set_reset($reset)
    {
     $this->reset = $reset;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_form_buttons()
    {
     return "" .
     "<div class=\"ym-fbox-button\">" .
     "<input type=\"submit\" value=\"" .
     $this->send .
     "\"  class=\"save\" id=\"submit\" name=\"submit\" />" .
     "<input type=\"reset\" value=\"" .
     $this->reset .
     "\" class=\"delete\" id=\"reset\" name=\"reset\" />" .
     "</div>";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     */
    public function get_form_header()
    {
     return "<h6>" . $this->form_header . "</h6>" .  "<br />" .
     "<h6 class=\"ym-fbox-heading\">" . $this->radio_box_header . "</h6>" .
     "<div class=\"ym-fbox-check\">" .
     "<div>" .
     "<input type=\"radio\"" .
     "name=\"saftely_level\" value=\"1\"" .
     "id=\"saftely_level_1\" />" .
     "<label for=\"saftely_level_1\">" .
     "<img src=\"". $_SESSION['icons'] .  "bullet_green.png\" " . "/>" .
     $this->vote1_string . "</label>" .
     "</div>" .
     "<div>" .
     "<input type=\"radio\"" .
     "name=\"saftely_level\" value=\"2\"" .
     "id=\"saftely_level_2\" />" .
     "<label for=\"saftely_level_2\">" .
     "<img src=\"". $_SESSION['icons'] .  "bullet_yellow.png\" " . "/>" .
     $this->vote2_string . "</label>" .
     "</div>" .
     "<div>" .
     "<input type=\"radio\"" .
     "name=\"saftely_level\" value=\"3\"" .
     "id=\"saftely_level_3\" />" .
     "<label for=\"saftely_level_3\">" .
     "<img src=\"". $_SESSION['icons'] .  "bullet_red.png\" " . "/>" .
     $this->vote3_string . "</label>" .
     "</div>" .
     "</div>";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  vote1_string
     * @version 1.0
     */
    public function set_vote1_string($vote1_string)
    {
     $this->vote1_string = $vote1_string;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  vote2_string
     * @version 1.0
     */
    public function set_vote2_string($vote2_string)
    {
     $this->vote2_string = $vote2_string;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  vote3_string
     * @version 1.0
     */
    public function set_vote3_string($vote3_string)
    {
     $this->vote3_string = $vote3_string;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  action
     */
    public function __construct($action)
    {
     parent::__construct($action);
     $this->send = "send";
     $this->reset = "reset";
     $this->vote1_string = "option1";
     $this->vote2_string = "option2";
     $this->vote3_string = "option3";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  radio_box_header radio_box_header
     * @version 1.0
     */
    public function set_radio_box_header($radio_box_header)
    {
     $this->radio_box_header = $radio_box_header;
    }
}?>