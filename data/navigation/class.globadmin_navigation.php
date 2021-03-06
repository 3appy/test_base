<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.globadmin_navigation.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 24.04.2015, 18:29:35 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include basic_member_navigation
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.basic_member_navigation.php');

/* user defined includes */
// section 10-5-23-121-3ee6ceab:14be448457a:-8000:0000000000010EF8-includes begin
// section 10-5-23-121-3ee6ceab:14be448457a:-8000:0000000000010EF8-includes end

/* user defined constants */
// section 10-5-23-121-3ee6ceab:14be448457a:-8000:0000000000010EF8-constants begin
// section 10-5-23-121-3ee6ceab:14be448457a:-8000:0000000000010EF8-constants end

/**
 * Short description of class globadmin_navigation
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class globadmin_navigation
    extends basic_member_navigation
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function generate_top_navigation()
    {
     $navigation_list = new navigation_list();
     
     // show tasklist
     $item = new task_receiver_navigation_item();
     $item->set_id( (int)29 );
     $item->set_link( "B" );
     $item->set_text( "B29" );
     $navigation_list->add_item( $item );
     
     // message
     $item = new message_navigation_item();
     $item->set_id( (int)6 );
     $item->set_link( "B" );
     $item->set_text( "B6" );
     $navigation_list->add_item( $item );
     
     // kontaktlist
     $item = new basic_navigation_item();
     $item->set_id( (int)19 );
     $item->set_link( "B" );
     $item->set_text( "B19" );
     $navigation_list->add_item( $item );
     
     // Calender
     $item = new basic_navigation_item();
     $item->set_id( (int)9 );
     $item->set_link( "B" );
     $item->set_text( "B9" );
     $navigation_list->add_item( $item );
     
     // Events
     $item = new event_navigation_item();
     $item->set_id( (int)34 );
     $item->set_link( "B" );
     $item->set_text( "B34" );
     $navigation_list->add_item( $item );
     
     // Market place
     $item = new basic_navigation_item();
     $item->set_id( (int)7 );
     $item->set_link( "B" );
     $item->set_text( "B7" );
     $navigation_list->add_item( $item );
     
     // images
     $item = new image_navigation_item();
     $item->set_id( (int)11 );
     $item->set_link( "B" );
     $item->set_text( "B11" );
     $navigation_list->add_item( $item );
     
     // documents
     $item = new document_navigation_item();
     $item->set_id( (int)13 );
     $item->set_link( "B" );
     $item->set_text( "B13" );
     $navigation_list->add_item( $item );
     
     // videos
     $item = new video_navigation_item();
     $item->set_id( (int)15 );
     $item->set_link( "B" );
     $item->set_text( "B15" );
     $navigation_list->add_item( $item );
     return $navigation_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  visited
     * @param  visitor
     */
    public function generate_left_member_navigation($visited, $visitor)
    {
     $navigation_list = $this->generate_left_navigation();
     
     // change master data
     $first_level_item = new basic_navigation_item();
     $first_level_item->set_id( (int)100 );
     $first_level_item->set_link( "B" );
     $first_level_item->set_text( "B100" );
     $first_level_item->set_icon_name( "change.png" );
     
     // change master data
     $second_level_item = new basic_navigation_item();
     $second_level_item->set_id( (int)2 );
     $second_level_item->set_link( "B" );
     $second_level_item->set_text( "B2" );
     $second_level_item->set_icon_name( "change.png" );
     $first_level_item->get_navigation_list()->
     add_item( $second_level_item );
     
     // change news data
     $second_level_item = new basic_navigation_item();
     $second_level_item->set_id( (int)3 );
     $second_level_item->set_link( "B" );
     $second_level_item->set_text( "B3" );
     $second_level_item->set_icon_name( "change.png" );
     $first_level_item->get_navigation_list()->
     add_item( $second_level_item );
     
     $navigation_list->add_item( $first_level_item );
     
     return $navigation_list;
    }
}?>