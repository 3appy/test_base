<?php

/**
 * This php file is automatically generated by Skolenet
 * Model - Class: image_link
 */

if (0 > version_compare(PHP_VERSION, '5'))
{ die('This file was generated for PHP 5'); }


class generated_image_link
{
    // --- ATTRIBUTES ---

    /**
     * Short description of attribute item
     *
     * @access private
     * @var Integer
     */
    private $item = null;

    /**
     * Short description of attribute function_id
     *
     * @access private
     * @var Integer
     */
    private $function_id = null;

    /**
     * Short description of attribute frame
     *
     * @access private
     * @var String
     */
    private $frame = null;

    /**
     * Short description of attribute post_frame
     *
     * @access public
     * @var String
     */
    public $post_frame = null;

     // --- OPERATIONS ---

    /**
     * Short description of attribute item
     *
     * @access private
     * @var Integer
     */
    public function set_item($item)
    {
      $this->item = $item;
    }

    /**
     * Short description of attribute item
     *
     * @access private
     * @var Integer
     */
    public function get_item()
    {
      return $this->item;
    }

    /**
     * Short description of attribute function_id
     *
     * @access private
     * @var Integer
     */
    public function set_function_id($function_id)
    {
      $this->function_id = $function_id;
    }

    /**
     * Short description of attribute function_id
     *
     * @access private
     * @var Integer
     */
    public function get_function_id()
    {
      return $this->function_id;
    }

    /**
     * Short description of attribute frame
     *
     * @access private
     * @var String
     */
    public function set_frame($frame)
    {
      $this->frame = $frame;
    }

    /**
     * Short description of attribute frame
     *
     * @access private
     * @var String
     */
    public function get_frame()
    {
      return $this->frame;
    }

    /**
     * Short description of attribute post_frame
     *
     * @access public
     * @var String
     */
    public function set_post_frame($post_frame)
    {
      $this->post_frame = $post_frame;
    }

    /**
     * Short description of attribute post_frame
     *
     * @access public
     * @var String
     */
    public function get_post_frame()
    {
      return $this->post_frame;
    }

} /* end of class image_link */
?>