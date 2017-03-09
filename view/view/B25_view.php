<?php

error_reporting(E_ALL);

/**
 * // 25 contact form
 * // copy from A2
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
// section -64--88--78-21-467d1499:1424322966b:-8000:0000000000001229-includes begin
// section -64--88--78-21-467d1499:1424322966b:-8000:0000000000001229-includes end

/* user defined constants */
// section -64--88--78-21-467d1499:1424322966b:-8000:0000000000001229-constants begin
// section -64--88--78-21-467d1499:1424322966b:-8000:0000000000001229-constants end

/**
 * // 25 contact form
 * // copy from A2
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class B25_view
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
     $this->load_language("b25");
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
     "<form method=\"post\" action=\"" . $_SESSION['B_control_base'] .
     "B25_post_frame.php" .
     "\"]\" id=\"demo-form1\"" .
     "class=\"ym-form linearize-form\" role=\"application\">" .
     
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