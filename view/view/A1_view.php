<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.A1_view.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 13.03.2013, 16:15:46 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * The a - view is the basis of all views where the is no watched entity:
 *
 * @author Bernd Schröder
 * @version 1.0
 */
require_once('class.A_view.php');

/* user defined includes */
// section -64--88--78-21-438a7c36:13cbb0d4b36:-8000:0000000000000AFD-includes begin
// section -64--88--78-21-438a7c36:13cbb0d4b36:-8000:0000000000000AFD-includes end

/* user defined constants */
// section -64--88--78-21-438a7c36:13cbb0d4b36:-8000:0000000000000AFD-constants begin
// section -64--88--78-21-438a7c36:13cbb0d4b36:-8000:0000000000000AFD-constants end

/**
 * Short description of class A1_view
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class A1_view
    extends A_view
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function __construct()
    {
     unset($_SESSION['online']);
     unset($_SESSION['watch_id']);
     parent::__construct();
     $this->load_language("a1");
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_column3_content()
    {
     $column3_content =  "" .
     $this->get_login_form() ;
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
     
    public function get_login_form()
    {
     $language_array = $this->get_language_array();
     $login_content =  "" .
     "<form method=\"post\" action=\"" . $_SESSION['A_control_base'] .  /*NEW*/
     "A1_post_frame.php" .
     "\"]\" id=\"demo-form1\"" .
     "class=\"ym-form ym-full linearize-form\" role=\"application\">" .
     "<div class=\"ym-fbox-text\">" .
     "<h3>" .
     $language_array['C2_login'] .
     "<img src=\"../../view/images/icons/lock.png\" />" .
     "</h3>" .
     "<br />" .
     "<div class=\"ym-fbox-text\">" .
     "<label for=\"mail\">" . $language_array['C2_email'] . "</label>" .
     "<input type=\"text\" name=\"mail\" id=\"mail\" size=\"20\" />" .
     "</div>" .
     "<div class=\"ym-fbox-text\">" .
     "<label for=\"password\">" . $language_array['C2_password'] .
     "<sup class=\"ym-required\" title=\"" .
     "This field is mandatory.\">*</sup></label>" .
     "<input type=\"password\" name=\"password\"" .
     "id=\"password\" size=\"20\"  aria-required=\"true\"/>" .
     "</div>" .
     $this->get_blue_link_A( (int)3, $language_array['C2_forgott_password'] ) .
     "<br /><br />" .
     $this->get_blue_link_A( (int)2, $language_array['C2_register_link'] ) .
     "</div>" .
     
     "<div class=\"ym-fbox-check\">" .
     "<input type=\"checkbox\" name=\"remember\" id=\"newsletter\" />" .
     "<label for=\"newsletter\">" .
     $language_array['C2_remember'] . "</label>" .
     "</div>" .
     
     "<div class=\"ym-fbox-button\">" .
     "<input type=\"submit\" value=\"" .
     $language_array['C2_login_button'] .
     "\"  class=\"save\" id=\"submit\" name=\"submit\" />" .
     "</div>" .
     
     "</form>";
     return $login_content;
    }
}?>