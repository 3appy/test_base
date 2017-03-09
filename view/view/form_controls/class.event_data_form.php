<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.event_data_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 06.02.2014, 14:29:53 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include fbox_text_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_text_element.php');

/**
 * include main_data_form
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.main_data_form.php');

/* user defined includes */
// section 127-0-0-1--130f963b:13f0a126c70:-8000:0000000000000BC8-includes begin
// section 127-0-0-1--130f963b:13f0a126c70:-8000:0000000000000BC8-includes end

/* user defined constants */
// section 127-0-0-1--130f963b:13f0a126c70:-8000:0000000000000BC8-constants begin
// section 127-0-0-1--130f963b:13f0a126c70:-8000:0000000000000BC8-constants end

/**
 * Short description of class event_data_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class event_data_form
    extends main_data_form
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute budget
     *
     * @access public
     * @var Integer
     */

    // --- OPERATIONS ---
    /**
     *
     *
     * @access public
     * @author Bernd Schr�der
     * @version 1.0
     */
    public function get_element_list()
    {
     return
     $this->get_name_element() .
     $this->start_time_data_part->get_element_list() .
     $this->end_time_data_part->get_element_list() .

     $this->address_data_part->get_element_list() .
     $this->private_data_part->get_element_list() .
     $this->link_data_part->get_element_list();
    }
}?>