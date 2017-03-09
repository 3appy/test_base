<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.progress_bar.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 15.07.2014, 14:01:33 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section 10-30-49-33--6b412a65:147349ddc96:-8000:00000000000010F4-includes begin
// section 10-30-49-33--6b412a65:147349ddc96:-8000:00000000000010F4-includes end

/* user defined constants */
// section 10-30-49-33--6b412a65:147349ddc96:-8000:00000000000010F4-constants begin
// section 10-30-49-33--6b412a65:147349ddc96:-8000:00000000000010F4-constants end

/**
 * Short description of class progress_bar
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class progress_bar
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  count
     * @param  actuell
     */
    public function get_element($count, $actuell)
    {    
     $white = "<img src=\"". $_SESSION['images'] .  "list_white.png\" " . "/>";
     $green = "<img src=\"". $_SESSION['images'] .  "list_green.png\" " . "/>";
     
     $progress_bar = "<div class=\"ym-contain-fl\">";
//     $progress_bar = "";
     for ( $n = 1; $n <= $count; $n++ )
     {
     if ( $n == $actuell )
     { $progress_bar .= $green; }
     else
     { $progress_bar .= $white; }
     }
     $progress_bar .= "</div>";
//     $progress_bar .= "";
     return $progress_bar;
    }
}?>