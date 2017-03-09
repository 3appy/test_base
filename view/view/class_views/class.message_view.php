<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.message_view.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 06.09.2013, 11:53:56 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include simple_text_view
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.simple_text_view.php');

/* user defined includes */
// section 10-30-8-97--716f9d08:13efa08353a:-8000:0000000000001F82-includes begin
// section 10-30-8-97--716f9d08:13efa08353a:-8000:0000000000001F82-includes end

/* user defined constants */
// section 10-30-8-97--716f9d08:13efa08353a:-8000:0000000000001F82-constants begin
// section 10-30-8-97--716f9d08:13efa08353a:-8000:0000000000001F82-constants end

/**
 * Short description of class message_view
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class message_view
    extends simple_text_view
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * The reader is the receiver or thos message not neccessary the person who
     * the message
     *
     * @access protected
     * @var Integer
     */
    public function get_view()
    {
     if( $this->get_author()->get_id() == $_SESSION['watch_id'] )
     { 
     return $this->get_watch_id_author_view(); 
     }
     else
     { 
     return $this->get_watch_id_reader_view(); 
     }
    }
}?>