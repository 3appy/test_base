<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.link_button.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 30.06.2016, 12:02:53 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include standard_button
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.standard_button.php');

/* user defined includes */
// section 10-30-49-67--7c7125f6:155a0bfc0e7:-8000:0000000000000AF5-includes begin
// section 10-30-49-67--7c7125f6:155a0bfc0e7:-8000:0000000000000AF5-includes end

/* user defined constants */
// section 10-30-49-67--7c7125f6:155a0bfc0e7:-8000:0000000000000AF5-constants begin
// section 10-30-49-67--7c7125f6:155a0bfc0e7:-8000:0000000000000AF5-constants end

/**
 * Short description of class link_button
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class link_button
    extends standard_button
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute link
     *
     * @access public
     * @var String
     */
    public $link = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_button()
    {
     return
     "<p>" .
     "<a class=\"ym-button ym-next\"" . 
     "href=" .
     $this->link .
     ">" . $this->name . "</a>" .
     "</p>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  link
     */
    public function set_link($link)
    {
     $this->link = $link;
    }
}?>