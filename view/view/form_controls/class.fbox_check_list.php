<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.fbox_check_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 02.04.2014, 09:18:40 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include fbox_check_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_check_element.php');

/**
 * include standard_element_form
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.standard_element_form.php');

/* user defined includes */
// section -84-28-79--8--2716b4cc:1450857f12b:-8000:0000000000001BE3-includes begin
// section -84-28-79--8--2716b4cc:1450857f12b:-8000:0000000000001BE3-includes end

/* user defined constants */
// section -84-28-79--8--2716b4cc:1450857f12b:-8000:0000000000001BE3-constants begin
// section -84-28-79--8--2716b4cc:1450857f12b:-8000:0000000000001BE3-constants end

/**
 * Short description of class fbox_check_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_check_list
    extends standard_element_form
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute model
     *
     * @access private
     * @var Integer
     */
    private $model = null;

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
     $this->load( $this->model ) .
     "</div>" .
     "</div>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  model
     */
    public function __construct($model )
    {
     $this->model = $model;
    }
}?>