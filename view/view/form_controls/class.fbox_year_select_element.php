<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.fbox_year_select_element.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 15.05.2014, 21:41:12 with ArgoUML PHP module 
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
// section 10-71-4--54--4d1983b6:13fd400e1b9:-8000:0000000000000D65-includes begin
// section 10-71-4--54--4d1983b6:13fd400e1b9:-8000:0000000000000D65-includes end

/* user defined constants */
// section 10-71-4--54--4d1983b6:13fd400e1b9:-8000:0000000000000D65-constants begin
// section 10-71-4--54--4d1983b6:13fd400e1b9:-8000:0000000000000D65-constants end

/**
 * Short description of class fbox_year_select_element
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_year_select_element
    extends fbox_select_element
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  value
     */
    public function load($value)
    {
     $return_string = "";
     if( $this->value == 0)
     {
     $return_string = 
     "<option value=\"0\" selected=\"selected\"" .
     "disabled=\"disabled\">" .
     $this->language['C3_select_year'] .
     "</option>";
     }
     for ($i = 1900; $i <= 2014; $i++) 
     {
     if( $this->value == $i )
     {
     $return_string = $return_string .
     "<option selected value=\"". $i . "\">" . $i . "</option>";
     }
     else
     {
     $return_string = $return_string .
     "<option value=\"". $i . "\">" . $i . "</option>";
     }
     }
     return $return_string;
    }
}?>