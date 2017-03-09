<?php

error_reporting(E_ALL);

/**
 * // contact form
 * from ? -> 25
 *
 * @author Bernd Schröder
 * @version 1.0
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
// section 10-5-25-11-53c52816:13cfe21cbec:-8000:0000000000000C9E-includes begin
// section 10-5-25-11-53c52816:13cfe21cbec:-8000:0000000000000C9E-includes end

/* user defined constants */
// section 10-5-25-11-53c52816:13cfe21cbec:-8000:0000000000000C9E-constants begin
// section 10-5-25-11-53c52816:13cfe21cbec:-8000:0000000000000C9E-constants end

/**
 * // contact form
 * from ? -> 25
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class A25_view
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
     parent::__construct();
     $this->load_language("a25");
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
     $this->get_contact_form() ;
     return $column3_content;
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_contact_form()
    {
     $language_array = $this->get_language_array();
     $message_form = "" .
     "<form method=\"post\" action=\"" . $_SESSION['A_control_base'] .
     "A25_post_frame.php" .
     "\"]\" id=\"demo-form1\"" .
     "class=\"ym-form linearize-form\" role=\"application\">" .

     "<div class=\"ym-fbox-text\">" .
     "<label for=\"name\">" . $language_array['C3_name'] .
     "<sup class=\"ym-required\"" .
     "title=\"This field is mandatory.\">*</sup></label>" .
     "<input type=\"text\" name=\"name\"" .
     "id=\"name\" size=\"20\"  aria-required=\"true\"/>" .
     "</div>" .

     "<div class=\"ym-fbox-text\">" .
     "<label for=\"mail\">" .
     $language_array['C3_mail'] . "</label>" .
     "<input type=\"text\"" .
     "name=\"mail\" id=\"mail\" size=\"20\" />" .
     "</div>" .

     "<div class=\"ym-fbox-text\">" .
     "<label for=\"mail\">" .
     $language_array['C3_number'] . "</label>" .
     "<input type=\"number\"" .
     "name=\"number\" id=\"number\" size=\"20\" />" .
     "</div>" .

     "<div class=\"ym-fbox-text\">" .
     "<label for=\"message\">" .
     $language_array['C3_text'] . "</label>" .
     "<textarea name=\"message\"" .
     "id=\"message\" rows=\"3\"></textarea>" .
     "</div>" .

     "<div class=\"ym-fbox-button\">" .
     "<input type=\"submit\" value=\"" .
     $language_array['C3_send_button'] . "\" " .
     "class=\"save\" id=\"submit\" name=\"submit\" />" .
     "<input type=\"reset\" value=\"" .
     $language_array['C3_reset_button'] . "\" " .
     "class=\"delete\" id=\"reset\" name=\"reset\" />" .
     "</div>" .

     "</form>";
     return $message_form;
    }
}?>