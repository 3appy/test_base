<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.service_add_file.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 11.04.2017, 16:40:41 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include service_operation
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.service_operation.php');

/* user defined includes */
// section 10-5-23--64-1a46238c:15a0ad31fe1:-8000:0000000000002FEC-includes begin
// section 10-5-23--64-1a46238c:15a0ad31fe1:-8000:0000000000002FEC-includes end

/* user defined constants */
// section 10-5-23--64-1a46238c:15a0ad31fe1:-8000:0000000000002FEC-constants begin
// section 10-5-23--64-1a46238c:15a0ad31fe1:-8000:0000000000002FEC-constants end

/**
 * Short description of class service_add_file
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class service_add_file
    extends service_operation
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute file_name
     *
     * @access private
     * @var String
     */
    private $file_name = null;

    /**
     * Short description of attribute file_source
     *
     * @access private
     * @var String
     */
    private $file_source = null;

    /**
     * Short description of attribute file_size
     *
     * @access private
     * @var Integer
     */
    private $file_size = null;

    /**
     * Short description of attribute file_error
     *
     * @access private
     * @var Integer
     */
    private $file_error = null;

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
     * Short description of attribute media_id
     *
     * @access public
     * @var Integer
     */
    public $media_id = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  file_name
     */
    public function set_file_name($file_name)
    {
     $this->file_name = $file_name;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  file_source
     */
    public function set_file_source($file_source)
    {
     $this->file_source = $file_source;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  file_size
     */
    public function set_file_size($file_size)
    {
     $this->file_size = $file_size;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  file_error
     */
    public function set_file_error($file_error)
    {
     $this->file_error = $file_error;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  owner_group
     */
    public function set_owner_group($owner_group)
    {
     $this->owner_group = $owner_group;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  owner_id
     */
    public function set_owner_id($owner_id)
    {
     $this->owner_id = $owner_id;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  uploader_id
     */
    public function set_uploader_id($uploader_id)
    {
     $this->uploader_id = $uploader_id;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  file_array
     */
    public function add_media_files($file_array)
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.media_counter.php');
     require_once(__ROOT_DATA__.'class.media.php');
     
     $media_id = (int)0;
     $file_count = count( $file_array['name'] );
     
     if( $file_count > (int)0 )
     {
     // generate the common counter ....
     $counter = new media_counter();
     $media_id = $counter->insert();
     
     for( $n = 0; $n < $file_count; $n++ )
     {
     $this->set_file_name( $file_array['name'][$n] );
     $this->set_file_source( $file_array['tmp_name'][$n] );
     $this->set_file_size( $file_array['size'][$n] );
     $this->set_file_error( $file_array['error'][$n] );
     
     $media_file_id = $this->add_media_file();
     
     if( $media_file_id > (int)0 )
     {
     $new_media = new media();
     $new_media->set_media_id( $media_id );
     $new_media->set_media_file_id( $media_file_id );
     $new_media->insert();
     }
     }
     }
     return $media_id;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  file_array
     */
    public function add_files($file_array)
    {
     $file_count = count( $file_array['name'] );
     
     if( $file_count > (int)0 )
     {
     for( $n = 0; $n < $file_count; $n++ )
     {
     $this->set_file_name( $file_array['name'][$n] );
     $this->set_file_source( $file_array['tmp_name'][$n] );
     $this->set_file_size( $file_array['size'][$n] );
     $this->set_file_error( $file_array['error'][$n] );
     
     $this->add_file();
     }
     }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function add_media_file()
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.media_file.php');
     
     $media_file_id = (int)0;
     
     if( empty( $this->file_name ))
     // nothing to copy
     { ; }
     else
     {
     // something has to copy
     if ( $this->is_image() )
     // an image has been selected
     {
     $image_id = $this->add_image();
     
     if( $image_id > (int)0 )
     {
     $new_media_file = new media_file();
     $new_media_file->set_picture_id( $image_id );
     $new_media_file->set_document_id( (int)0 );
     $new_media_file->set_video_id( (int)0 );
     $media_file_id = $new_media_file->insert();
     }
     }
     
     elseif ( $this->is_document() )
     // a document has been selected
     {
     $document_id = $this->add_document();
     if( $document_id > (int)0 )
     {
     $new_media_file = new media_file();
     $new_media_file->set_picture_id( (int)0 );
     $new_media_file->set_document_id( $document_id );
     $new_media_file->set_video_id( (int)0 );
     $media_file_id = $new_media_file->insert();
     }
     }
     
     elseif ( $this->is_video() )
     // a video has been selected
     {
     $video_id = $this->add_video();
     if( $video_id > (int)0 )
     {
     $new_media_file = new media_file();
     $new_media_file->set_picture_id( (int)0 );
     $new_media_file->set_document_id( (int)0 );
     $new_media_file->set_video_id( $video_id );
     $media_file_id = $new_media_file->insert();
     }
     }
     
     else
     // something else ?
     { ; }
     }
     return $media_file_id;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function add_file()
    {
     if( empty( $this->file_name ))
     // nothing to copy
     { ; }
     else
     {
     // something has to copy
     if ( $this->is_image() )
     // an image has been selected
     { $this->add_image(); }
     
     elseif ( $this->is_document() )
     // a document has been selected
     { $this->add_document(); }
     
     elseif ( $this->is_video() )
     // a video has been selected
     { $this->add_video(); }
     
     else
     // something else ?
     { ; }
     }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function is_image()
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.image.php');
     
     $is_image = FALSE;
     $image = new image();
     $is_image = $image->is_image( $this->file_name );
     return $is_image;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function add_image()
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.image.php');
     
     $image_id = (int)0;
     
     $image = new image();
     $image->set_owner_group( $this->owner_group );
     $image->set_owner_id( $this->owner_id );
     $image->set_uploader_id( $this->uploader_id );
     
     $image->set_upload_file_name( $this->file_name );
     $image->set_size( $this->file_size );
     $image->set_file_error( $this->file_error );
     $image->set_header( $image->get_upload_file_name() );
     $image->set_text( "" );
     $image->set_visible( (int)0 );
     
     if ( $image->upload_image( $this->file_source ) )
     { $image_id = $image->get_id(); }
     
     return $image_id;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function is_document()
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.document.php');
     
     $is_document = FALSE;
     $document = new document();
     $is_document = $document->is_document( $this->file_name );
     return $is_document;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function add_document()
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.document.php');
     
     $document_id = (int)0;
     
     $document = new document();
     $document->set_owner_group( $this->owner_group );
     $document->set_owner_id( $this->owner_id );
     $document->set_uploader_id( $this->uploader_id );
     
     $document->set_upload_file_name( $this->file_name );
     $document->set_size( $this->file_size );
     $document->set_file_error( $this->file_error );
     $document->set_header( $document->get_upload_file_name() );
     $document->set_text( "" );
     $document->set_visible( (int)0 );
     
     if ( $document->upload_document( $this->file_source ) )
     { $document_id = $document->get_id(); }
     
     return $document_id;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function is_video()
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.video.php');
     
     $is_video = FALSE;
     $video = new video();
     $is_video = $video->is_video( $this->file_name );
     return $is_video;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function add_video()
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'class.video.php');
     
     $video_id = (int)0;
     
     $video = new video();
     $video->set_owner_group( $this->owner_group );
     $video->set_owner_id( $this->owner_id );
     $video->set_uploader_id( $this->uploader_id );
     
     $video->set_upload_file_name( $this->file_name );
     $video->set_size( $this->file_size );
     $video->set_file_error( $this->file_error );
     $video->set_header( $video->get_upload_file_name() );
     $video->set_text( "" );
     $video->set_visible( (int)0 );
     
     if ( $video->upload_video( $this->file_source ) )
     { $video_id = $video->get_id(); }
     
     return $video_id;
    }
}?>