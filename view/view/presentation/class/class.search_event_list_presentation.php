<?php

error_reporting(E_ALL);

/**
 * The search_event_list_presentation is presented the founded events that fit
 * the search criteria.
 *
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * The event_list_presentation is presented from the right vertical menu, where
 * events are showed in relation to menu.
 *
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('../../view/presentation/function/class.func_standard_table_presentation.php');
require_once('../../view/presentation/class/class.event_list_presentation.php');

/* user defined includes */
// section 127-0-0-1-63ab2417:1448eafff3b:-8000:0000000000000AF6-includes begin
// section 127-0-0-1-63ab2417:1448eafff3b:-8000:0000000000000AF6-includes end

/* user defined constants */
// section 127-0-0-1-63ab2417:1448eafff3b:-8000:0000000000000AF6-constants begin
// section 127-0-0-1-63ab2417:1448eafff3b:-8000:0000000000000AF6-constants end

/**
 * The search_event_list_presentation is presented the founded events that fit
 * the search criteria.
 *
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class search_event_list_presentation
    extends event_list_presentation
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_header()
    {
     $model = $this->get_list_model();
     $count = $model->get_item_count();
     return
     "<h6 class=\"ym-fbox-heading\">" .
     $this->get_language()['C3_form_header_event'] .
     " " . $count .  " " .
     $this->get_language()['C3_found'] .
     "</h6>";
    }
}?>