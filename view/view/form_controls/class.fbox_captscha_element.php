<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.fbox_captscha_element.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 01.04.2015, 09:17:12 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include standard_element_form
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.standard_element_form.php');

/* user defined includes */
// section 10-5-25--126-84cdadd:14c73c384e5:-8000:00000000000010F0-includes begin
// section 10-5-25--126-84cdadd:14c73c384e5:-8000:00000000000010F0-includes end

/* user defined constants */
// section 10-5-25--126-84cdadd:14c73c384e5:-8000:00000000000010F0-constants begin
// section 10-5-25--126-84cdadd:14c73c384e5:-8000:00000000000010F0-constants end

/**
 * Short description of class fbox_captscha_element
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_captscha_element
    extends standard_element_form
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function __construct()
    {
     parent::__construct();
     $this->size = 40;
     $this->value = "";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_element()
    {
     $zufall = rand(1,3);
     $_SESSION['captscha'] = $zufall;
     $captscha = "<img src=\"". $_SESSION['images'] .
     "captscha/" . $zufall . ".png\"" . "\" alt=\"\"" .
     " class=\".flexible center\"/> " . $this->label;
     
     return
     "<div class=\"ym-fbox-text\">" .
     "<label for= \"" . $this->name . "\">" . $captscha . "</label>" .
     "<input type=\"text\"" .
     "name= \"" . $this->name . "\"" .
     "id= \"" . $this->name . "\"" .
     "value= \"" . $this->value . "\"" .
     "size= \"" . $this->size . "\">" .
     "</div>";
    }
}?>