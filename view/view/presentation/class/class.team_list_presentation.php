<?php

error_reporting(E_ALL);

/**
 * The team_list_presentation is presented from the right vertical menu, where
 * teams are showed in relation to menu.
 *
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * require_once('../../../data/list/function/class.basic_list.php');
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('../../view/presentation/function/class.func_standard_table_presentation.php');

/* user defined includes */
// section 10-30-49-93-1ce7cdec:144734efde7:-8000:0000000000000AD1-includes begin
// section 10-30-49-93-1ce7cdec:144734efde7:-8000:0000000000000AD1-includes end

/* user defined constants */
// section 10-30-49-93-1ce7cdec:144734efde7:-8000:0000000000000AD1-constants begin
// section 10-30-49-93-1ce7cdec:144734efde7:-8000:0000000000000AD1-constants end

/**
 * The team_list_presentation is presented from the right vertical menu, where
 * teams are showed in relation to menu.
 *
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class team_list_presentation
    extends func_standard_table_presentation
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function define_table_header()
    {
     $this->get_table_header_list()->add_item(
     $this->get_language()['C3_picture'] );
     $this->get_table_header_list()->add_item(
     $this->get_language()['C3_name'] );
     $this->get_table_header_list()->add_item(
     $this->get_language()['C3_up_team_name'] );
     $this->get_table_header_list()->add_item(
     $this->get_language()['C3_member_amount'] );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function define_table_element()
    {
     $model = $this->get_list_model();
     $count = $model->get_item_count();
     for ($i = 0; $i < $count; $i++)
     {
     $team = $model->get_item( $i );
     $line = new basic_list();
     $line->add_item( $team->get_avatar_icon() );
     $line->add_item( $team->get_link() );
     $line->add_item( $team->get_upteam_name() );
     $line->add_item( $team->get_member_list_count() );
     $this->get_table_element_list()->add_item( $line );
     }
    }
}?>