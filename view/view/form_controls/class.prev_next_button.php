<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.prev_next_button.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 15.07.2014, 14:09:42 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include progress_bar
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.progress_bar.php');

/**
 * include standard_button
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.standard_button.php');

/* user defined includes */
// section 10-30-49-33--1fefebe1:14739c3340d:-8000:0000000000001102-includes begin
// section 10-30-49-33--1fefebe1:14739c3340d:-8000:0000000000001102-includes end

/* user defined constants */
// section 10-30-49-33--1fefebe1:14739c3340d:-8000:0000000000001102-constants begin
// section 10-30-49-33--1fefebe1:14739c3340d:-8000:0000000000001102-constants end

/**
 * Short description of class prev_next_button
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class prev_next_button
    extends standard_button
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute previous
     *
     * @access public
     * @var String
     */
    public $previous = null;

    /**
     * Short description of attribute next
     *
     * @access public
     * @var String
     */
    public $next = null;

    /**
     * Short description of attribute count
     *
     * @access public
     * @var Integer
     */
    public $count = null;

    /**
     * Short description of attribute actuell
     *
     * @access public
     * @var Integer
     */
    public $actuell = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  previous
     */
    public function set_previous($previous)
    {
     $this->previous = $previous;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  next
     */
    public function set_next($next)
    {
     $this->next = $next;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  count
     */
    public function set_count($count)
    {
     $this->count = $count;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  actuell
     */
    public function set_actuell($actuell)
    {
     $this->actuell = $actuell;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_button()
    {
     $progressbar = new progress_bar();
     
     return "" .
    "<div class=\"ym-fbox-button\">" .
     $progressbar->get_element( $this->count, $this->actuell ) .
     "<input type=\"submit\" value=\"" .
     $this->previous .
     "\"  class=\"save\" id=\"submit\" name=\"previous\" />" .
     "<input type=\"submit\" value=\"" .
     $this->next .
     "\"  class=\"save\" id=\"submit\" name=\"next\" />" .
     "</div>";
    }
}?>