<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.upload_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 19.05.2013, 12:26:43 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include send_reset_form
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.send_reset_form.php');

/* user defined includes */
// section 10-5-26-58--29e62a23:13e16e25387:-8000:0000000000001DEE-includes begin
// section 10-5-26-58--29e62a23:13e16e25387:-8000:0000000000001DEE-includes end

/* user defined constants */
// section 10-5-26-58--29e62a23:13e16e25387:-8000:0000000000001DEE-constants begin
// section 10-5-26-58--29e62a23:13e16e25387:-8000:0000000000001DEE-constants end

/**
 * Short description of class upload_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class upload_form
    extends send_reset_form
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute userfile_header
     *
     * @access public
     * @var String
     */
    public $userfile_header = null;

    /**
     * Short description of attribute picture_header
     *
     * @access public
     * @var String
     */
    public $picture_header = null;

    /**
     * Short description of attribute picture_description
     *
     * @access public
     * @var String
     */
    public $picture_description = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_form_list()
    {
     return 
     $this->get_hidden_fbox_text( $this->userfile_header, "userfile");
     $this->get_fbox_text( $this->picture_header, 
     'picture_header').
     $this->get_fbox_text( $this->picture_description, 
     'picture_description');
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  userfile_header
     * @version 1.0
     */
    public function set_userfile_header($userfile_header)
    {
     $this->userfile_header = $userfile_header;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  picture_header
     * @version 1.0
     */
    public function set_picture_header($picture_header)
    {
     $this->picture_header = $picture_header;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  picture_description
     * @version 1.0
     */
    public function set_picture_description($picture_description)
    {
     $this->picture_description = $picture_description;
    }
}?>