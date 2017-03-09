<?php

/**
 * This php file is automatically generated by Skolenet
 * Model - Class: member_message
 */

if (0 > version_compare(PHP_VERSION, '5'))
{ die('This file was generated for PHP 5'); }


require_once('class.general_group.php');


class generated_member_message
     extends general_group
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
     * Short description of attribute author_id
     *
     * @access private
     * @var Integer
     */
    private $author_id = null;

    /**
     * Short description of attribute written_stamp
     *
     * @access private
     * @var time_stamp
     */
    private $written_stamp = null;

    /**
     * Short description of attribute reader_id
     *
     * @access private
     * @var Integer
     */
    private $reader_id = null;

    /**
     * Short description of attribute read_stamp
     *
     * @access private
     * @var String
     */
    private $read_stamp = null;

    /**
     * Short description of attribute text
     *
     * @access private
     * @var String
     */
    private $text = null;

    /**
     * Short description of attribute media_id
     *
     * @access public
     * @var Integer
     */
    public $media_id = null;

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
     * Short description of attribute author_id
     *
     * @access private
     * @var Integer
     */
    public function set_author_id($author_id)
    {
      $this->author_id = $author_id;
    }

    /**
     * Short description of attribute author_id
     *
     * @access private
     * @var Integer
     */
    public function get_author_id()
    {
      return $this->author_id;
    }

    /**
     * Short description of attribute written_stamp
     *
     * @access private
     * @var time_stamp
     */
    public function set_written_stamp($written_stamp)
    {
      $this->written_stamp = $written_stamp;
    }

    /**
     * Short description of attribute written_stamp
     *
     * @access private
     * @var time_stamp
     */
    public function get_written_stamp()
    {
      return $this->written_stamp;
    }

    /**
     * Short description of attribute reader_id
     *
     * @access private
     * @var Integer
     */
    public function set_reader_id($reader_id)
    {
      $this->reader_id = $reader_id;
    }

    /**
     * Short description of attribute reader_id
     *
     * @access private
     * @var Integer
     */
    public function get_reader_id()
    {
      return $this->reader_id;
    }

    /**
     * Short description of attribute read_stamp
     *
     * @access private
     * @var String
     */
    public function set_read_stamp($read_stamp)
    {
      $this->read_stamp = $read_stamp;
    }

    /**
     * Short description of attribute read_stamp
     *
     * @access private
     * @var String
     */
    public function get_read_stamp()
    {
      return $this->read_stamp;
    }

    /**
     * Short description of attribute text
     *
     * @access private
     * @var String
     */
    public function set_text($text)
    {
      $this->text = $text;
    }

    /**
     * Short description of attribute text
     *
     * @access private
     * @var String
     */
    public function get_text()
    {
      return $this->text;
    }

    /**
     * Short description of attribute media_id
     *
     * @access public
     * @var Integer
     */
    public function set_media_id($media_id)
    {
      $this->media_id = $media_id;
    }

    /**
     * Short description of attribute media_id
     *
     * @access public
     * @var Integer
     */
    public function get_media_id()
    {
      return $this->media_id;
    }

    /**
     *
     * This is the insert function of the class member_message
     * @author Bernd Schr�der
     *
     */
    public function insert()
    {
      require "data_connect.php";
      $insert_id = 0;
      $id = $this->get_id();
      $author_id = $this->get_author_id();
      $reader_id = $this->get_reader_id();
      $read_stamp = $this->get_read_stamp();
      $text = $this->get_text();
      $media_id = $this->get_media_id();
      if( $stmt = $mysqli->prepare(
      "INSERT INTO member_message
      (
      id,
      author_id,
      reader_id,
      read_stamp,
      text,
      media_id
      )
      VALUES (?,?,?,?,?,?)"))
      {
      $stmt->bind_param
      (
      "iiissi",
      $id,
      $author_id,
      $reader_id,
      $read_stamp,
      $text,
      $media_id
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
     * This is the load function of the class member_message
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
      author_id,
      written_stamp,
      reader_id,
      read_stamp,
      text,
      media_id
      FROM member_message WHERE id=?"))
      {
      $stmt->bind_param('i', $id );
      $stmt->execute();
      $stmt->bind_result
      (
      $id,
      $author_id,
      $written_stamp,
      $reader_id,
      $read_stamp,
      $text,
      $media_id
      );
      if( $stmt->fetch() == TRUE )
      {
      $this->set_id( $id );
      $this->set_author_id( $author_id );
      $this->set_written_stamp( $written_stamp );
      $this->set_reader_id( $reader_id );
      $this->set_read_stamp( $read_stamp );
      $this->set_text( $text );
      $this->set_media_id( $media_id );
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
     * This is the update function of the class member_message
     * @author Bernd Schr�der
     *
     */
    public function update()
    {
      require "data_connect.php";
      $id = $this->get_id();
      $author_id = $this->get_author_id();
      $reader_id = $this->get_reader_id();
      $read_stamp = $this->get_read_stamp();
      $text = $this->get_text();
      $media_id = $this->get_media_id();
      $id = $this->get_id();
      if( $stmt = $mysqli->prepare(
      "UPDATE member_message SET
      id=?,
      author_id=?,
      reader_id=?,
      read_stamp=?,
      text=?,
      media_id=?
      WHERE id=?"))
      {
      $stmt->bind_param
      (
      "iiissii",
      $id,
      $author_id,
      $reader_id,
      $read_stamp,
      $text,
      $media_id,
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
     * This is the delete function of the class member_message
     * @author Bernd Schr�der
     *
     */
    public function delete()
    {
      require "data_connect.php";
      $id = $this->get_id();
      if( $stmt = $mysqli->prepare(
      "DELETE FROM member_message
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

} /* end of class member_message */
?>