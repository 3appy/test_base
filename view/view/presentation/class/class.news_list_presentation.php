<?php

error_reporting(E_ALL);

/**
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

require_once('../../view/presentation/function/class.func_standard_table_presentation.php');

/* user defined includes */
// section 10-5-25--126--8f7a905:14c7437e539:-8000:0000000000002B25-includes begin
// section 10-5-25--126--8f7a905:14c7437e539:-8000:0000000000002B25-includes end

/* user defined constants */
// section 10-5-25--126--8f7a905:14c7437e539:-8000:0000000000002B25-constants begin
// section 10-5-25--126--8f7a905:14c7437e539:-8000:0000000000002B25-constants end

/**
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class news_list_presentation
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
     // date of upload
     $this->get_table_header_list()->add_item(
     $this->get_language()['C3_date'] );
     // text
     $this->get_table_header_list()->add_item(
     $this->get_language()['C3_function'] );
     // uploader link
     $this->get_table_header_list()->add_item(
     $this->get_language()['C3_uploader'] );
     // item link
     $this->get_table_header_list()->add_item(
     $this->get_language()['C3_gruppe'] );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function define_table_element()
    {
     date_default_timezone_set('Europe/Berlin');
     
     $today = new DateTime( "now" );
     $s_t =
     $today->format('d') . "." .
     $today->format('m') . "." .
     $today->format('Y');
     
     $yesterday = clone $today;
     $yesterday->modify( '-1 day' );
     $s_y =
     $yesterday->format('d') . "." .
     $yesterday->format('m') . "." .
     $yesterday->format('Y');
     
     $model = $this->get_list_model();
     $count = $model->get_item_count();
     
     for ($i = 0; $i < $count; $i++)
     {
     $news = $model->get_item( $i );
     $line = new basic_list();
     
     // date of upload
     $line->add_item( $this->get_upload_stamp( $news, $s_t, $s_y ) );
     // link to funktion
     $line->add_item( $this->get_function_link( $news ) );
     // uploader link
     $line->add_item( $news->get_uploader_link() );
     // item link
     $line->add_item( $news->get_item_link() );
     
     $this->get_table_element_list()->add_item( $line );
     }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  news
     * @param  s_today
     * @param  s_yesterday
     */
    public function get_upload_stamp($news, $s_today, $s_yesterday)
    {
     date_default_timezone_set('Europe/Berlin');
     $date = new datetime( $news->get_upload_stamp() );
     $return_date = "";
     
     $s_date =
     $date->format('d') . "." .
     $date->format('m') . "." .
     $date->format('Y');
     
     if( $s_date == $s_today )
     {$return_date = $this->get_language()['today'] . " " .
     $date->format('H') . ":" . $date->format('i');}
     
     elseif( $s_date == $s_yesterday )
     {$return_date = $this->get_language()['yesterday'] . " " .
     $date->format('H') . ":" . $date->format('i');}
     
     else
     {$return_date = $s_date;}
     
     return $return_date;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  news
     */
    public function get_function_link($news)
    {
     $fn = $news->get_function();
     
     if ( $fn == (int)500 )
     { $function = $this->get_message_link( $news ); }
     
     elseif(( $fn > (int)500 ) OR ( $fn <= (int)508 ))
     {
     if( $news->get_entity_group() == "t" )
     {$function = $this->get_team_spec_link( $news );}
     
     elseif ( $news->get_entity_group() == "e" )
     {$function = $this->get_event_spec_link( $news );}
     
     else
     {$function = "";}
     }
     
     else
     {$function = "";}
     
     if( $news->get_is_read() )
     return $function;
     else
     return "<b><big>" . $function . "</big></b>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  news
     */
    public function get_message_link($news)
    {
     return
     "<a href=\"" . 
     $_SESSION['B_control_base'] . "B_post_frame.php" .
     "?function=" . $news->get_function() .
     "&author_id=" . $news->get_uploader_id() .
     "&news_id=" . $news->get_id() . "\">" .
     $this->get_language()[$news->get_function()] . " ..." .
     "</a> ";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  news
     */
    public function get_team_spec_link($news)
    {
     $team_spec_link = "";
     
     // if this is a comment to show ?
     if( $news->get_function() == (int)505 )
     {
     $team_spec_link = "<a href=\"" .
     $_SESSION['C_control_base'] . "C_post_frame.php" .
     "?function=" . $news->get_function() .
     "&team_id=" . $news->get_entity_id() .
     "&article_id=" . $news->get_article_id() .
     "&news_id=" . $news->get_id() . "\">" .
     $this->get_language()[$news->get_function()] . " ..." .
     "</a> ";
     }
     else
     {
     $team_spec_link = "<a href=\"" .
     $_SESSION['C_control_base'] . "C_post_frame.php" .
     "?function=" . $news->get_function() .
     "&team_id=" . $news->get_entity_id() .
     "&news_id=" . $news->get_id() . "\">" .
     $this->get_language()[$news->get_function()] . " ..." .
     "</a> ";
     }
     return $team_spec_link;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  news
     */
    public function get_event_spec_link($news)
    {
     $event_spec_link = "";
     
     // if this is a comment to show ?
     if( $news->get_function() == (int)505 )
     {
     $event_spec_link = "<a href=\"" .
     $_SESSION['D_control_base'] . "D_post_frame.php" .
     "?function=" . $news->get_function() .
     "&event_id=" . $news->get_entity_id() .
     "&article_id=" . $news->get_article_id() .
     "&news_id=" . $news->get_id() . "\">" .
     $this->get_language()[$news->get_function()] . " ..." .
     "</a> ";
     }
     else
     {
     $event_spec_link = "<a href=\"" .
     $_SESSION['D_control_base'] . "D_post_frame.php" .
     "?function=" . $news->get_function() .
     "&event_id=" . $news->get_entity_id() .
     "&news_id=" . $news->get_id() . "\">" .
     $this->get_language()[$news->get_function()] . " ..." .
     "</a> ";
     }
     return $event_spec_link;
    }
}?>