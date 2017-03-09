<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.C27_4_post_control.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 03.03.2017, 11:30:02 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include C27_post_control
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('C27_post_control.php');

/* user defined includes */
// section 10-5-22-85-505d4a94:158068d7274:-8000:00000000000026F1-includes begin
// section 10-5-22-85-505d4a94:158068d7274:-8000:00000000000026F1-includes end

/* user defined constants */
// section 10-5-22-85-505d4a94:158068d7274:-8000:00000000000026F1-constants begin
// section 10-5-22-85-505d4a94:158068d7274:-8000:00000000000026F1-constants end

/**
 * Short description of class C27_4_post_control
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class C27_4_post_control
    extends C27_post_control
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_requested_width()
    {
     return (int)4;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_modified_file_name()
    {
     return
     "import_member_" .
     $this->get_string_today();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_log_file_name()
    {
     return
     "log_member_" .
     $this->get_string_today();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  csv_line
     */
    public function handle_csv_line($csv_line)
    {
     // Vorname;Nachname;passwort;email@Mitglied1
     // Suche das Mitglied mit der Email Addresse email@Mitglied1
     // wird das Mitglied nicht gefunden, wird das Miglied angelegt
     if( defined('__ROOT_CONTROL__') == FALSE )
     { define('__ROOT_CONTROL__', $this->get_root_control() ); }
     require_once(__ROOT_CONTROL__.
     'email/class.register_single_mail.php');
     require_once(__ROOT_CONTROL__.
     'basic/class.service_new_member.php');
     
     $forname = $csv_line->get_item( (int)0 );
     $surename = $csv_line->get_item( (int)1 );
     $mail_address = $csv_line->get_item( (int)2 );
     $password = $csv_line->get_item( (int)3 );
     $success = FALSE;
     
     $service = new service_new_member();
     $service->set_forename( $forname );
     $service->set_name( $surename );
     $service->set_mail_address( $mail_address );
     $service->set_password( $password );
     $new_id = $service->perform();
     if( $new_id != NULL )
     {
     $success = TRUE;
     $this->control_info->sent_mail_A2();
     $receiver_id = $new_id;
     
     $mail = new register_single_mail();
     $mail->set_author( null );
     $mail->set_receiver_id( $receiver_id );
     $mail->set_password( $password );
     $mail->sent_mail();
     }
     else
     { $this->control_warning->sent_mail_A2(); }
     return $success;
    }
}?>