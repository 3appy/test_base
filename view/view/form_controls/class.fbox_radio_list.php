<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.fbox_radio_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 20.06.2014, 14:37:03 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include fbox_radio_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_radio_element.php');

/**
 * include standard_element_form
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.standard_element_form.php');

/* user defined includes */
// section 10-30-49-73-5f7b5aa3:14521345de3:-8000:0000000000000FFA-includes begin
// section 10-30-49-73-5f7b5aa3:14521345de3:-8000:0000000000000FFA-includes end

/* user defined constants */
// section 10-30-49-73-5f7b5aa3:14521345de3:-8000:0000000000000FFA-constants begin
// section 10-30-49-73-5f7b5aa3:14521345de3:-8000:0000000000000FFA-constants end

/**
 * Short description of class fbox_radio_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_radio_list
    extends standard_element_form
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute model
     *
     * @access public
     * @var Integer
     */
    public $model = null;
    public $language = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  model
     */
    public function load($model)
    {
     return ;
    }
    
    function set_language($language)
    {
     $this->language = $language;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_element()
    {
     return
     "<div class=\"ym-fbox\">" .
     "<span class=\"ym-label\">" . $this->label . "</span>" .
     "<div class=\"ym-fbox-wrap\">" .
     $this->load(  $this->model ) .
     "</div>" .
     "</div>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  model
     */
    public function __construct($model)
    {
     $this->model = $model;
    }
}?>