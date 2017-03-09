<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.fbox_link_select_element.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 06.09.2013, 17:07:15 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include fbox_select_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_select_element.php');

/* user defined includes */
// section -64--88--78-21--4bbad20e:140f33c37dc:-8000:0000000000000EC9-includes begin
// section -64--88--78-21--4bbad20e:140f33c37dc:-8000:0000000000000EC9-includes end

/* user defined constants */
// section -64--88--78-21--4bbad20e:140f33c37dc:-8000:0000000000000EC9-constants begin
// section -64--88--78-21--4bbad20e:140f33c37dc:-8000:0000000000000EC9-constants end

/**
 * Short description of class fbox_link_select_element
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_link_select_element
    extends fbox_select_element
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function load( $value )
    {
     $return_string = "";
     if( $this->value == 0)
     {
     $return_string =
     "<option value=\"0\" selected=\"selected\"" .
     "disabled=\"disabled\">" .
     $this->language['C3_link_selection'] .
     "</option>";
     }
     for ($i = 1; $i <= 3; $i++)
     {
     if( $this->value == $i )
     {
     $return_string = $return_string .
     "<option selected value=\"". $i . "\">" .
     $this->language['C3_link' . $i] .
     "</option>";
     }
     else
     {
     $return_string = $return_string .
     "<option value=\"". $i . "\">" .
     $this->language['C3_link' . $i] .
     "</option>";
     }
     }
     return $return_string;
     }
    
}?>