<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.fbox_country_select_element.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 22.09.2014, 13:44:18 with ArgoUML PHP module 
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
// section 10-30-8-31-3a1762ae:1400524e52e:-8000:00000000000019DD-includes begin
// section 10-30-8-31-3a1762ae:1400524e52e:-8000:00000000000019DD-includes end

/* user defined constants */
// section 10-30-8-31-3a1762ae:1400524e52e:-8000:00000000000019DD-constants begin
// section 10-30-8-31-3a1762ae:1400524e52e:-8000:00000000000019DD-constants end

/**
 * Short description of class fbox_country_select_element
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_country_select_element
    extends fbox_select_element
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schr�der
     * @param  value
     * @version 1.0
     */
    public function load($value)
    {
     $return_string ="";
     if( $this->value == 0)
     {
     $return_string = 
     "<option value=\"0\" selected=\"selected\"" .
     "disabled=\"disabled\">" .
     $this->language['C3_select_country'] .
     "</option>";
     }
     for ($i = 1; $i <= 3; $i++) 
     {
     if( $this->value == $i )
     {
     $return_string = $return_string .
     "<option selected value=\"". $i . "\">" .
     $this->language['country_' . $i] .
     "</option>";
     }
     else
     {
     $return_string = $return_string .
     "<option value=\"". $i . "\">" .
     $this->language['country_' . $i] .
     "</option>";
     }
     }
     return $return_string;
    }
}?>