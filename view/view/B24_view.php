<?php

error_reporting(E_ALL);

/**
 * // 24 select your language
 * // for the main server -> to the member model
 * // copy from A3
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
// section -64--88--78-21-467d1499:1424322966b:-8000:0000000000001203-includes begin
// section -64--88--78-21-467d1499:1424322966b:-8000:0000000000001203-includes end

/* user defined constants */
// section -64--88--78-21-467d1499:1424322966b:-8000:0000000000001203-constants begin
// section -64--88--78-21-467d1499:1424322966b:-8000:0000000000001203-constants end

/**
 * // 24 select your language
 * // for the main server -> to the member model
 * // copy from A3
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class B24_view
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
     $this->load_language("b24");
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
    public function get_column3_content()
    {
     $language_array = $this->get_language_array();
     $german = "../../view/language/flag/german.png";
     $english = "../../view/language/flag/english.png";
     $danish = "../../view/language/flag/danish.png";
     
     $column3_content =  "" .
     "<p>" . $language_array['C3_1'] . "</p>" .
     
     "<a href=\"" . $_SESSION['B_control_base'] .
     "B24_post_ge_frame.php" . "\">" .
     "<img src=\"" . $german . "\"/>" . "</a> ".
     "<a href=\"" . $_SESSION['B_control_base'] .
     "B24_post_en_frame.php" . "\">" .
     "<img src=\"" . $english . "\"/>" . "</a> ".
     "<a href=\"" . $_SESSION['B_control_base'] .
     "B24_post_da_frame.php" . "\">" .
     "<img src=\"" . $danish . "\"/>" . "</a> ";
     return $column3_content;
    }
}?>