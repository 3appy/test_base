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

$lang['C3_userfile_disk'] = 'Datei vom Computer';

$lang['C3_form_header']   = 'Importiere CSV-Datei';
$lang['C3_0_1']           =
'<br />Eine CSV ( comma seperated values ) ist eine einfache Textdatei, bei dem die Werte einfach durch Semikolons getrennt sind. Du kannst einen einfachen Editor
nehmen, oder du benutzt ein Tabellenkalkulations Programm und speichert die Datei als CSV ab. Wichtig ist, das der Aufbau der jeweiligen Beispieldatei identisch ist.
Werden Sonderzeichen verwendet, muss die Datei im UTF-8 Format gespeichert werden.';

$lang['C3_1_0']           = 'Importier Schulstruktur';
$lang['C3_1_1']           = 'Alle Klassen, F&#228cher, Eltern- und Lehrergruppen k&#246nnen hier importiert werden.';
$lang['C3_1_2']           = 
'<b>[ Obergruppe; Gruppe; Gruppentyp ]</b> <br /> 
Jede einzelne Gruppe muss einzelnd eingegeben werden. In diesem Beispiel besitzt die Gruppe Meine Schule 2 Untergruppen mit dem 
Namen Klasse1 und Klasse2, Klasse1 besitzt wiederum 2 Untergruppen mit dem Namen Mathe und Englisch. Wir unterscheiden 
zwischen einer organisatorischen Gruppe [2], und einer p&#228dagogischen Gruppe [3].<br /><br />
Die Datei, die du jetzt hochl&#228dst wird zus&#228tzlich in deinem Profil gespeichert.';

$lang['C3_1_3']           = 'Beispiel einer Schulstruktur csv - Datei';
$lang['C3_1_4']           = 
'Meine Schule;Klasse1;2
Meine Schule;Klasse2;2
Klasse1;Mathe;3
Klasse1;Englisch;3
';
$lang['C3_1_5_0']         = 'Probleme in der Linie: ';
$lang['C3_1_5_1']         = 'Deine Datei ergibt folgenden Inhalt: <b> Anzahl der erzeugten Objekte:</b> ';
$lang['C3_1_5_2']         = 
'<br /><br /> Durch erneutes Aktivieren des "Senden" Buttons werden die Objekte erzeugt und du wirst als Admin eingetragen.
Du kannst die bereits hochgeladene Datei nochmals im Textfeld ver&#228ndern, die &#196anderungen werden auch als Datei in 
deinem Profil gespeichert. Zus&#228tzlich wird eine log - Datei erstellt und auch in deinem Profil gespeichert.';
$lang['C3_1_6']           = 'Deine hochgeladene csv - Datei';

/***********************************************************************/
                                                                       
$lang['C3_2_0']           = 'Importier R&#228ume';
$lang['C3_2_1']           = 'Alle R&#228ume der Schule k&#246nnen hier importiert werden.';
$lang['C3_2_2']           =
'<b>[ Raum; Beschreibung ]</b><br />
Jeder Raum wird durch eine Kurzbezeichnung definiert. 
Diese Kurzbezeichnung wird sp&#228ter im Stundenplan mit angezeigt. <br /><br />
Die Datei, die du jetzt hochl&#228dst wird zus&#228tzlich in deinem Profil gespeichert.';

$lang['C3_2_3']           = 'Beispiel einer Raum csv - Datei';
$lang['C3_2_4']           =
'K1;Klassenraum der 1. Klasse
K2;Klassenraum der 2. Klasse
K3;Klassenraum der 3. Klasse
';
$lang['C3_2_5_0']         = 'Probleme in der Linie: ';
$lang['C3_2_5_1']         = 'Deine Datei ergibt folgenden Inhalt: <b> Anzahl der erzeugten Objekte:</b> ';
$lang['C3_2_5_2']         = '
<br /><br />
Du kannst die bereits hochgeladene Datei nochmals im Textfeld ver&#228ndern, die &#196anderungen werden auch als Datei in
deinem Profil gespeichert. Zus&#228tzlich wird eine log - Datei erstellt und auch in deinem Profil gespeichert.';
$lang['C3_2_6']           = 'Deine hochgeladene csv - Datei';

/***********************************************************************/

