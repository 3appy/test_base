<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.text_view.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 30.01.2016, 22:20:54 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
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
 * Short description of class text_view
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
     * Short description of attribute language
     *
     * @access public
     * @var Integer
     */
    public $language = null;

    /**
     * this is the text object. It could be a comment or a message.
     *
     * @access protected
     * @var Integer
     */
    protected $text_model = null;

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
     */
    public function get_file_info()
    {
     $media_amount = (int)0;
     $file_info = "";
     
     $media_amount = $this->text_model->get_media_list_count();
     
     if( $media_amount > (int)0 )
     {
     if( $media_amount == (int)1 )
     { $file_info = $this->get_single_file_info(); }
     else
     { $file_info = $this->get_double_file_info(); }
     }
     
     return $file_info;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_picture_info()
    {
     if( defined('__ROOT__') == FALSE )
     { define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__))))); }
     require_once(__ROOT__.'/data/class.image.php');
     
     $firstline = "";
     $file_line = "";
     
     $image_list  = $this->text_model->load_picture_media_list();
     $image_count = $image_list->get_item_count();
     
     $firstline =
     $image_count . " " .
     $this->language['C3_added_img_1_sing'] . " " .
     $this->get_author_link() . " " .
     $this->language['C3_added_img_2_sing'];
     
     for( $n = 0; $n < $image_count; $n++ )
     {
     $message_media = $image_list->get_item( $n );
     
     $image = new image();
     $image->set_id( $message_media->get_picture_id() );
     $image->load();
     
     $file_line = $file_line .
     "<a href=\"" . $_SESSION['B_control_base'] .
     "B_post_frame.php" .
     "?function=" . (int)16 .
     "&image_id=" . $image->get_id() . "\">" .
     "<img src=\"". $image->get_format_thumb() .
     "\" alt=\"ads\" class=\"flexible\"/>" .
     "</a>";
     }
     return $firstline . "<br/>" . $file_line;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_document_info()
    {
     if( defined('__ROOT__') == FALSE )
     { define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__))))); }
     require_once(__ROOT__.'/data/class.document.php');
     
     $firstline = "";
     $file_line = "";
     
     $document_list  = $this->text_model->load_document_media_list();
     $document_count = $document_list->get_item_count();
     
     $firstline =
     $document_count . " " .
     $this->language['C3_added_doc_1_sing'] . " " .
     $this->get_author_link() . " " .
     $this->language['C3_added_doc_2_sing'];
     
     for( $n = 0; $n < $document_count; $n++ )
     {
     $message_media = $document_list->get_item( $n );
     
     $document = new document();
     $document->set_id( $message_media->get_document_id() );
     $document->load();
     
     $file_line = $file_line .
     "<a target=\"_blank\" href=\"" . $document->get_document() . "\">" .
     "<img src=\"". $document->get_format_thumb() .
     "\" alt=\"ads\" class=\"flexible\"/>" .
     "</a>";
     }
     return $firstline . "<br/>" . $file_line;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_video_info()
    {
     if( defined('__ROOT__') == FALSE )
     { define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__))))); }
     require_once(__ROOT__.'/data/class.video.php');
     
     $firstline = "";
     $file_line = "";
     
     $video_list  = $this->text_model->load_video_media_list();
     $video_count = $video_list->get_item_count();
     
     $firstline =
     $video_count . " " .
     $this->language['C3_added_vid_1_sing'] . " " .
     $this->get_author_link() . " " .
     $this->language['C3_added_vid_2_sing'];
     
     for( $n = 0; $n < $video_count; $n++ )
     {
     $message_media = $video_list->get_item( $n );
     
     $video = new video();
     $video->set_id( $message_media->get_video_id() );
     $video->load();
     
     $file_line = $file_line .
     "<a href=\"" . $_SESSION['B_control_base'] .
     "B_post_frame.php" .
     "?function=" . (int)17 .
     "&video_id=" . $video->get_id() . "\">" .
     "<img src=\"". $video->get_format_thumb() .
     "\" alt=\"ads\" class=\"flexible\"/>" .
     "</a>";
     }
     return $firstline . "<br/>" . $file_line;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_single_file_info()
    {
     $file_info = "";
     
     if( $this->text_model->get_picture_media_list_count() > (int)0 )
     {
     $file_info =
     "<br/><br/>" .
     "<small>" .
     $this->get_picture_info() . "<br/>" .
     $this->get_single_last_line() .
     "</small>";
     }
     elseif( $this->text_model->get_document_media_list_count() > (int)0 )
     {
     $file_info =
     "<br/><br/>" .
     "<small>" .
     $this->get_document_info() . "<br/>" .
     $this->get_single_last_line() .
     "</small>";
     }
     elseif( $this->text_model->get_video_media_list_count() > (int)0 )
     {
     $file_info =
     "<br/><br/>" .
     "<small>" .
     $this->get_video_info() . "<br/>" .
     $this->get_single_last_line() .
     "</small>";
     }
     else
     { ; }
     return $file_info;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_single_last_line()
    {
     return
     $this->language['C3_added_1_sing'] . " " .
     $this->get_author_link() . " " .
     $this->language['C3_added_2_sing'];
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function get_double_file_info()
    {
     $file_info = "";
     
     if( $this->text_model->get_picture_media_list_count() > (int)0 )
     {
     $file_info =
     "<br/><br/>" .
     "<small>" .
     $this->get_picture_info() . "<br/>" .
     $this->get_double_last_line() .
     "</small>";
     }
     elseif( $this->text_model->get_document_media_list_count() > (int)0 )
     {
     $file_info =
     "<br/><br/>" .
     "<small>" .
     $this->get_document_info() . "<br/>" .
     $this->get_double_last_line() .
     "</small>";
     }
     elseif( $this->text_model->get_document_media_list_count() > (int)0 )
     {
     $file_info =
     "<br/><br/>" .
     "<small>" .
     $this->get_video_info() . "<br/>" .
     $this->get_double_last_line() .
     "</small>";
     }
     else
     { ; }
     return $file_info;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_double_last_line()
    {
     return
     $this->language['C3_added_1_double'] . " " .
     $this->get_author_link() . " " .
     $this->language['C3_added_2_double'];
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
     * @param  base_frame
     */
    public function set_base_frame($base_frame)
    {
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
}?>