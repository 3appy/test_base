<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.edit_image_link.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 06.04.2014, 09:14:01 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include basic_image_link
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_image_link.php');

/* user defined includes */
// section 10-115--3--106--674db5be:14498c0888f:-8000:0000000000000B2B-includes begin
// section 10-115--3--106--674db5be:14498c0888f:-8000:0000000000000B2B-includes end

/* user defined constants */
// section 10-115--3--106--674db5be:14498c0888f:-8000:0000000000000B2B-constants begin
// section 10-115--3--106--674db5be:14498c0888f:-8000:0000000000000B2B-constants end

/**
 * Short description of class edit_image_link
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class edit_image_link
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
     /*NEW*/
    public function get_image_link()
    {
     $base = $this->get_frame()->get_entity_name() . '_control_base';
     $post_frame = $this->get_frame()->get_basic_post_frame();
     $link = $_SESSION[$base] . $post_frame . ".php" .
     "?function=" . $this->get_function_id() .
     "&id=" . $this->get_item()->get_id() .
//     "&team_id=" . $this->get_item()->get_team_id() .
     "&image_link_modus=" . (int)2;

     return
     "<a href=" .
     $link .
     ">" .
     "<img src=\"". $_SESSION['icons'] .  "modify.png\" " . "/>" .
     "</a>";
    }
}?>