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
// section 10-5-23-115-4fc65059:14c18894407:-8000:0000000000001803-includes begin
// section 10-5-23-115-4fc65059:14c18894407:-8000:0000000000001803-includes end

/* user defined constants */
// section 10-5-23-115-4fc65059:14c18894407:-8000:0000000000001803-constants begin
// section 10-5-23-115-4fc65059:14c18894407:-8000:0000000000001803-constants end

/**
 * require_once('../basic/class.basic_control.php');
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class D3_post_control
    extends basic_control
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute author_id
     *
     * @access public
     * @var Integer
     */
    public $author_id = null;

    /**
     * Short description of attribute owner_id
     *
     * @access public
     * @var Integer
     */
    public $owner_id = null;

    /**
     * Short description of attribute event
     *
     * @access public
     * @var Integer
     */
    public $event = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function is_entered_completed()
    {
     $completed = TRUE;
     if ( empty($_POST["header"]) OR empty($_POST["article"]))
     { $completed = FALSE; }
     else
     { $this->setup_variables(); }
     return $completed;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function perform()
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.event_article.php');
     
     $success = FALSE;
     
     $media_id = $this->add_media_file();
     $text = htmlspecialchars( $_POST["article"] );
     $text = $this->generate_hyperlink( $text );
     
     $new_article = new event_article();
     $new_article->set_deleted( (int)0 );
     $new_article->set_owner_id( $this->owner_id );
     $new_article->set_author_id( $this->author_id );
     $new_article->set_header( $_POST["header"] );
     $new_article->set_text( $text );
     $new_article->set_media_id( $media_id );
     $article_id = $new_article->insert();
     
     if ( $article_id > 0 )
     {
     $success = TRUE;
     
     $this->insert_news_list();
     $this->sent_mail_list( $new_article );
     $this->update_article_modified_stamp( $article_id );
     }
     return $success;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function setup_variables()
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.event.php');
     
     $this->author_id = $_SESSION['watch_id'];
     $this->owner_id = $_SESSION['watched_id'];
     
     $this->event = new event();
     $this->event->set_id( $this->owner_id );
     $this->event->load();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function add_media_file()
    {
     if( defined('__ROOT_CONTROL__') == FALSE )
     { define('__ROOT_CONTROL__', $this->get_root_control() ); }
     require_once(__ROOT_CONTROL__.
     'basic/class.service_add_file.php');
     
     $media_id = (int)0;
     
     if( $_FILES['upload']['name'][0] == null )
     { ; } // no files selected
     else
     {
     $service_file = new service_add_file();
     $service_file->set_owner_group( "e" );
     $service_file->set_owner_id( $this->owner_id );
     $service_file->set_uploader_id( $this->author_id );
     $media_id = $service_file->add_media_files( $_FILES['upload'] );
     }
     return $media_id;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function insert_news_list()
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.news_list.php');
     
     $receiver_list = $this->event->get_all_member_list();
     
     $news_list = new news_list();
     $news_list->set_receiver_model( $receiver_list );
     $news_list->set_entity_group("e");
     $news_list->set_entity_id( $this->owner_id );
     $news_list->set_function( (int)504 );
     $news_list->set_article_id( (int)0 );
     $news_list->set_uploader_id( $this->author_id );
     $news_list->insert();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  new_article
     */
    public function sent_mail_list($new_article)
    {
     if( defined('__ROOT_CONTROL__') == FALSE )
     { define('__ROOT_CONTROL__', $this->get_root_control() ); }
     require_once(__ROOT_CONTROL__.
     'email/class.article_list_mail.php');
     
     $receiver_list = $this->event->get_all_member_list();
     
     $mail_list = new article_list_mail();
     $mail_list->set_author_id( $this->author_id );
     $mail_list->set_receiver_list( $receiver_list );
     $mail_list->set_article( $new_article );
     $mail_list->set_entity( $this->event );
     $mail_list->sent_mail();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  article_id
     */
    public function update_article_modified_stamp($article_id)
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.event_article.php');
     
     $article = new event_article();
     $article->set_id( $article_id );
     $article->load();
     $article->set_modified_stamp( $article->get_written_stamp() );
     $article->update();
    }
}?>