<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.basic_view.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 29.04.2014, 19:34:21 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section 127-0-0-1-58eb24dd:145ac7f252d:-8000:0000000000001320-includes begin
// section 127-0-0-1-58eb24dd:145ac7f252d:-8000:0000000000001320-includes end

/* user defined constants */
// section 127-0-0-1-58eb24dd:145ac7f252d:-8000:0000000000001320-constants begin
// section 127-0-0-1-58eb24dd:145ac7f252d:-8000:0000000000001320-constants end

/**
 * Short description of class basic_view
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class basic_view
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute language_array
     *
     * @access protected
     * @var Integer
     */
    protected $language_array = null;

    /**
     * Short description of attribute database_language
     *
     * @access private
     * @var Integer
     */
    private $database_language = null;

    /**
     * Short description of attribute control_language
     *
     * @access private
     * @var Integer
     */
    private $control_language = null;

    /**
     * Short description of attribute database_error
     *
     * @access private
     * @var Integer
     */
    private $database_error = null;

    /**
     * Short description of attribute database_warning
     *
     * @access private
     * @var Integer
     */
    private $database_warning = null;

    /**
     * Short description of attribute control_error
     *
     * @access private
     * @var Integer
     */
    private $control_error = null;

    /**
     * Short description of attribute control_warning
     *
     * @access private
     * @var Integer
     */
    private $control_warning = null;

    /**
     * Short description of attribute control_info
     *
     * @access private
     * @var Integer
     */
    private $control_info = null;

    /**
     * Short description of attribute watch_entity
     *
     * @access protected
     * @var Integer
     */
    protected $watch_entity = null;

    /**
     * Short description of attribute watched_entity
     *
     * @access protected
     * @var Integer
     */
    protected $watched_entity = null;

    /**
     * Short description of attribute watch_relation
     *
     * @access protected
     * @var Integer
     */
    protected $watch_relation = null;

     // --- OPERATIONS ---

    /**
     * Short description of attribute language_array
     *
     * @access protected
     * @var Integer
     */
    public function set_language_array($language_array)
    {
      $this->language_array = $language_array;
    }

    /**
     * Short description of attribute language_array
     *
     * @access protected
     * @var Integer
     */
    public function get_language_array()
    {
      return $this->language_array;
    }

    /**
     * Short description of attribute database_language
     *
     * @access private
     * @var Integer
     */
    public function set_database_language($database_language)
    {
      $this->database_language = $database_language;
    }

    /**
     * Short description of attribute database_language
     *
     * @access private
     * @var Integer
     */
    public function get_database_language()
    {
      return $this->database_language;
    }

    /**
     * Short description of attribute control_language
     *
     * @access private
     * @var Integer
     */
    public function set_control_language($control_language)
    {
      $this->control_language = $control_language;
    }

    /**
     * Short description of attribute control_language
     *
     * @access private
     * @var Integer
     */
    public function get_control_language()
    {
      return $this->control_language;
    }

    /**
     * Short description of attribute database_error
     *
     * @access private
     * @var Integer
     */
    public function set_database_error($database_error)
    {
      $this->database_error = $database_error;
    }

    /**
     * Short description of attribute database_error
     *
     * @access private
     * @var Integer
     */
    public function get_database_error()
    {
      return $this->database_error;
    }

    /**
     * Short description of attribute database_warning
     *
     * @access private
     * @var Integer
     */
    public function set_database_warning($database_warning)
    {
      $this->database_warning = $database_warning;
    }

    /**
     * Short description of attribute database_warning
     *
     * @access private
     * @var Integer
     */
    public function get_database_warning()
    {
      return $this->database_warning;
    }

    /**
     * Short description of attribute control_error
     *
     * @access private
     * @var Integer
     */
    public function set_control_error($control_error)
    {
      $this->control_error = $control_error;
    }

    /**
     * Short description of attribute control_error
     *
     * @access private
     * @var Integer
     */
    public function get_control_error()
    {
      return $this->control_error;
    }

    /**
     * Short description of attribute control_warning
     *
     * @access private
     * @var Integer
     */
    public function set_control_warning($control_warning)
    {
      $this->control_warning = $control_warning;
    }

    /**
     * Short description of attribute control_warning
     *
     * @access private
     * @var Integer
     */
    public function get_control_warning()
    {
      return $this->control_warning;
    }

    /**
     * Short description of attribute control_info
     *
     * @access private
     * @var Integer
     */
    public function set_control_info($control_info)
    {
      $this->control_info = $control_info;
    }

    /**
     * Short description of attribute control_info
     *
     * @access private
     * @var Integer
     */
    public function get_control_info()
    {
      return $this->control_info;
    }

    /**
     * Short description of attribute watch_entity
     *
     * @access protected
     * @var Integer
     */
    public function set_watch_entity($watch_entity)
    {
      $this->watch_entity = $watch_entity;
    }

    /**
     * Short description of attribute watch_entity
     *
     * @access protected
     * @var Integer
     */
    public function get_watch_entity()
    {
      return $this->watch_entity;
    }

    /**
     * Short description of attribute watched_entity
     *
     * @access protected
     * @var Integer
     */
    public function set_watched_entity($watched_entity)
    {
      $this->watched_entity = $watched_entity;
    }

    /**
     * Short description of attribute watched_entity
     *
     * @access protected
     * @var Integer
     */
    public function get_watched_entity()
    {
      return $this->watched_entity;
    }

    /**
     * Short description of attribute watch_relation
     *
     * @access protected
     * @var Integer
     */
    public function set_watch_relation($watch_relation)
    {
      $this->watch_relation = $watch_relation;
    }

    /**
     * Short description of attribute watch_relation
     *
     * @access protected
     * @var Integer
     */
    public function get_watch_relation()
    {
      return $this->watch_relation;
    }
    // --- OPERATIONS ---

} /* end of class basic_view */

?>