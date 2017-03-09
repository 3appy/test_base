<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.interview_form.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 20.06.2014, 14:33:18 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include fbox_radio_member_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_radio_member_list.php');

/**
 * include send_reset_button
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.send_reset_button.php');

/**
 * include standard_form
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.standard_form.php');

/* user defined includes */
// section 10-30-45--31--10c39078:146b3b0f931:-8000:00000000000019EB-includes begin
// section 10-30-45--31--10c39078:146b3b0f931:-8000:00000000000019EB-includes end

/* user defined constants */
// section 10-30-45--31--10c39078:146b3b0f931:-8000:00000000000019EB-constants begin
// section 10-30-45--31--10c39078:146b3b0f931:-8000:00000000000019EB-constants end

/**
 * Short description of class interview_form
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class interview_form
    extends standard_form
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute model
     *
     * @access public
     * @var Integer
     */
    public $model = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_element_list()
    {
     $radio_list = new fbox_radio_member_list( $this->model );
     $radio_list->set_label($this->language['C3_choose_time']);
     return
     $radio_list->get_element();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_button()
    {
     $button = new send_reset_button();
     $button->set_send($this->language['C3_send_button']);
     $button->set_reset($this->language['C3_reset_button']);
     return $button->get_button();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  model
     */
    public function set_model($model)
    {
     $this->model = $model;
    }
}?>