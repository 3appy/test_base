<?php

error_reporting(E_ALL);

/**
 * // select your language
 * 5->24
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
// section 10-5-25-11-53c52816:13cfe21cbec:-8000:0000000000000CBF-includes begin
// section 10-5-25-11-53c52816:13cfe21cbec:-8000:0000000000000CBF-includes end

/* user defined constants */
// section 10-5-25-11-53c52816:13cfe21cbec:-8000:0000000000000CBF-constants begin
// section 10-5-25-11-53c52816:13cfe21cbec:-8000:0000000000000CBF-constants end

/**
 * // select your language
 * 5->24
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class A24_view
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
     $this->load_language("a24");
    }
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @version 1.0
     */
     /*NEW*/
    public function get_column3_content()
    {
     $language_array = $this->get_language_array();
     $german = "../../view/language/flag/german.png";
     $english = "../../view/language/flag/english.png";
     $danish = "../../view/language/flag/danish.png";
     
     $column3_content =  "" .
     "<a href=\"" . $_SESSION['A_control_base'] .
     "A24_post_ge_frame.php" . "\">" .
     "<img src=\"" . $german . "\"/>" . "</a> ".
     "<a href=\"" . $_SESSION['A_control_base'] .
     "A24_post_en_frame.php" . "\">" .
     "<img src=\"" . $english . "\"/>" . "</a> ".
     "<a href=\"" . $_SESSION['A_control_base'] .
     "A24_post_da_frame.php" . "\">" .
     "<img src=\"" . $danish . "\"/>" . "</a> ";
     return $column3_content;
    }
}?>