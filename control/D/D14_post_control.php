<?php

error_reporting(E_ALL);

/**
 * require_once('../basic/class.basic_control.php');
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include basic_control
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('../basic/class.basic_control.php');

/* user defined includes */
// section 10-30-49-121--374f6b80:14c366ddc0a:-8000:00000000000029B3-includes begin
// section 10-30-49-121--374f6b80:14c366ddc0a:-8000:00000000000029B3-includes end

/* user defined constants */
// section 10-30-49-121--374f6b80:14c366ddc0a:-8000:00000000000029B3-constants begin
// section 10-30-49-121--374f6b80:14c366ddc0a:-8000:00000000000029B3-constants end

/**
 * require_once('../basic/class.basic_control.php');
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class D14_post_control
    extends basic_control
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute file_name
     *
     * @access public
     * @var String
     */
    public $file_name = null;

    /**
     * Short description of attribute file_source
     *
     * @access public
     * @var String
     */
    public $file_source = null;

    /**
     * Short description of attribute file_size
     *
     * @access public
     * @var Integer
     */
    public $file_size = null;

    /**
     * Short description of attribute file_error
     *
     * @access public
     * @var Integer
     */
    public $file_error = null;

    /**
     * Short description of attribute owner_group
     *
     * @access public
     * @var String
     */
    public $owner_group = null;

    /**
     * Short description of attribute owner_id
     *
     * @access public
     * @var Integer
     */
    public $owner_id = null;

    /**
     * Short description of attribute uploader_id
     *
     * @access public
     * @var Integer
     */
    public $uploader_id = null;

    /**
     * Short description of attribute header
     *
     * @access public
     * @var String
     */
    public $header = null;

    /**
     * Short description of attribute text
     *
     * @access public
     * @var String
     */
    public $text = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function is_entered_completed()
    {
     $completed = TRUE;
     if ( empty($_FILES['userfile']['name']))
     { $completed = FALSE; }
     return $completed;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function perform()
    {
     $success  = TRUE;
     
     $this->owner_group = "e";
     $this->owner_id = $_SESSION['watched_id'];
     $this->uploader_id = $_SESSION['watch_id'];
     $this->file_name = $_FILES['userfile']['name'];
     $this->file_source = $_FILES['userfile']['tmp_name'];
     $this->file_size = $_FILES['userfile']['size'];
     $this->file_error = $_FILES['userfile']['error'];
     
     if (isset($_POST['header']))
     { $this->header = htmlspecialchars($_POST['header']); }
     else
     { $this->header = ""; }
     
     if (isset($_POST['description']))
     { $this->text = htmlspecialchars($_POST['description']); }
     else
     { $this->text = ""; }
     
     $success = $this->upload_video();
     return $success;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function upload_video()
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.video.php');
     require_once(__ROOT_DATA__.'class.event.php');
     
     if( defined('__ROOT_CONTROL__') == FALSE )
     { define('__ROOT_CONTROL__', $this->get_root_control() ); }
     require_once(__ROOT_CONTROL__.
     'email/class.video_upload_mail.php');
     
     $success  = TRUE;
     
     $video = new video();
     $video->set_owner_group( $this->owner_group );
     $video->set_owner_id( $this->owner_id );
     $video->set_uploader_id( $this->uploader_id );
     $video->set_upload_file_name( $this->file_name );
     $video->set_size( $this->file_size );
     $video->set_file_error( $this->file_error );
     $video->set_text( $this->text );
     $video->set_visible( (int)1 );
     
     if ( $this->header == "" )
     { $video->set_header( $video->get_upload_file_name() ); }
     else
     { $video->set_header( $this->header ); }
     
     $success = $video->upload_video( $this->file_source );
     
     if ( $success )
     {
     $event = new event();
     $event->set_id( $this->owner_id );
     $event->load();
     
     $receiver_list = $event->get_member_list();
     
     $mail_list = new video_upload_mail();
     $mail_list->set_receiver_list( $receiver_list );
     $mail_list->set_author_id( $this->uploader_id );
     $mail_list->set_video( $video );
     $mail_list->set_entity( $event );
     $mail_list->sent_mail();
     
     $this->insert_news( $receiver_list );
     }
     return $success;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  receiver_list
     */
    public function insert_news($receiver_list)
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.news_list.php');
     
     $news_list = new news_list();
     $news_list->set_receiver_model( $receiver_list );
     $news_list->set_entity_group( $this->owner_group );
     $news_list->set_uploader_id( $this->uploader_id );
     $news_list->set_entity_id( $this->owner_id );
     $news_list->set_function( (int)503 );
     $news_list->set_article_id( (int)0 );
     $news_list->insert();
    }
}?>