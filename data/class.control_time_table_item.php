<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.control_time_table_item.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 24.02.2017, 15:07:06 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_control_time_table_item
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_control_time_table_item.php');

/* user defined includes */
// section 10-30-49--98-3fbad173:142b8aba1ad:-8000:00000000000021DA-includes begin
// section 10-30-49--98-3fbad173:142b8aba1ad:-8000:00000000000021DA-includes end

/* user defined constants */
// section 10-30-49--98-3fbad173:142b8aba1ad:-8000:00000000000021DA-constants begin
// section 10-30-49--98-3fbad173:142b8aba1ad:-8000:00000000000021DA-constants end

/**
 * Short description of class control_time_table_item
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class control_time_table_item
    extends generated_control_time_table_item
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_room()
    {
     require_once('class.room.php');
     
     if( $this->get_room_id() == NULL )
     { $room = NULL; }
     else
     {  
     $room = new room();
     $room->set_id( $this->get_room_id() );
     $room->load();
     }
     return $room;
    }
}?>