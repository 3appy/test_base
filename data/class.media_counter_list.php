<?php

/**
 * This php file is automatically generated by Skolenet
 * Model - Class: media_counter
 */

if (0 > version_compare(PHP_VERSION, '5'))
{ die('This file was generated for PHP 5'); }


require_once('generated/class.generated_media_counter_list.php');


class media_counter_list
     extends generated_media_counter_list
{

    /**
     *
     * This is the load function of the class media_counter
     * @author Bernd Schr�der
     *
     */
    public function load()
    {
      $where_statement = 
//      WHERE XXX=?;
      "";
      return $this->list_load( $where_statement );
    }

} /* end of class media_counter */
?>