<?php

/**
 * This php file is automatically generated by Skolenet
 * Model - Class: video
 */

if (0 > version_compare(PHP_VERSION, '5'))
{ die('This file was generated for PHP 5'); }


require_once('class.file_group.php');


class generated_video
     extends file_group
{
    // --- ATTRIBUTES ---

    /**
     * Short description of attribute id
     *
     * @access private
     * @var Integer
     */
    private $id = null;

    /**
     * Short description of attribute owner_group
     *
     * @access private
     * @var String
     */
    private $owner_group = null;

    /**
     * The owner describe to whom this files belongs to.
     *
     * @access private
     * @var Integer
     */
    private $owner_id = null;

    /**
     * The name is the name of the file saved on the hard disk
     *
     * @access private
     * @var String
     */
    private $name = null;

    /**
     * The type identifies the type of file; image: jpg, gif, png, document:
     * etc
     *
     * @access private
     * @var String
     */
    private $type = null;

    /**
     * The header are 2 - 3 words identifying this file
     *
     * @access private
     * @var String
     */
    private $header = null;

    /**
     * The text is a short description of this document
     *
     * @access private
     * @var String
     */
    private $text = null;

    /**
     * The upload time stamp defines the timestamp when this file is uploaded.
     *
     * @access private
     * @var time_stamp
     */
    private $upload_stamp = null;

    /**
     * This is the size of this file.
     *
     * @access private
     * @var Integer
     */
    private $size = null;

    /**
     * who_has_uploaded defines the member who has uploaded this document.
     *
     * @access private
     * @var Integer
     */
    private $uploader_id = null;

    /**
     * Short description of attribute visible
     *
     * @access public
     * @var Integer
     */
    public $visible = null;

     // --- OPERATIONS ---

    /**
     * Short description of attribute id
     *
     * @access private
     * @var Integer
     */
    public function set_id($id)
    {
      $this->id = $id;
    }

    /**
     * Short description of attribute id
     *
     * @access private
     * @var Integer
     */
    public function get_id()
    {
      return $this->id;
    }

    /**
     * Short description of attribute owner_group
     *
     * @access private
     * @var String
     */
    public function set_owner_group($owner_group)
    {
      $this->owner_group = $owner_group;
    }

    /**
     * Short description of attribute owner_group
     *
     * @access private
     * @var String
     */
    public function get_owner_group()
    {
      return $this->owner_group;
    }

    /**
     * The owner describe to whom this files belongs to.
     *
     * @access private
     * @var Integer
     */
    public function set_owner_id($owner_id)
    {
      $this->owner_id = $owner_id;
    }

    /**
     * The owner describe to whom this files belongs to.
     *
     * @access private
     * @var Integer
     */
    public function get_owner_id()
    {
      return $this->owner_id;
    }

    /**
     * The name is the name of the file saved on the hard disk
     *
     * @access private
     * @var String
     */
    public function set_name($name)
    {
      $this->name = $name;
    }

    /**
     * The name is the name of the file saved on the hard disk
     *
     * @access private
     * @var String
     */
    public function get_name()
    {
      return $this->name;
    }

    /**
     * The type identifies the type of file; image: jpg, gif, png, document:
     * etc
     *
     * @access private
     * @var String
     */
    public function set_type($type)
    {
      $this->type = $type;
    }

    /**
     * The type identifies the type of file; image: jpg, gif, png, document:
     * etc
     *
     * @access private
     * @var String
     */
    public function get_type()
    {
      return $this->type;
    }

    /**
     * The header are 2 - 3 words identifying this file
     *
     * @access private
     * @var String
     */
    public function set_header($header)
    {
      $this->header = $header;
    }

    /**
     * The header are 2 - 3 words identifying this file
     *
     * @access private
     * @var String
     */
    public function get_header()
    {
      return $this->header;
    }

    /**
     * The text is a short description of this document
     *
     * @access private
     * @var String
     */
    public function set_text($text)
    {
      $this->text = $text;
    }

    /**
     * The text is a short description of this document
     *
     * @access private
     * @var String
     */
    public function get_text()
    {
      return $this->text;
    }

    /**
     * The upload time stamp defines the timestamp when this file is uploaded.
     *
     * @access private
     * @var time_stamp
     */
    public function set_upload_stamp($upload_stamp)
    {
      $this->upload_stamp = $upload_stamp;
    }

    /**
     * The upload time stamp defines the timestamp when this file is uploaded.
     *
     * @access private
     * @var time_stamp
     */
    public function get_upload_stamp()
    {
      return $this->upload_stamp;
    }

    /**
     * This is the size of this file.
     *
     * @access private
     * @var Integer
     */
    public function set_size($size)
    {
      $this->size = $size;
    }

    /**
     * This is the size of this file.
     *
     * @access private
     * @var Integer
     */
    public function get_size()
    {
      return $this->size;
    }

    /**
     * who_has_uploaded defines the member who has uploaded this document.
     *
     * @access private
     * @var Integer
     */
    public function set_uploader_id($uploader_id)
    {
      $this->uploader_id = $uploader_id;
    }

    /**
     * who_has_uploaded defines the member who has uploaded this document.
     *
     * @access private
     * @var Integer
     */
    public function get_uploader_id()
    {
      return $this->uploader_id;
    }

    /**
     * Short description of attribute visible
     *
     * @access public
     * @var Integer
     */
    public function set_visible($visible)
    {
      $this->visible = $visible;
    }

    /**
     * Short description of attribute visible
     *
     * @access public
     * @var Integer
     */
    public function get_visible()
    {
      return $this->visible;
    }

    /**
     *
     * This is the insert function of the class video
     * @author Bernd Schr�der
     *
     */
    public function insert()
    {
      require "data_connect.php";
      $insert_id = 0;
      $id = $this->get_id();
      $owner_group = $this->get_owner_group();
      $owner_id = $this->get_owner_id();
      $name = $this->get_name();
      $type = $this->get_type();
      $header = $this->get_header();
      $text = $this->get_text();
      $size = $this->get_size();
      $uploader_id = $this->get_uploader_id();
      $visible = $this->get_visible();
      if( $stmt = $mysqli->prepare(
      "INSERT INTO video
      (
      id,
      owner_group,
      owner_id,
      name,
      type,
      header,
      text,
      size,
      uploader_id,
      visible
      )
      VALUES (?,?,?,?,?,?,?,?,?,?)"))
      {
      $stmt->bind_param
      (
      "isissssiii",
      $id,
      $owner_group,
      $owner_id,
      $name,
      $type,
      $header,
      $text,
      $size,
      $uploader_id,
      $visible
      );
      $stmt->execute();
      $stmt->close();
      $insert_id = $mysqli->insert_id;
      }
      else
      {
      $this->db_error->insert_error();
      }
      $mysqli->close();
      $this->db_error->serialize();
      return $insert_id;
    }

    /**
     *
     * This is the load function of the class video
     * @author Bernd Schr�der
     *
     */
    public function load()
    {
      require "data_connect.php";
      $id = $this->get_id();
      if( $stmt = $mysqli->prepare(
      "SELECT
      id,
      owner_group,
      owner_id,
      name,
      type,
      header,
      text,
      upload_stamp,
      size,
      uploader_id,
      visible
      FROM video WHERE id=?"))
      {
      $stmt->bind_param('i', $id );
      $stmt->execute();
      $stmt->bind_result
      (
      $id,
      $owner_group,
      $owner_id,
      $name,
      $type,
      $header,
      $text,
      $upload_stamp,
      $size,
      $uploader_id,
      $visible
      );
      if( $stmt->fetch() == TRUE )
      {
      $this->set_id( $id );
      $this->set_owner_group( $owner_group );
      $this->set_owner_id( $owner_id );
      $this->set_name( $name );
      $this->set_type( $type );
      $this->set_header( $header );
      $this->set_text( $text );
      $this->set_upload_stamp( $upload_stamp );
      $this->set_size( $size );
      $this->set_uploader_id( $uploader_id );
      $this->set_visible( $visible );
      $stmt->close();
      }
      else
      {
      $this->db_warning->not_found();
      }
      $mysqli->close();
      }
      else
      {
      $this->db_error->load_error();
      }
      $this->db_error->serialize();
      $this->db_warning->serialize();
    }

    /**
     *
     * This is the update function of the class video
     * @author Bernd Schr�der
     *
     */
    public function update()
    {
      require "data_connect.php";
      $id = $this->get_id();
      $owner_group = $this->get_owner_group();
      $owner_id = $this->get_owner_id();
      $name = $this->get_name();
      $type = $this->get_type();
      $header = $this->get_header();
      $text = $this->get_text();
      $size = $this->get_size();
      $uploader_id = $this->get_uploader_id();
      $visible = $this->get_visible();
      $id = $this->get_id();
      if( $stmt = $mysqli->prepare(
      "UPDATE video SET
      id=?,
      owner_group=?,
      owner_id=?,
      name=?,
      type=?,
      header=?,
      text=?,
      size=?,
      uploader_id=?,
      visible=?
      WHERE id=?"))
      {
      $stmt->bind_param
      (
      "isissssiiii",
      $id,
      $owner_group,
      $owner_id,
      $name,
      $type,
      $header,
      $text,
      $size,
      $uploader_id,
      $visible,
      $id
      );
      $stmt->execute();
      $stmt->close();
      }
      else
      {
      $this->db_error->update_error();
      }
      $mysqli->close();
      $this->db_error->serialize();
    }

    /**
     *
     * This is the delete function of the class video
     * @author Bernd Schr�der
     *
     */
    public function delete()
    {
      require "data_connect.php";
      $id = $this->get_id();
      if( $stmt = $mysqli->prepare(
      "DELETE FROM video
      WHERE id=?"))
      {
      $stmt->bind_param("i",  $id);
      $stmt->execute();
      $stmt->close();
      }
      else
      {
      $this->db_error->delete_error();
      }
      $mysqli->close();
      $this->db_error->serialize();
    }

} /* end of class video */
?>