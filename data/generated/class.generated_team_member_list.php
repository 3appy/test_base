<?php

/**
 * This php file is automatically generated by Skolenet
 * Model - Class: team_member
 */

if (0 > version_compare(PHP_VERSION, '5'))
{ die('This file was generated for PHP 5'); }


require_once('class.basic_list.php');


class generated_team_member_list
     extends basic_list
{

    /**
     *
     * This attribute hold the handle to the Mysqli statement team_member
     * @author Bernd Schr�der
     *
     * @access protected
     * @var Integer
     */
    protected $stmt = null;
    

    /**
     *
     * This is the list_load function of the class team_member
     * @author Bernd Schr�der
     *
     */
    public function list_load( $where_statement )
    {
      $prepare_statement = 
      "SELECT
      id,
      team_id,
      member_id,
      requested,
      status
      FROM team_member " .
      $where_statement;
      return $this->basic_load( $prepare_statement );
    }

    /**
     *
     * This is the basic_count function of the class team_member
     * @author Bernd Schr�der
     *
     */
    public function basic_count( $prepare_statement )
    {
      require "data_connect.php";

      $object_number = 0;
      if( $this->stmt = $mysqli->prepare( $prepare_statement ))
      {
      $this->set_binding();
      $this->stmt->execute();
      $this->stmt->store_result();
      $object_number = $this->stmt->num_rows;
      $this->stmt->close();
      }
      $mysqli->close();
      return $object_number;
    }

    /**
     *
     * This is the basic_load function of the class team_member
     * @author Bernd Schr�der
     *
     */
    public function basic_load( $prepare_statement )
    {
      if( defined('__GEN_ROOT__') == FALSE )
      { define('__GEN_ROOT__', dirname(dirname(__FILE__))); }
      require_once(__GEN_ROOT__.'/class.team_member.php');

      require "data_connect.php";

      $object_number = 0;
      $max_row = $this->get_row_per_page();
      $page = $this->get_page();
      $start_row = $page*$max_row;
      if( $this->stmt = $mysqli->prepare( $prepare_statement ))
      {
      $this->set_binding();
      $this->stmt->execute();
      $this->stmt->bind_result
      (
      $id,
      $team_id,
      $member_id,
      $requested,
      $status
      );
      $this->stmt->store_result();
      $this->stmt->data_seek( (int)( $start_row ) );
      while( $this->stmt->fetch()  
      AND ( $object_number < $max_row ) )
      {
      $new_object = new team_member();
      $new_object->set_id( $id );
      $new_object->set_team_id( $team_id );
      $new_object->set_member_id( $member_id );
      $new_object->set_requested( $requested );
      $new_object->set_status( $status );
      $this->add_item( $new_object );
      $object_number++;
      }
      $this->stmt->close();
      }
      $mysqli->close();
      return $object_number;
    }

    /**
     *
     * This is the prepare_list function of the class team_member
     * @author Bernd Schr�der
     *
     */
    public function get_prepare_list()
    {
      return 
      "
      team_member.id,
      team_member.team_id,
      team_member.member_id,
      team_member.requested,
      team_member.status
      ";
    }

    /**
     *
     * This is the set_binding function of the class team_member
     * @author Bernd Schr�der
     *
     */
    public function set_binding()
    {
      ;
    }

} /* end of class team_member */
?>