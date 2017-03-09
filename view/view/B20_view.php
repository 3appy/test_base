<?php

error_reporting(E_ALL);

/**
 * //20 password change
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

/* user defined includes */
// section -64--88--78-21-3afc44d4:142385ed04f:-8000:0000000000001B49-includes begin
// section -64--88--78-21-3afc44d4:142385ed04f:-8000:0000000000001B49-includes end

/* user defined constants */
// section -64--88--78-21-3afc44d4:142385ed04f:-8000:0000000000001B49-constants begin
// section -64--88--78-21-3afc44d4:142385ed04f:-8000:0000000000001B49-constants end

/**
 * //20 password change
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class B20_view
    extends B_view
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
     parent::__construct();
     $this->load_language("b20");
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
     $this->get_change_password_form() ;
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_change_password_form()
    {
     $language_array = $this->get_language_array();
     $change_password_form = "" .
     "<form method=\"post\" action=\"" . $_SESSION['B_control_base'] .
     "B20_post_frame.php" . "\"]\"" .
     "id=\"demo-form1\" class=\"ym-form ym-columnar linearize-form\"" .
     "role=\"application\">" .
     
     "<h3>" .
     $language_array['C3_form_header'] .
     "</h3>" .
     "<br />" .
     
     "<div class=\"ym-fbox-text\">" .
     "<label for=\"old_password\">" . 
     $language_array['C3_old_password'] . "</label>" .
     "<input type=\"text\" name=\"old_password\"" .
     "id=\"old_password\" size=\"20\" />" .
     "</div>" .
     
     "<div class=\"ym-fbox-text\">" .
     "<label for=\"new_password1\">" . $language_array['C3_new_password1'] .
     "<sup class=\"ym-required\" title=\"" .
     "This field is mandatory.\">*</sup></label>" .
     "<input type=\"password\" name=\"new_password1\"" .
     "id=\"new_password1\" size=\"20\"  aria-required=\"true\"/>" .
     "</div>" .
     
     "<div class=\"ym-fbox-text\">" .
     "<label for=\"new_password2\">" . $language_array['C3_new_password2'] .
     "<sup class=\"ym-required\" title=\"" .
     "This field is mandatory.\">*</sup></label>" .
     "<input type=\"password\" name=\"new_password2\"" .
     "id=\"new_password2\" size=\"20\"  aria-required=\"true\"/>" .
     "</div>" .
     $this->get_send_reset_button(
     $language_array['C3_send_button'],
     $language_array['C3_reset_button'] ) .
     "</form>";
     return $change_password_form;
    }
}?>