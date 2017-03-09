<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.delete_image_link.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 06.03.2016, 17:03:08 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_image_link
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('../../../view/view/presentation/generated/class.generated_image_link.php');
require_once('generated/class.generated_image_link.php');

/* user defined includes */
// section 10-115--3--106--674db5be:14498c0888f:-8000:0000000000000B25-includes begin
// section 10-115--3--106--674db5be:14498c0888f:-8000:0000000000000B25-includes end

/* user defined constants */
// section 10-115--3--106--674db5be:14498c0888f:-8000:0000000000000B25-constants begin
// section 10-115--3--106--674db5be:14498c0888f:-8000:0000000000000B25-constants end

/**
 * Short description of class delete_image_link
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class delete_image_link
    extends generated_image_link
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_image_link( $text )
    {
     $base = $this->get_frame()->get_entity_name() . '_control_base';
     $link = $_SESSION[$base] . $this->get_post_frame() . 
     "?basic_element_function=" . (int)4 .
     "&id=" . $this->get_item()->get_id() .
     " onclick=\"return confirm('" . $text . "')\"";
     
     return
     "<a href=" .
     $link .
     ">" .
     "<img src=\"". $_SESSION['icons'] .  "erase.png\" " . "/>" .
     "</a>";
    }
}?>