$lang['C3_3_0']           = 'Importier Stundenplan';
$lang['C3_3_1']           = 'Alle Schulstunden der einzelnen F&#228chern k&#246nnen hier importiert werden.';
$lang['C3_3_2']           = 
'<b>[ Klasse; Fach; Raum; Startwoche; Startjahr; Endwoche; Endjahr; Tag; Stunde ]</b><br /> 
Jede einzelne Stunde muss einzelnd eingegeben werden. Im Beispiel besitzt das Fach Mathe von Klasse 1: 5 Wochenstunden. <br /><br />
In der organisatorische Gruppe von Klasse1 existiert die p&#228dagogische Gruppe Mathe. 
Die erste Schulstunde ist von Woche 35 im Jahr 2016 bis Woche 29 im Jahr 2017 definiert, den ersten Tag der Woche ( Montag ) 
in der 4. Stunde. Alle weitern Mathestunden sind analog zu definieren. <br /><br />
Die Datei, die du jetzt hochl&#228dst wird zus&#228tzlich in deinem Profil gespeichert.';
$lang['C3_3_3']           = 'Beispiel einer Stundenplan csv - Datei';
$lang['C3_3_4']           =
'Klasse1;Mathe;K1;35;2016;29;2017;1;4
Klasse1;Mathe;K1;35;2016;29;2017;1;5
Klasse1;Mathe;K1;35;2016;29;2017;2;2
Klasse1;Mathe;K1;35;2016;29;2017;3;4
Klasse1;Mathe;K1;35;2016;29;2017;4;1
';
$lang['C3_3_5_0']         = 'Probleme in der Linie: ';
$lang['C3_3_5_1']         = 'Deine Datei ergibt folgenden Inhalt: <b> Anzahl der erzeugten Objekte:</b> ';
$lang['C3_3_5_2']         = '
<br /><br />
Du kannst die bereits hochgeladene Datei nochmals im Textfeld ver&#228ndern, die &#196anderungen werden auch als Datei in
deinem Profil gespeichert. Zus&#228tzlich wird eine log - Datei erstellt und auch in deinem Profil gespeichert.';
$lang['C3_3_6']           = 'Deine hochgeladene csv - Datei';

/***********************************************************************/

$lang['C3_4_0']           = 'Importier Mitglieder';
$lang['C3_4_1']           = 'Alle Mitglieder k&#246nnen hier importiert werden.';
$lang['C3_4_2']           =
'<b>[ Vorname; Nachname; Email; Passwort ]</b> <br />
Das System ben&#246gt eigentlich nur den Vornamen, den Nachnamen und die Email - Adresse. 
Das vom System generierte Passwort wird dann zur angegebenen E-Mail - Adresse verschickt.
Ist die Email - Adresse keine richtige Email - Adresse, das Zeichen "@" fehlt, 
so braucht das Profil ein tempor&#228res Passwort.<br /><br />
Die Datei, die du jetzt hochl&#228dst wird zus&#228tzlich in deinem Profil gespeichert.';
$lang['C3_4_3']           = 'Beispiel einer Mitglieder csv - Datei';
$lang['C3_4_4']           =
'Vorname1;Nachname1; myemail; your_password
Vorname2;Nachname2; your@email.com; XXX
';
$lang['C3_4_5_0']         = 'Probleme in der Linie: ';
$lang['C3_4_5_1']         = 'Deine Datei ergibt folgenden Inhalt: <b> Anzahl der erzeugten Objekte:</b> ';
$lang['C3_4_5_2']         = '
<br /><br />
Du kannst die bereits hochgeladene Datei nochmals im Textfeld ver&#228ndern, die &#196anderungen werden auch als Datei in
deinem Profil gespeichert. Zus&#228tzlich wird eine log - Datei erstellt und auch in deinem Profil gespeichert.';
$lang['C3_4_6']           = 'Deine hochgeladene csv - Datei';

/***********************************************************************/

$lang['C3_5_0']           = 'Importier Lehrer-Gruppen Verbindungen';
$lang['C3_5_1']           = 'Alle Administratoren (Schulpersonal) k&#246nnen hier mit den ensprechenden Gruppen verbunden werden.';
$lang['C3_5_2']           =
'<b>[ Obergruppe; Gruppe; Email ]</b> <br />
Der Administrator einer Schule sollte eine bevollm&#228chtigte Person wie Schulleiter oder IT-verantwortliche Person sein. 
Der Administrator einer Klasse ist in der Regel der Klassenlehrer, der Administrator eines Faches ist der 
entsprechende Fachlehrer. Dabei k&#246nnen auch mehrere Lehrer ( Administratoren ) einer Gruppe zugewiesen werden.
Die ist allerdings in der obersten Gruppe, der Schule, gesperrt.
Als eindeutige Identifikation wird hier die Email Adresse des Administrators eingegeben. <br /><br />
Die Datei, die du jetzt hochl&#228dst wird zus&#228tzlich in deinem Profil gespeichert.';                      
$lang['C3_5_3']           = 'Beispiel einer Administratoren csv - Datei';
$lang['C3_5_4']           =
'Schule;Klasse1;email@Lehrer
Schule;Klasse2;email@Lehrer2
Klasse1;Mathe;email@Lehrer1
Klasse1;Englisch;email@Lehrer2
';
$lang['C3_5_5_0']         = 'Probleme in der Linie: ';
$lang['C3_5_5_1']         = 'Deine Datei ergibt folgenden Inhalt: <b> Anzahl der erzeugten Objekte:</b> ';
$lang['C3_5_5_2']         = '
<br /><br />
Du kannst die bereits hochgeladene Datei nochmals im Textfeld ver&#228ndern, die &#196anderungen werden auch als Datei in
deinem Profil gespeichert. Zus&#228tzlich wird eine log - Datei erstellt und auch in deinem Profil gespeichert.';
$lang['C3_5_6']           = 'Deine hochgeladene csv - Datei';

