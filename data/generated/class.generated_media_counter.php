<?php

/**
 * This php file is automatically generated by Skolenet
 * Model - Class: media_counter
 */

if (0 > version_compare(PHP_VERSION, '5'))
{ die('This file was generated for PHP 5'); }


require_once('class.general_group.php');


class generated_media_counter
     extends general_group
{
    // --- ATTRIBUTES ---

    /**
     * Short description of attribute id
     *
     * @access public
     * @var Integer
     */
    public $id = null;

     // --- OPERATIONS ---

    /**
     * Short description of attribute id
     *
     * @access public
     * @var Integer
     */
    public function set_id($id)
    {
      $this->id = $id;
    }

    /**
     * Short description of attribute id
     *
     * @access public
     * @var Integer
     */
    public function get_id()
    {
      return $this->id;
    }

    /**
     *
     * This is the insert function of the class media_counter
     * @author Bernd Schr�der
     *
     */
    public function insert()
    {
      require "data_connect.php";
      $insert_id = 0;
      $id = $this->get_id();
      if( $stmt = $mysqli->prepare(
      "INSERT INTO media_counter
      (
      id
      )
      VALUES (?)"))
      {
      $stmt->bind_param
      (
      "i",
      $id
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
     * This is the load function of the class media_counter
     * @author Bernd Schr�der
     *
     */
    public function load()
    {
      require "data_connect.php";
      $id = $this->get_id();
      if( $stmt = $mysqli->prepare(
      "SELECT
      id
      FROM media_counter WHERE id=?"))
      {
      $stmt->bind_param('i', $id );
      $stmt->execute();
      $stmt->bind_result
      (
      $id
      );
      if( $stmt->fetch() == TRUE )
      {
      $this->set_id( $id );
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
     * This is the update function of the class media_counter
     * @author Bernd Schr�der
     *
     */
    public function update()
    {
      require "data_connect.php";
      $id = $this->get_id();
      $id = $this->get_id();
      if( $stmt = $mysqli->prepare(
      "UPDATE media_counter SET
      id=?
      WHERE id=?"))
      {
      $stmt->bind_param
      (
      "ii",
      $id,
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
     * This is the delete function of the class media_counter
     * @author Bernd Schr�der
     *
     */
    public function delete()
    {
      require "data_connect.php";
      $id = $this->get_id();
      if( $stmt = $mysqli->prepare(
      "DELETE FROM media_counter
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

} /* end of class media_counter */
?>