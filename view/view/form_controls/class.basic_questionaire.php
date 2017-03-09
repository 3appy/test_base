<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.basic_questionaire.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 16.07.2014, 13:48:54 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include prev_next_button
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.prev_next_button.php');

/**
 * include standard_form
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.standard_form.php');

/* user defined includes */
// section 127-0-0-1-7f5d1cef:146aa6becca:-8000:000000000000102B-includes begin
// section 127-0-0-1-7f5d1cef:146aa6becca:-8000:000000000000102B-includes end

/* user defined constants */
// section 127-0-0-1-7f5d1cef:146aa6becca:-8000:000000000000102B-constants begin
// section 127-0-0-1-7f5d1cef:146aa6becca:-8000:000000000000102B-constants end

/**
 * Short description of class basic_questionaire
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class basic_questionaire
    extends standard_form
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 

    // --- ATTRIBUTES ---

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
     */
    public function get_button()
    {
     $button = new prev_next_button();
     $button->set_previous($this->language['C3_back_button']);
     $button->set_next($this->language['C3_forward_button']);
     $button->set_count( $this->count );
     $button->set_actuell( $this->actuell );
     return $button->get_button();
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
     if ( $actuell > $this->count )
     { $this->actuell = $this->count; }
     elseif ( $actuell < (int)1 )
     { $this->actuell = (int)1; }
     else
     { $this->actuell = $actuell; }
    }
}?>