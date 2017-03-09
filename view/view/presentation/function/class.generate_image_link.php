<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.generate_image_link.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 06.04.2014, 09:13:03 with ArgoUML PHP module 
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
// section -64--88--78-21-718d2509:144e8cd8377:-8000:0000000000000B66-includes begin
// section -64--88--78-21-718d2509:144e8cd8377:-8000:0000000000000B66-includes end

/* user defined constants */
// section -64--88--78-21-718d2509:144e8cd8377:-8000:0000000000000B66-constants begin
// section -64--88--78-21-718d2509:144e8cd8377:-8000:0000000000000B66-constants end

/**
 * Short description of class generate_image_link
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class generate_image_link
    extends generated_image_link
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---
    public function get_image_link()
    {
     $base = $this->get_frame()->get_entity_name() . '_control_base';
     $link = $_SESSION[$base] . $this->get_post_frame() .  ".php" .
     "?basic_element_function=" . (int)5 .
     "&id=" . $this->get_item()->get_id();

     return
     "<a href=" .
     $link .
     ">" .
     "<img src=\"". $_SESSION['icons'] .  "generate.png\" " . "/>" .
     "</a>";
    }    
}?>