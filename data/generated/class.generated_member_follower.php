<?php

/**
 * This php file is automatically generated by Skolenet
 * Model - Class: member_follower
 */

if (0 > version_compare(PHP_VERSION, '5'))
{ die('This file was generated for PHP 5'); }


require_once('class.general_group.php');


class generated_member_follower
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
     * Short description of attribute member_id
     *
     * @access private
     * @var Integer
     */
    private $member_id = null;

    /**
     * Short description of attribute follower_id
     *
     * @access private
     * @var Integer
     */
    private $follower_id = null;

    /**
     * Short description of attribute requested
     *
     * @access private
     * @var time_stamp
     */
    private $requested = null;

    /**
     * Short description of attribute status
     *
     * @access private
     * @var Integer
     */
    private $status = null;

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
     * Short description of attribute member_id
     *
     * @access private
     * @var Integer
     */
    public function set_member_id($member_id)
    {
      $this->member_id = $member_id;
    }

    /**
     * Short description of attribute member_id
     *
     * @access private
     * @var Integer
     */
    public function get_member_id()
    {
      return $this->member_id;
    }

    /**
     * Short description of attribute follower_id
     *
     * @access private
     * @var Integer
     */
    public function set_follower_id($follower_id)
    {
      $this->follower_id = $follower_id;
    }

    /**
     * Short description of attribute follower_id
     *
     * @access private
     * @var Integer
     */
    public function get_follower_id()
    {
      return $this->follower_id;
    }

    /**
     * Short description of attribute requested
     *
     * @access private
     * @var time_stamp
     */
    public function set_requested($requested)
    {
      $this->requested = $requested;
    }

    /**
     * Short description of attribute requested
     *
     * @access private
     * @var time_stamp
     */
    public function get_requested()
    {
      return $this->requested;
    }

    /**
     * Short description of attribute status
     *
     * @access private
     * @var Integer
     */
    public function set_status($status)
    {
      $this->status = $status;
    }

    /**
     * Short description of attribute status
     *
     * @access private
     * @var Integer
     */
    public function get_status()
    {
      return $this->status;
    }

    /**
     *
     * This is the insert function of the class member_follower
     * @author Bernd Schr�der
     *
     */
    public function insert()
    {
      require "data_connect.php";
      $insert_id = 0;
      $id = $this->get_id();
      $member_id = $this->get_member_id();
      $follower_id = $this->get_follower_id();
      $status = $this->get_status();
      if( $stmt = $mysqli->prepare(
      "INSERT INTO member_follower
      (
      id,
      member_id,
      follower_id,
      status
      )
      VALUES (?,?,?,?)"))
      {
      $stmt->bind_param
      (
      "iiii",
      $id,
      $member_id,
      $follower_id,
      $status
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
     * This is the load function of the class member_follower
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
      member_id,
      follower_id,
      requested,
      status
      FROM member_follower WHERE id=?"))
      {
      $stmt->bind_param('i', $id );
      $stmt->execute();
      $stmt->bind_result
      (
      $id,
      $member_id,
      $follower_id,
      $requested,
      $status
      );
      if( $stmt->fetch() == TRUE )
      {
      $this->set_id( $id );
      $this->set_member_id( $member_id );
      $this->set_follower_id( $follower_id );
      $this->set_requested( $requested );
      $this->set_status( $status );
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
     * This is the update function of the class member_follower
     * @author Bernd Schr�der
     *
     */
    public function update()
    {
      require "data_connect.php";
      $id = $this->get_id();
      $member_id = $this->get_member_id();
      $follower_id = $this->get_follower_id();
      $status = $this->get_status();
      $id = $this->get_id();
      if( $stmt = $mysqli->prepare(
      "UPDATE member_follower SET
      id=?,
      member_id=?,
      follower_id=?,
      status=?
      WHERE id=?"))
      {
      $stmt->bind_param
      (
      "iiiii",
      $id,
      $member_id,
      $follower_id,
      $status,
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
     * This is the delete function of the class member_follower
     * @author Bernd Schr�der
     *
     */
    public function delete()
    {
      require "data_connect.php";
      $id = $this->get_id();
      if( $stmt = $mysqli->prepare(
      "DELETE FROM member_follower
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

} /* end of class member_follower */
?>