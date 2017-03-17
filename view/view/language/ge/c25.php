<?php
/*
------------------
Language: German
------------------
*/

// Ü = &#220
// ü = &#252
// Ö = &#214
// ö = &#246
// Ä = &#196
// ä = &#228
// ß = &#223
// § = &#167
// € = &#128

$lang = array();

require('menue_includes/top_menue.php');
require('menue_includes/C_left_menue.php');
require('menue_includes/C_top_menue.php');
require('menue_includes/C_right_menue.php');
require('general/send_receive_button.php');

$lang['C3_form_header']   = 'Exportiere CSV-Datei';
$lang['C3_0_1']           =
'<br />Eine CSV ( comma seperated values ) Datei ist eine einfache Textdatei, bei der die Werte einfach durch Semikolons getrennt sind.
Du kannst den Status deiner Organisation einfach in eine CSV Datei herauslesen. Diese wird in deinem pers&#246nlichem Profil gespeichert.
Diese Datei kannst du dann so ver&#228ndern, bis sie deiner gew&#252nschten Organisation enspricht. &#220ber den CSV Import kannst du sie
wieder einlesen. Alle &#196nderungen werden dann auf der Datenbank nachgezogen.';


$lang['C3_1_0']           = 'Exportiere Schulstruktur';
$lang['C3_1_1']           = 'Alle Klassen, F&#228cher, Eltern- und Lehrergruppen werden hier exportiert. Du findest die Datei in deinem 
                             pers&#246nlichem Profil unter dem Namen: schoolstructure_';

/***********************************************************************/

$lang['C3_2_0']           = 'Exportiere R&#228ume';
$lang['C3_2_1']           = 'Alle R&#228ume der Schule werden hier exportiert. Du findest die Datei in deinem
                             pers&#246nlichem Profil unter dem Namen: room_';

/***********************************************************************/

$lang['C3_3_0']           = 'Exportiere Stundenpl&#228ne';
$lang['C3_3_1']           = 'Alle Schulstunden der einzelnen F&#228cher werden hier exportiert. Du findest die Datei in deinem
                             pers&#246nlichem Profil unter dem Namen: timetable_';

/***********************************************************************/

$lang['C3_4_0']           = 'Exportiere Mitglieder';
$lang['C3_4_1']           = 'Alle Mitglieder ( Lehrer, Sch&#252ler, Eltern, ... ) werden hier exportiert. Du findest die Datei in deinem
                             pers&#246nlichem Profil unter dem Namen: member_';

/***********************************************************************/

$lang['C3_5_0']           = 'Exportiere Lehrer-Gruppen Verbindungen';
$lang['C3_5_1']           = 'Alle Verbindungen der Administratoren (Schulpersonal) zu Gruppen werden hier exportiert. Du findest die Datei in deinem
                             pers&#246nlichem Profil unter dem Namen: adm_team_con_';

/***********************************************************************/

$lang['C3_6_0']           = 'Exportiere Mitglieder-Gruppen Verbindungen';
$lang['C3_6_1']           = 'Alle Verbindungen der Mitglieder (Eltern, Sch&#252ler) zu Gruppen werden hier exportiert. Du findest die Datei in deinem
                             pers&#246nlichem Profil unter dem Namen: member_team_con.';

/***********************************************************************/

$lang['C3_7_0']           = 'Exportiere Mitglieder-Mitglieder Verbindungen';
$lang['C3_7_1']           = 'Alle Verbindungen von Eltern zu Sch&#252lern werden hier exportiert. Du findest die Datei in deinem
                             pers&#246nlichem Profil unter dem Namen: member_member_con_';
?>