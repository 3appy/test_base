<?php

error_reporting(E_ALL);

/**
 * The text_view is the basic class for a bunch of textual subclasses.
 * article_view; comment_view; task_view
 *
 * @author Bernd Schröder
 * @version 1.0
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section 10-5-25--46--64418a0c:13ea6e738ed:-8000:0000000000001A9F-includes begin
// section 10-5-25--46--64418a0c:13ea6e738ed:-8000:0000000000001A9F-includes end

/* user defined constants */
// section 10-5-25--46--64418a0c:13ea6e738ed:-8000:0000000000001A9F-constants begin
// section 10-5-25--46--64418a0c:13ea6e738ed:-8000:0000000000001A9F-constants end

/**
 * The text_view is the basic class for a bunch of textual subclasses.
 * article_view; comment_view; task_view
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class text_view
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * this is the text object. It could be a comment or a message.
     *
     * @access protected
     * @var Integer
     */
    protected $text_model = null;

    /**
     * Short description of attribute language
     *
     * @access public
     * @var Integer
     */
    public $language = null;

    /**
     * Short description of attribute author
     *
     * @access public
     * @var Integer
     */
    public $author = null;

    /**
     * Short description of attribute reader
     *
     * @access public
     * @var Integer
     */
    public $reader = null;

    /**
     * Short description of attribute base_frame
     *
     * @access public
     * @var Integer
     */
    public $base_frame = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  reader
     * @version 1.0
     */
    public function __construct($reader)
    {
     // the reader can be a dedicated person, either a group of people
     // organized as group, as event, either as receiver of a task
     $this->reader = $reader;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  language
     */
    public function set_language($language)
    {
     $this->language = $language;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  text_model
     * @version 1.0
     */
    public function set_text_model($text_model)
    {
     // the text_model is the data based representation of this view.
     // the team_article; the team_comment; the event_article; the
     // the member_message either the task
     $this->text_model = $text_model;
     $this->set_author();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_text_model()
    {
     return $this->text_model;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function set_author()
    {
     $this->author = new member();
     $this->author->set_id( $this->text_model->get_author_id());
     $this->author->load();
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_author()
    {
     return $this->author;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_author_link()
    {
     return
     "<a href=\"" . $_SESSION['B_control_base'] . "B0_pre_frame.php" .
     "?id=" . $this->get_author()->get_id() .
     "\">" . $this->get_author()->get_forename() .
     " " . $this->get_author()->get_name() .
     "</a>";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_author_status()
    {
     return
     $this->language['C3_written_by'] .
     " " .
     $this->get_author_link() .
     " " .
     $this->language['C3_at'] .
     " " .
     $this->text_model->get_written_stamp();
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_author_image()
    {
     $image = new image();
     $image->set_id( $this->get_author()->get_image_id() );
     $image->load();
     return $image;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_author_image_status()
    {
     return
     $this->language['C3_written_by'] .
     "<img src=\"". $this->get_author_image()->get_avatar_icon() .
     "\" alt=\"\" class=\"bordered\"/>" .
     "<a href=\"" . $_SESSION['B_control_base'] .
     "B0_pre_frame.php?id=" .
     $this->author->get_id() . "\">" .
     "</a>" .
     "<a href=\"" . $_SESSION['B_control_base'] .
     "B0_pre_frame.php?id=" .
     $this->get_author()->get_id() . "\">" .
     $this->get_author()->get_forename() . " ".
     "</a>" .
     " at " .
     $this->text_model->get_written_stamp();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  reader
     */
    public function set_reader($reader)
    {
     $this->reader = $reader;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_reader()
    {
     return $this->reader;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_reader_link()
    {
     return
     "<a href=\"" . $_SESSION['B_control_base'] . "B0_pre_frame.php" .
     "?id=" . $this->get_reader()->get_id() .
     "\">" . $this->get_reader()->get_forename() .
     " " . $this->get_reader()->get_name() .
     "</a>";
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  is_read
     * @version 1.0
     */
    public function get_reader_status($is_read)
    {
     $reader_status = "";
     if( $is_read )
     {
     $reader_status =
     $this->language['C3_read_by'] .
     " " .
     $this->get_reader_link() .
     " " .
     $this->language['C3_at'] .
     " " .
     $this->text_model->get_read_stamp();
     }
     else
     {
     $reader_status =
     $this->language['C3_not_read_by'] .
     " " .
     $this->get_reader_link() .
     " " .
     $this->language['C3_yet'];
     }
     return $reader_status;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_text()
    {
     return
     $this->text_model->get_text() .
     $this->get_file_info();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  file_info
     * @param  count
     */
    public function get_file_text($file_info, $count)
    {
     if( $count == (int)1 )
     {
     $text1 =
     $count . " " .
     $this->language['media_1_sing'] . " " .
     $this->get_author_link() . " " .
     $this->language['media_2'];
     
     $text2 =
     $this->language['media_3_sing'] . " " .
     $this->get_author_link() . " " .
     $this->language['media_4_sing'];
     }
     elseif( $count > (int)1 )
     {
     $text1 =
     $count . " " .
     $this->language['media_1_plu'] . " " .
     $this->get_author_link() . " " .
     $this->language['media_2'];
     
     $text2 =
     $this->language['media_3_plu'] . " " .
     $this->get_author_link() . " " .
     $this->language['media_4_plu'];
     }
     else
     {
     $text1 = "";
     $file_info = "";
     $text2 = "";
     }
     
     return
     "<br/><br/>" .
     "<small>" .
     $text1 .
     "<br/><br/>" .
     $file_info .
     $text2 .
     "<br/>" .
     "</small>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_file_info()
    {
     if( defined('__DB_ROOT__') == FALSE )
     { define('__DB_ROOT__', $this->get_root_data() ); }
     require_once(__DB_ROOT__.'/class.media_file_list.php');
     
     $media_id = $this->text_model->get_media_id();
     $file_info = "";
     
     if( $media_id > (int)0 )
     {
     $media_list = new media_file_list();
     $media_list->set_media_id( $media_id );
     $media_list->load_all_media();
     
     $count = $media_list->get_item_count();
     for( $n = 0; $n < $count; $n++ )
     {
     $media_file = $media_list->get_item( $n );
     
     if( $media_file->get_picture_id() > (int)0 )
     {
     $file_info .=
     $this->get_image_icon( $media_file->get_picture_id() ) .
     "<br />";
     }
     elseif( $media_file->get_document_id() > (int)0 )
     {
     $file_info .=
     $this->get_document_icon( $media_file->get_document_id() ) .
     "<br />";
     }
     elseif( $media_file->get_video_id() > (int)0 )
     {
     $file_info .=
     $this->get_video_icon( $media_file->get_video_id() ) .
     "<br />";
     }
     else
     { ; }
     }
     $file_info = $this->get_file_text( $file_info, $count );
     }
     return $file_info;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  picture_id
     */
    public function get_image_icon($picture_id)
    {
     if( defined('__DB_ROOT__') == FALSE )
     { define('__DB_ROOT__', $this->get_root_data() ); }
     require_once(__DB_ROOT__.'/class.image.php');
     
     $image = new image();
     $image->set_id( $picture_id );
     $image->load();
     
     $control_base = $this->get_base_frame()->
     get_entity_name() . '_control_base';
     
     return
     "<a href=\"" .
     $_SESSION[$control_base] .
     $this->get_base_frame()->
     get_basic_post_frame() . ".php" .
     "?function=" . (int)16 .
     "&image_id=" . $image->get_id() . "\">" .
     "<img style=\"vertical-align:middle\" 
     src=\"". $image->get_format_thumb() .
     "\" alt=\"ads\" class=\"flexible\"/>" .
     "</a>" .
     "<span style=\"\">" . $image->get_header() . "</span>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  document_id
     */
    public function get_document_icon($document_id)
    {
     if( defined('__DB_ROOT__') == FALSE )
     { define('__DB_ROOT__', $this->get_root_data() ); }
     require_once(__DB_ROOT__.'/class.document.php');
     
     $document = new document();
     $document->set_id( $document_id );
     $document->load();
     
     return
     "<a target=\"_blank\" href=\"" . $document->get_document() . "\">" .
     "<img style=\"vertical-align:middle\" 
     src=\"". $document->get_format_thumb() .
     "\" alt=\"ads\" class=\"flexible\"/>" .
     "</a>" .
     "<span style=\"\">" . $document->get_header() . "</span>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  video_id
     */
    public function get_video_icon($video_id)
    {
     if( defined('__DB_ROOT__') == FALSE )
     { define('__DB_ROOT__', $this->get_root_data() ); }
     require_once(__DB_ROOT__.'/class.video.php');
     
     $video = new video();
     $video->set_id( $video_id );
     $video->load();
     
     $control_base = $this->get_base_frame()->
     get_entity_name() . '_control_base';
     
     return
     "<a href=\"" .
     $_SESSION[$control_base] .
     $this->get_base_frame()->
     get_basic_post_frame() . ".php" .
     "?function=" . (int)17 .
     "&video_id=" . $video->get_id() . "\">" .
     "<img style=\"vertical-align:middle\" 
     src=\"". $video->get_format_thumb() .
     "\" alt=\"ads\" class=\"flexible\"/>" .
     "</a>" .
     "<span style=\"\">" . $video->get_header() . "</span>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  base_frame
     */
    public function set_base_frame($base_frame)
    {
     // in principle the base_frame is the reader of the text
     $this->base_frame = $base_frame;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_base_frame()
    {
     return $this->base_frame;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_delete_link()
    {
     return "";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_root_data()
    {
     return
     dirname(dirname(dirname(dirname(__FILE__)))) .
     '/data/';
    }
}?>