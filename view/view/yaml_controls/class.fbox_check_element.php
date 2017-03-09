<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.fbox_check_element.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 17.01.2017, 14:37:06 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include standard_element
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.standard_element.php');

/* user defined includes */
// section 10-5-22--90-706ae3ef:15239dbf50b:-8000:0000000000000AC7-includes begin
// section 10-5-22--90-706ae3ef:15239dbf50b:-8000:0000000000000AC7-includes end

/* user defined constants */
// section 10-5-22--90-706ae3ef:15239dbf50b:-8000:0000000000000AC7-constants begin
// section 10-5-22--90-706ae3ef:15239dbf50b:-8000:0000000000000AC7-constants end

/**
 * Short description of class fbox_check_element
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_check_element
    extends standard_element
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_element()
    {
     if ( $this->requested )
     { $return = "<div class=\"ym-fbox-check ym-error\">"; }
     else
     { $return = "<div class=\"ym-fbox-check\">"; }
     
     $return .=
     "<input type=\"checkbox\"" .
     "name= \"" . $this->name . "\"" .
     "id= \"" . $this->name . "\"" .
     "value= \"" . $this->value . "\">" .
     "<label for= \"" . $this->name . "\">" . $this->label . "</label>" .
     "</div>";
     return $return;
    }
}?>