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

$lang['C3_form_header']   = 'Export CSV-fil';
$lang['C3_0_1']           =
'<br />En CSV (kommaseparerede v&#230rdier) fil er en simpel tekstfil, hvor v&#230rdierne er simpelthen adskilt af semikoloner.
Du kan hente status af din organisation blot l&#230se i en CSV-fil. Dette gemmes i din personlige profil.
Du kan derefter &#230ndre det, indtil den svarer til den organisation du &#248nsker. Igennem CSV import kunne du 
l&#230se CSV-filen ind igen. Alle &#230ndringer vil blive &#230ndret i databasen.';


$lang['C3_1_0']           = 'Eksport skolestruktur';
$lang['C3_1_1']           = 
'Alle klasser, fag, for&#230ldre og l&#230rer grupper eksporteres her. Du kan finde filen i din personlige profil 
under navnet: schoolstructure_';

/***********************************************************************/

$lang['C3_2_0']           = 'Eksport v&#230relser';
$lang['C3_2_1']           = 
'Samtlige v&#230relser p&#229 skolen eksporteres her. Du kan finde filen i dit personlige profil under navnet: room_';

/***********************************************************************/

$lang['C3_3_0']           = 'Eksport timeplaner';
$lang['C3_3_1']           = 
'Alle timer af de enkelte fag, eksporteres her. Du kan finde filen i din personlige profil under navnet: timetable_';

/***********************************************************************/

$lang['C3_4_0']           = 'Eksport medlemmer';
$lang['C3_4_1']           = 
'Alle medlemmer (l&#230rere, elever, for&#230ldre, ...) vil blive eksporteret her. 
Du kan finde filen i din personlige profil under navnet: member_';

/***********************************************************************/

$lang['C3_5_0']           = 'Eksport l&#230rer-grupper forbindelser';
$lang['C3_5_1']           = 
'Alle forbindelser af administratorerne (skole personale) til grupperne vil blive eksporteret her. 
Du kan finde filen i din personlige profil under navnet: adm_team_con_';

/***********************************************************************/

$lang['C3_6_0']           = 'Eksport medlem-grupper forbindelser';
$lang['C3_6_1']           = 
'Alle forbindelser af medlemmerne (for&#230ldre, elever), til grupperne vil blive eksporteret her. 
Du kan finde filen i din personlige profil under navnet: member_team_con.';

/***********************************************************************/

$lang['C3_7_0']           = 'Eksport medlemmer-medlemmer forbindelser';
$lang['C3_7_1']           = 
'Alle forbindelser fra for&#230ldre til elever vil blive eksporteret her. 
Du kan finde filen i din personlige profil under navnet: member_member_con_';
?>