<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.team_article_list_XXX.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 27.01.2015, 15:55:18 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_team_article_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_team_article_list.php');

/* user defined includes */
// section 10-5-25-74--4ddd1070:14b1249641a:-8000:0000000000006724-includes begin
// section 10-5-25-74--4ddd1070:14b1249641a:-8000:0000000000006724-includes end

/* user defined constants */
// section 10-5-25-74--4ddd1070:14b1249641a:-8000:0000000000006724-constants begin
// section 10-5-25-74--4ddd1070:14b1249641a:-8000:0000000000006724-constants end

/**
 * Short description of class team_article_list_XXX
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class team_article_list_XXX
    extends generated_team_article_list
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute team_list
     *
     * @access public
     * @var Integer
     */
    public $team_list = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function set_binding()
    {
     $params = array();
     
     for ( $n=0; $n < $this->team_list->get_item_count(); $n++ )
     {
     $team = $this->team_list->get_item($n);
     $params[$n] = $team->get_id();
     }
     
     $params = array_merge(array(str_repeat('i', count($params))),
     array_values($params));
     call_user_func_array(array(&$this->stmt, 'bind_param'),
     $this->makeValuesReferenced($params));
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load()
    {
     $where_statement =
     "WHERE" . " " .
     implode(" OR ", $this->fragments) .
     " " . "ORDER BY written_stamp DESC";
     return $this->list_load( $where_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  arr
     */
    public function makeValuesReferenced($arr)
    {
     $refs = array();
     foreach($arr as $key => $value)
     $refs[$key] = &$arr[$key];
     return $refs;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function set_fragments()
    {
     for($i = 0; $i < $this->team_list->get_item_count(); $i++)
     { $this->fragments[$i] = "owner_id=?"; }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  team_list
     */
    public function set_team_list($team_list)
    {
     $this->team_list = $team_list;
    }
}?>