<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.three_column_basic_view.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 29.06.2016, 19:45:02 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include basic_basic_view
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('basic/class.basic_view.php');

/* user defined includes */
// section 10-30-8-122--61a98f16:13b2cc0e3f0:-8000:0000000000000FE5-includes begin
// section 10-30-8-122--61a98f16:13b2cc0e3f0:-8000:0000000000000FE5-includes end

/* user defined constants */
// section 10-30-8-122--61a98f16:13b2cc0e3f0:-8000:0000000000000FE5-constants begin
// section 10-30-8-122--61a98f16:13b2cc0e3f0:-8000:0000000000000FE5-constants end

/**
 * Short description of class three_column_basic_view
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class three_column_basic_view
    extends basic_view
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author Bernd Schröder
     * @param  basic_entitiy
     * @version 1.0
     */
    public function __construct($basic_entitiy)
    {
     require_once('../../../data/class.member.php');
     
     $this->load_database_error();
     $this->load_database_warning();
     $this->load_control_error();
     $this->load_control_info();
     $this->load_control_warning();
     
     $this->watch_entity = new member();
     if ( $this->watch_entity->is_online() )
     {
     $this->watch_entity->set_id($_SESSION['watch_id']);
     $this->watch_entity->load();
     }
     else if(isSet($_COOKIE["lang"]))
     { $this->watch_entity->set_language($_COOKIE["lang"]); }
     else
     { 
     $language = $this->watch_entity->get_remote_language(); 
     $this->watch_entity->set_language($language);
     }
     
     $this->watched_entity = $basic_entitiy;
     if (( $this->watched_entity != null ) AND 
     (isset($_SESSION['watched_id'])))
     {
     $this->watched_entity->set_id($_SESSION['watched_id']);
     $this->watched_entity->load();
     }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_database_error()
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'generated/class.db_error.php');
     
     $this->database_error = new db_error();
     $this->database_error->load();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_database_warning()
    {
     if( defined('__ROOT_DATA__') == FALSE )
     { define('__ROOT_DATA__', $this->get_root_data() ); }
     require_once(__ROOT_DATA__.'generated/class.db_warning.php');
     
     $this->database_warning = new db_warning();
     $this->database_warning->load();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_control_error()
    {
     if( defined('__ROOT_CONTROL__') == FALSE )
     { define('__ROOT_CONTROL__', $this->get_root_control() ); }
     require_once(__ROOT_CONTROL__.'basic/class.control_error.php');
     
     $this->control_error = new control_error();
     $this->control_error->load();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_control_warning()
    {
     if( defined('__ROOT_CONTROL__') == FALSE )
     { define('__ROOT_CONTROL__', $this->get_root_control() ); }
     require_once(__ROOT_CONTROL__.'basic/class.control_warning.php');
     
     $this->control_warning = new control_warning();
     $this->control_warning->load();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_control_info()
    {
     if( defined('__ROOT_CONTROL__') == FALSE )
     { define('__ROOT_CONTROL__', $this->get_root_control() ); }
     require_once(__ROOT_CONTROL__.'basic/class.control_info.php');
     
     $this->control_info = new control_info();
     $this->control_info->load();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  language_prefix
     */
    public function load_language($language_prefix)
    {
     require_once 'language/'. $this->watch_entity->get_language() .
     '/' . $language_prefix . '.php';
     $this->set_language_array( $lang );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_Session_error_information()
    {
     $control_error    = $this->control_error->get_error_code();
     $database_error   = $this->database_error->get_error_code();
     $database_warning = $this->database_warning->get_error_code();
     $control_warning  = $this->control_warning->get_error_code();
     $control_info     = $this->control_info->get_error_code();
     
     $result  = "";
     $language = $this->watch_entity->get_language();
     
     if ( $control_error > 0 )
     {
     require('language/'. $language . '/general/control_error.php');
     $result  .= "<p class=\"box error\"><img src=\"".
     $_SESSION['icons'] . "error.png\"/>" .
     "<b>" . $control_lang['control_error_'. 0] . ":</b>" . "<br />" .
     $control_lang['control_error_'. $control_error] . "</p>";
     }
     elseif ( $control_warning > 0 )
     {
     require('language/'. $language . '/general/control_warning.php');
     $result  .= "<p class=\"box warning\"><img src=\"".
     $_SESSION['icons'] . "warning.png\"/>" .
     "<b>" . $control_lang['control_warning_'. 0] . ":</b>" . "<br />" .
     $control_lang['control_warning_'. $control_warning] . "</p>";
     }
     elseif ( $control_info > 0 )
     {
     require('language/'. $language . '/general/control_info.php');
     $result  .= "<p class=\"box info\"><img src=\"".
     $_SESSION['icons'] . "info.png\"/>" .
     "<b>" . $control_lang['control_info_'. 0] . ":</b>" . "<br />" .
     $control_lang['control_info_'. $control_info] . "</p>";
     }
     if ( $database_error > 0 )
     {
     require('language/'. $language . '/general/database_error.php');
     $result  .= "<p class=\"box error\"><img src=\"".
     $_SESSION['icons'] . "error.png\"/>" .
     "<b>" . $database_lang['database_error_'. 0] . ":</b>" . "<br />" .
     $database_lang['database_error_'. $database_error] . "</p>";
     }
     elseif ( $database_warning > 0 )
     {
     require('language/' . $language . '/general/database_warning.php');
     $result  .= "<p class=\"box warning\"><img src=\"".
     $_SESSION['icons'] . "warning.png\"/>" .
     "<b>" . $database_lang['database_warning_'. 0] . ":</b>" . "<br />" .
     $database_lang['database_warning_'. $database_warning] . "</p>";
     }
     return $result;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_top_navigation()
    {
     $navigation_content = "";
     if (isset($_SESSION['watched_id']))
     {
     $navigation_list =
     $this->watched_entity->get_top_navigation_list();
     $count = $navigation_list->get_item_count();
     
     if ($count > 0)
     {
     $navigation_content = "<ul>";
     for ($i = 0; $i < $count; $i++)
     {
     $item = $navigation_list->get_item( $i );
     $amount = $item->get_validate_value( $this->watched_entity );
     
     if( $item->get_always_visible() )
     {
     $amount_string = "";
     if( $item->get_show_value() )
     { $amount_string = "<span class=\"label\">" . $amount . "</span>"; }
     
     $navigation_content = $navigation_content .
     "<li><a href=\"" .
     $_SESSION[$item->get_link() . '_control_base'] .
     $item->get_link() .   
     "_post_frame.php?function=" .
     $item->get_id() . "\">" .
     $this->language_array[$item->get_text()] .
     $amount_string .
     "</a></li>";
     }
     else
     {
     if( $amount > (int)0 )
     {
     $amount_string = "<span class=\"label\">" . $amount . "</span>";
     $navigation_content = $navigation_content .
     "<li><a href=\"" .
     $_SESSION[$item->get_link() . '_control_base'] .
     $item->get_link() .
     "_post_frame.php?function=" .
     $item->get_id() . "\">" .
     $this->language_array[$item->get_text()] .
     $amount_string .
     "</a></li>";
     }
     }
     }
     $navigation_content = $navigation_content .
     "</ul>" ;
     }
     }
     return $navigation_content;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_root_control()
    {
     return dirname(dirname(dirname(__FILE__))) . '/control/';
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_root_data()
    {
     return dirname(dirname(dirname(__FILE__))) . '/data/';
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_root_view()
    {
     return dirname(dirname(dirname(__FILE__))) . '/view/';
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_root_view_form()
    {
     return 
     dirname(dirname(dirname(__FILE__))) . 
     '/view/view/yaml_forms/';
    }

    public function get_root_view_control()
    {
     return
     dirname(dirname(dirname(__FILE__))) .
     '/view/view/yaml_controls/';
    }
    
    public function get_root_view_presentation()
    {
     return
     dirname(dirname(dirname(__FILE__))) .
     '/view/view/presentation/';
    }
    
}?>