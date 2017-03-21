<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.member_info_view.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 20.03.2017, 16:49:01 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section 10-5-24-94--2aad8733:15ae8a70121:-8000:0000000000001DC4-includes begin
// section 10-5-24-94--2aad8733:15ae8a70121:-8000:0000000000001DC4-includes end

/* user defined constants */
// section 10-5-24-94--2aad8733:15ae8a70121:-8000:0000000000001DC4-constants begin
// section 10-5-24-94--2aad8733:15ae8a70121:-8000:0000000000001DC4-constants end

/**
 * Short description of class member_info_view
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class member_info_view
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute member
     *
     * @access private
     * @var Integer
     */
    private $member = null;

    /**
     * Short description of attribute text
     *
     * @access private
     * @var String
     */
    private $text = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member
     */
    public function set_member($member)
    {
     $this->member = $member;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  text
     */
    public function set_text($text)
    {
     $this->text = $text;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_left_image()
    {
     $image = $this->member->get_image()->get_medium_thumb();
     
     return
     "<div class=\"ym-g25 ym-gl\">" .
     "<div class=\"ym-gbox\">" .
     "<img src=\"". $image .
     "\" alt=\"\" class=\"flexible  bordered\"/>" . "<br/>" .
//     "<a href=\"" . $_SESSION['control_base'] .
//     "B0_pre_frame.php?id=" .
//     $this->author->get_id() . "\">" .
//     "</a>" .
     "</div>" .
     "</div>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_right_text()
    {
     return
     "<div class=\"ym-g75 ym-gr\">" .
     "<div class=\"ym-gbox\">" .
     "<p class=\"box info\">" .
     $this->text .
     "</p>" .
     "</div>" .
     "</div>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_view()
    {
     return
     "<div class=\"ym-grid ym-equalize\">" .
     $this->get_left_image() .
     $this->get_right_text() .
     "</div>";
    }
}?>