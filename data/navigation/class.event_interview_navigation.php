<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.event_interview_navigation.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 13.10.2014, 15:16:58 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include basic_event_navigation
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.basic_event_navigation.php');

/* user defined includes */
// section -87--2--7--80-61f3c603:14908579b5e:-8000:0000000000001929-includes begin
// section -87--2--7--80-61f3c603:14908579b5e:-8000:0000000000001929-includes end

/* user defined constants */
// section -87--2--7--80-61f3c603:14908579b5e:-8000:0000000000001929-constants begin
// section -87--2--7--80-61f3c603:14908579b5e:-8000:0000000000001929-constants end

/**
 * Short description of class event_interview_navigation
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class event_interview_navigation
    extends basic_event_navigation
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function generate_top_navigation()
    {
     $navigation_list = new navigation_list();
     return $navigation_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function generate_left_navigation()
    {
     $navigation_list = parent::generate_left_navigation();
     return $navigation_list;
    }
}?>