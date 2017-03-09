<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.standard_button.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 04.08.2013, 21:53:49 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section 127-0-0-1--5df516b5:13f33bf834e:-8000:0000000000000C34-includes begin
// section 127-0-0-1--5df516b5:13f33bf834e:-8000:0000000000000C34-includes end

/* user defined constants */
// section 127-0-0-1--5df516b5:13f33bf834e:-8000:0000000000000C34-constants begin
// section 127-0-0-1--5df516b5:13f33bf834e:-8000:0000000000000C34-constants end

/**
 * Short description of class standard_button
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class standard_button
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute name
     *
     * @access public
     * @var String
     */
    public $name = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_button()
    {
     ;
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
}?>