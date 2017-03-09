<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.market_page1.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 16.07.2014, 13:49:06 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include basic_questionaire
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.basic_questionaire.php');

/**
 * include fbox_radio_school_size
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_radio_school_size.php');

/**
 * include fbox_radio_yes_no
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_radio_yes_no.php');

/* user defined includes */
// section 10-30-49-33--7f2080f6:1473e01177b:-8000:0000000000001127-includes begin
// section 10-30-49-33--7f2080f6:1473e01177b:-8000:0000000000001127-includes end

/* user defined constants */
// section 10-30-49-33--7f2080f6:1473e01177b:-8000:0000000000001127-constants begin
// section 10-30-49-33--7f2080f6:1473e01177b:-8000:0000000000001127-constants end

/**
 * Short description of class market_page1
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class market_page1
    extends basic_questionaire
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_element_list()
    {
     $yes_no_list = new fbox_radio_yes_no( null );
     $yes_no_list->set_language( $this->language );
     $yes_no_list->set_label($this->language['yes_no_header']);
     
     $school_size = new fbox_radio_school_size( null );
     $school_size->set_language( $this->language );
     $school_size->set_label($this->language['school_size_header']);
     
     return
     "<input type=\"hidden\" name=\"page\" value=\"" . $this->actuell . "\">" .
     "</br>" .
     $school_size->get_element() .
     "</br>" .
     $yes_no_list->get_element();
    }
}?>