/***********************************************************************/

$lang['C3_6_0']           = 'Importier Mitglieder-Gruppen Verbindungen';
$lang['C3_6_1']           = 'Alle Mitglieder (Eltern, Sch&#252ler) k&#246nnen hier mit den ensprechenden Gruppen verbunden werden.';
$lang['C3_6_2']           =
'<b>[ Obergruppe; Gruppe; Email ]</b> <br />
Die Mitglieder einer Gruppe werden unter der Schule einer Klasse oder Gruppe zugewiesen.
Dies k&#246nnen Sch&#252ler, Eltern oder Projektbeteiligte sein. Die ist allerdings in der obersten Gruppe, der Schule, gesperrt.
Als eindeutige Identifikation wird hier die Email Adresse des Mitgliedes eingegeben.<br /><br />
Die Datei, die du jetzt hochl&#228dst wird zus&#228tzlich in deinem Profil gespeichert.';
$lang['C3_6_3']           = 'Beispiel einer Mitglieder csv - Datei';
$lang['C3_6_4']           =
'Schule;Klasse1;email@Mitglied1
Schule;Klasse2;email@Mitglied2
Klasse1;Mathe;email@Mitglied1
Klasse1;Englisch;email@Mitglied1
';
$lang['C3_6_5_0']         = 'Probleme in der Linie: ';
$lang['C3_6_5_1']         = 'Deine Datei ergibt folgenden Inhalt: <b> Anzahl der erzeugten Objekte:</b> ';
$lang['C3_6_5_2']         = '
<br /><br />
Du kannst die bereits hochgeladene Datei nochmals im Textfeld ver&#228ndern, die &#196anderungen werden auch als Datei in
deinem Profil gespeichert. Zus&#228tzlich wird eine log - Datei erstellt und auch in deinem Profil gespeichert.';
$lang['C3_6_6']           = 'Deine hochgeladene csv - Datei';

/***********************************************************************/

$lang['C3_7_0']           = 'Import Mitglieder-Mitglieder Verbindungen';
$lang['C3_7_1']           = 'Alle Verbindungen von Eltern zu Sch&#252lern k&#246nnen hier importiert werden.';
$lang['C3_7_2']           =
'<b>[ email@Eltern; email@Schueler ]</b> <br /> 
Die Verbindung zwischen einem Elternprofil und einem Sch&#252lerprofil kann hier vorgenommen werden.
Dabei reicht es aus die Email des Elternprofils mit der Email des Sch&#252lerprofils in einer Reihe
zu definieren.<br /><br />
Die Datei, die du jetzt hochl&#228dst wird zus&#228tzlich in deinem Profil gespeichert.';
$lang['C3_7_3']           = 'Beispiel einer Verbindungen csv - Datei';
$lang['C3_7_4']           =
'email@Eltern1; email@Schueler1
email@Eltern2; email@Schueler2
email@Eltern3; email@Schueler3
';
$lang['C3_7_5_0']         = 'Probleme in der Linie: ';
$lang['C3_7_5_1']         = 'Deine Datei ergibt folgenden Inhalt: <b> Anzahl der erzeugten Objekte:</b> ';
$lang['C3_7_5_2']         = '
<br /><br />
Du kannst die bereits hochgeladene Datei nochmals im Textfeld ver&#228ndern, die &#196anderungen werden auch als Datei in
deinem Profil gespeichert. Zus&#228tzlich wird eine log - Datei erstellt und auch in deinem Profil gespeichert.';
$lang['C3_7_6']           = 'Deine hochgeladene csv - Datei';

/***********************************************************************/

?>