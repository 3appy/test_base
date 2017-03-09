<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.sub_event_registration_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 30.05.2013, 09:08:51 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include event_registration_form
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.event_registration_form.php');

/* user defined includes */
// section 10-5-25-9--6f4f683c:13ef08685b5:-8000:0000000000002C9D-includes begin
// section 10-5-25-9--6f4f683c:13ef08685b5:-8000:0000000000002C9D-includes end

/* user defined constants */
// section 10-5-25-9--6f4f683c:13ef08685b5:-8000:0000000000002C9D-constants begin
// section 10-5-25-9--6f4f683c:13ef08685b5:-8000:0000000000002C9D-constants end

/**
 * Short description of class sub_event_registration_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class sub_event_registration_form
    extends event_registration_form
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
    public function get_form_header()
    {
     return "<h6>" . $this->form_header . "</h6>" .  "<br />";
    }
}?>