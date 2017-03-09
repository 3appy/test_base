<?php

error_reporting(E_ALL);

/**
 * // 39 show nasty_word_form
 * require_once('class.B_view.php');
 * require_once('presentation/class/class.nasty_word_list_presentation.php');
 * require_once('form_controls/class.nasty_word_form.php');
 * require_once('../../../data/class.nasty_word_list.php');
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * The B - view is the basis of all views where the watched entity is of an
 * of a member:
 *
 * @author Bernd Schröder
 * @version 1.0
 */
require_once('class.B_view.php');
require_once('presentation/class/class.nasty_word_list_presentation.php');
require_once('form_controls/class.nasty_word_form.php');
require_once('../../../data/class.forbidden_word_list.php');
//require_once('../../../data/class.nasty_word_list.php');

/* user defined includes */
// section -64--88--78-21-636c6fb7:142af67cc19:-8000:00000000000021A8-includes begin
// section -64--88--78-21-636c6fb7:142af67cc19:-8000:00000000000021A8-includes end

/* user defined constants */
// section -64--88--78-21-636c6fb7:142af67cc19:-8000:00000000000021A8-constants begin
// section -64--88--78-21-636c6fb7:142af67cc19:-8000:00000000000021A8-constants end

/**
 * // 39 show nasty_word_form
 * require_once('class.B_view.php');
 * require_once('presentation/class/class.nasty_word_list_presentation.php');
 * require_once('form_controls/class.nasty_word_form.php');
 * require_once('../../../data/class.nasty_word_list.php');
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class B39_view
    extends B_view
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function __construct()
    {
     parent::__construct();
     $this->load_language("b39");
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_column3_content()
    {
     $column3_content =  "" .
     $this->get_nasty_word_form() .
     $this->get_nasty_word_list();
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_nasty_word_form()
    {
     $language_array = $this->get_language_array();
     $action = $_SESSION['B_control_base'] . "B39_post_frame.php";
     $nasty_word_form = new nasty_word_form($action);
     
     $nasty_word_form->set_language($language_array);
     $nasty_word_form->set_header( $language_array['C3_form_header'] );
     return $nasty_word_form->get_form();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_nasty_word_list()
    {
     $model = new forbidden_word_list();
     $model->load();
     $language = $this->get_language_array();
     $form = new nasty_word_list_presentation( $model, $language );
     $form->define_table();
     return $form->get_form();
    }
}?>