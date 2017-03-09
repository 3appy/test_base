<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.B5_view.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 29.01.2014, 15:53:19 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * The B - view is the basis of all views where the watched entity is of an
 * of a member:
 *
 * @author Bernd Schröder
 * @version 1.0
 */
require_once('class.B_view.php');
//require_once('presentation/class/class.unread_mail_member_presentation.php');
require_once('presentation/class/class.member_kontakt_message_list_presentation.php');


/* user defined includes */
// section 10-30-49-103-4ef714e6:143de64d54f:-8000:00000000000012F8-includes begin
// section 10-30-49-103-4ef714e6:143de64d54f:-8000:00000000000012F8-includes end

/* user defined constants */
// section 10-30-49-103-4ef714e6:143de64d54f:-8000:00000000000012F8-constants begin
// section 10-30-49-103-4ef714e6:143de64d54f:-8000:00000000000012F8-constants end

/**
 * Short description of class B5_view
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class B5_view
    extends B_view
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     */
    public function __construct()
    {
     parent::__construct();
     $this->load_language("b5");
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     */
    public function get_column3_content()
    {
     $column3_content =  "" .
     $this->get_unread_mails();
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     */
    public function get_unread_mails()
    {
     $model = $this->watched_entity->get_member_kontakt_message_list();
     $language = $this->get_language_array();
     $form = new member_kontakt_message_list_presentation( $model, $language );
     $form->set_frame( $this->get_watched_entity() );
     $form->define_table();
     return $form->get_form();
    }
}?>