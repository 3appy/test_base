<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.fbox_check_pupil_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 23.01.2017, 16:11:58 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include fbox_check_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.fbox_check_list.php');

/* user defined includes */
// section 10-30-49-48-4b357242:159a6cece72:-8000:0000000000000B7A-includes begin
// section 10-30-49-48-4b357242:159a6cece72:-8000:0000000000000B7A-includes end

/* user defined constants */
// section 10-30-49-48-4b357242:159a6cece72:-8000:0000000000000B7A-constants begin
// section 10-30-49-48-4b357242:159a6cece72:-8000:0000000000000B7A-constants end

/**
 * Short description of class fbox_check_pupil_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class fbox_check_pupil_list
    extends fbox_check_list
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute pupil_list
     *
     * @access private
     * @var Integer
     */
    private $pupil_list = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function define_model()
    {
     if( defined('__VIEW_CONTROL__') == FALSE )
     { define('__VIEW_CONTROL__', $this->get_root_view_control() ); }
     require_once(__VIEW_CONTROL__. 'class.fbox_model_element.php');
     
     $count = $this->pupil_list->get_item_count();
     for( $n = 0; $n < $count; $n++ )
     {
     $pupil = $this->pupil_list->get_item( $n );
     $item = new fbox_model_element();
     $item->set_id( $pupil->get_id() );
     $item->set_text( $pupil->get_forename() );
     $this->model->add_item( $item );
     }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  pupil_list
     */
    public function set_pupil_list($pupil_list)
    {
     $this->pupil_list =$pupil_list;
    }
}?>