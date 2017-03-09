<?php
/*
------------------
Language: Danish
------------------
*/

// Æ = &#198
// æ = &#230
// Å = &#197
// å = &#229
// Ø = &#216
// ø = &#248

$lang = array();

require('menue_includes/top_menue.php');
require('menue_includes/C_left_menue.php');
require('menue_includes/C_top_menue.php');
require('menue_includes/C_right_menue.php');
require('general/send_receive_button.php');

$lang['C3_form_header']        = 'skrive en kommentar til artiklen: ';
$lang['C3_text']               = 'Din kommentar';

$lang['C3_written_by']         = 'annonceret af ';
$lang['C3_at']                 = ' den ';
$lang['C3_show_all_comments']  = 'vis alle kommentar:';
$lang['C3_write_a_comment']    = 'skriv en kommentar...';

$lang['C3_addfile']            = 'Tilf&#248j en fil til artiklen';
$lang['C3_userfile_disk']      = 'Fil fra computeren';
$lang['C3_userfile_profile']   = 'Tilf&#248j en fil fra din profil';

$lang['C3_link_selection']     = 'Definere filen';
$lang['C3_link1']              = 'Tilf&#248j et billede';
$lang['C3_link2']              = 'Tilf&#248j et dokument';
$lang['C3_link3']              = 'Tilf&#248j en video';

$lang['C3_ask_delete_article'] = 'Ville du slette denne artikel? \n Alle kommentarer bliver ogs&#229 slettet.';
$lang['C3_delete_article']     = 'slette denne artikel';
$lang['C3_ask_delete_comment'] = 'Ville du slette denne kommentar?';
$lang['C3_delete_comment']     = 'delete denne kommentar';
?>
