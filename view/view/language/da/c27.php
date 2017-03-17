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

$lang['C3_userfile_disk'] = 'Fil fra din computer';

$lang['C3_form_header']   = 'Importer CSV-fil';
$lang['C3_0_1']           =
'<br />En CSV (kommaseparerede v&#230rdier) er en simpel tekstfil, hvor værdierne er simpelthen adskilt af semikoloner. Du kan tage en simpel editor
tage, eller du bruger et regnearksprogram og gemmer filen som en CSV fra. Det er vigtigt, at strukturen af den respektive pr&#248ve fil identiske.
Hvis de bruges specialtegn, skal filen i UTF-8 format gemmes.';

$lang['C3_1_0']           = 'Importier skole struktur';
$lang['C3_1_1']           = 'Alle klasser, fag, for&#230ldre og l&#230rer grupper kan importeres her.';
$lang['C3_1_2']           =
'<b>[ topgruppe; gruppe; gruppentype ]</b> <br />
Hver gruppe skal indtastes enkeltvis. I dette eksempel har gruppen min skole 2 undergrupper med
navn klasse 1 og klasse 2, klasse 1 har igen 2 undergrupper med navn matematik og engelsk. Vi skelner
mellem en organisatorisk gruppe [2], og en p&#230dagogisk gruppe [3]. <br /> <br />
Den fil, du nu uploader ville blive gemt i din profil.';

$lang['C3_1_3']           = 'Eksempel p&#229 en skole struktur csv - fil';
$lang['C3_1_4']           =
'min skole;Klasse1;2
min skole;Klasse2;2
Klasse1;matematik;3
Klasse1;engelsk;3
';
$lang['C3_1_5_0']         = 'Problemer i linjen: ';
$lang['C3_1_5_1']         = 'Din fil har f&#248lgende indhold: <b> antal objekter, der oprettes:</b> ';
$lang['C3_1_5_2']         = 
'<br /><br /> "Send" knappen ville skabt objekterne, og du vil indtastes som Admin.
Du kan &#230ndre filen igen i tekstfeltet. Alle &#230ndringerne ville gemmes i en fil
i din profil. Desuden ville der opretes en log - fil i din profil.';
$lang['C3_1_6']           = 'Din uploadet csv - fil';

/***********************************************************************/

$lang['C3_2_0']           = 'Importier v&#230relser';
$lang['C3_2_1']           = 'Alle v&#230relser p&#229 skolen kan importeres her.';
$lang['C3_2_2']           =
'<b>[ v&#230relse; beskrivelse ]</b><br />
Hvert v&#230relse er defineret ved en kort beskrivelse. 
Denne korte navn vises senere i tidsplanen. <br /><br />
Den fil, du nu uploader ville blive gemt i din profil.';

$lang['C3_2_3']           = 'Eksempel p&#229 en v&#230relse csv - fil';
$lang['C3_2_4']           =
'K1; Klassev&#230relse af 1. klasse
K2; Klassev&#230relse af 2. klasse
K3; Klassev&#230relse af 3. klasse
';
$lang['C3_2_5_0']         = 'Problemer i linjen: ';
$lang['C3_2_5_1']         = 'Din fil har f&#248lgende indhold: <b> antal objekter, der oprettes:</b> ';
$lang['C3_2_5_2']         = '
<br /><br /> 
Du kan &#230ndre filen igen i tekstfeltet. Alle &#230ndringerne ville gemmes i en fil
i din profil. Desuden ville der opretes en log - fil i din profil.';
$lang['C3_2_6']           = 'Din uploadet csv - fil';

/***********************************************************************/

$lang['C3_3_0']           = 'Importier timeplan';
$lang['C3_3_1']           = 'Alle skoletimer af de enkelte fag kan importeres her.';
$lang['C3_3_2']           =
'<b>[ klasse; fag; v&#230relse; start uge; start &#229r; slut uge; slut &#229r; dag; time ]</b><br />
Hver time skal indtastes enkeltvis. I dette eksempel har matematik i klasse 1: 5 timer om ugen. <br /> <br />
I den organisatoriske gruppe klasse1 eksisterer den p&#230dagogiske gruppe matematik.
Den f&#248rste time er defineret ved uge 35 i 2016 til og med uge 29 i 2017, den f&#248rste dag i ugen (mandag)
i 4. time. Alle f&#248lgende timer skal defineres analogt. <br /><br />
Den fil, du nu uploader ville blive gemt i din profil.';
$lang['C3_3_3']           = 'Eksempel p&#229 en timeplan csv - fil';
$lang['C3_3_4']           =
'klasse1;Mate;K1;35;2016;29;2017;1;4
klasse1;Mate;K1;35;2016;29;2017;1;5
klasse1;Mate;K1;35;2016;29;2017;2;2
klasse1;Mate;K1;35;2016;29;2017;3;4
klasse1;Mate;K1;35;2016;29;2017;4;1
';
$lang['C3_3_5_0']         = 'Problemer i linjen: ';
$lang['C3_3_5_1']         = 'Din fil har f&#248lgende indhold: <b> antal objekter, der oprettes:</b> ';
$lang['C3_3_5_2']         = '
<br /><br />
Du kan &#230ndre filen igen i tekstfeltet. Alle &#230ndringerne ville gemmes i en fil
i din profil. Desuden ville der opretes en log - fil i din profil.';
$lang['C3_3_6']           = 'Din uploadet csv - fil';

/***********************************************************************/

$lang['C3_4_0']           = 'Importier medlemmer';
$lang['C3_4_1']           = 'Alle medlemmer kan importeres her.';
$lang['C3_4_2']           =
'<b>[ fornavn, efternavn, e-mail; adgangscode ]</b> <br />
Systemet faktisk beh&#248ver kun fornavn, efternavn og e - mail adresse.
Systemet genereret adgangskode ville sendt til den angivne e-mail adresse.
Hvis email adressen er ikke en korrekt email adressen, karakter "@" angler,
s&#229 beh&#248ver profilen en midlertidig adgangskode.<br /><br />
Den fil, du nu uploader ville blive gemt i din profil.';
$lang['C3_4_3']           = 'Eksempel p&#229 en medlem csv - fil';
$lang['C3_4_4']           =
'fornavn1; efternavn1; my@test.xx; your_password
fornavn2; efternavn2; your@email.com; XXX
';
$lang['C3_4_5_0']         = 'Problemer i linjen: ';
$lang['C3_4_5_1']         = 'Din fil har f&#248lgende indhold: <b> antal objekter, der oprettes:</b> ';
$lang['C3_4_5_2']         = '
<br /><br />
Du kan &#230ndre filen igen i tekstfeltet. Alle &#230ndringerne ville gemmes i en fil
i din profil. Desuden ville der opretes en log - fil i din profil.';
$lang['C3_4_6']           = 'Din uploadet csv - fil';

/***********************************************************************/

$lang['C3_5_0']           = 'Importier l&#230rer-gruppe forbindelse';
$lang['C3_5_1']           = 'Alle l&#230rer og administratorer (skole personale) kan forbindes til de respektive grupper.';
$lang['C3_5_2']           =
'<b>[ topgruppe; gruppe; email ]</b> <br />
Administratoren af en skole skal v&#230re en autoriseret person som skoleledere eller IT ansvarlig.
Administrator af en klasse er normalt klassel&#230reren, administratoren af et fag er den respektive fagl&#230rere. 
Det er ogs&#229 muligt at tildele flere l&#230rere (administratorer) til en gruppe.
Det er dog i den &#248verste gruppe, den skole, ikke muligt.
Som entydig identifikation her indtastes e-mailadressen p&#229 administratoren. <br /><br />
Den fil, du nu uploader ville blive gemt i din profil.';
$lang['C3_5_3']           = 'Eksempel p&#229 en l&#230rer-gruppe forbindelse csv - fil';
$lang['C3_5_4']           =
'skole;klasse1;email@l&#230rer
skole;klasse2;email@l&#230rer2
klasse1;Mate;email@l&#230rer1
klasse1;Engelsk;email@l&#230rer2
';
$lang['C3_5_5_0']         = 'Problemer i linjen: ';
$lang['C3_5_5_1']         = 'Din fil har f&#248lgende indhold: <b> antal objekter, der oprettes:</b> ';
$lang['C3_5_5_2']         = '
<br /><br />
Du kan &#230ndre filen igen i tekstfeltet. Alle &#230ndringerne ville gemmes i en fil
i din profil. Desuden ville der opretes en log - fil i din profil.';
$lang['C3_5_6']           = 'Din uploadet csv - fil';

/***********************************************************************/

$lang['C3_6_0']           = 'Importier medlem-gruppe forbindelse';
$lang['C3_6_1']           = 'Alle medlemmer (for#230ldre, elever) kan forbindes til de respektive grupper.';
$lang['C3_6_2']           =
'<b>[ topgruppe; gruppe; email ]</b> <br />
Medlemmer af en gruppe tildeles til klasser eller grupper.
Disse kan v&#230re elever, for&#230ldre eller projektdeltagere.
Det er dog i den &#248verste gruppe, den skole, ikke muligt.
Som entydig identifikation her indtastes e-mailadressen p&#229 medlemmer. <br /><br />
Den fil, du nu uploader ville blive gemt i din profil.';
$lang['C3_6_3']           = 'Eksempel p&#229 en medlem-gruppe forbindelse csv - fil';
$lang['C3_6_4']           =
'skole;klasse1;email@medlem1
Schule;klasse2;email@medlem2
klasse1;Mate;email@medlem1
klasse1;Engelsk;email@medlem1
';
$lang['C3_6_5_0']         = 'Problemer i linjen: ';
$lang['C3_6_5_1']         = 'Din fil har f&#248lgende indhold: <b> antal objekter, der oprettes:</b> ';
$lang['C3_6_5_2']         = '
<br /><br />
Du kan &#230ndre filen igen i tekstfeltet. Alle &#230ndringerne ville gemmes i en fil
i din profil. Desuden ville der opretes en log - fil i din profil.';
$lang['C3_6_6']           = 'Din uploadet csv - fil';

/***********************************************************************/

$lang['C3_7_0']           = 'Importier medlem-medlem forbindelser';
$lang['C3_7_1']           = 'Alle forbindelser fra for#230ldre til elever kan importeres her.';
$lang['C3_7_2']           =
'<b>[ email@foraeldre; email@elever ]</b> <br />
Die Verbindung zwischen einem Elternprofil und einem Sch&#252lerprofil kann hier vorgenommen werden.
Dabei reicht es aus die Email des Elternprofils mit der Email des Sch&#252lerprofils in einer Reihe
zu definieren.<br /><br />
Die Datei, die du jetzt hochl&#228dst wird zus&#228tzlich in deinem Profil gespeichert.';
$lang['C3_7_3']           = 'Eksempel p&#229 en medlem-medlem forbindelser csv - fil';
$lang['C3_7_4']           =
'email@foraeldre1; email@elever1
email@foraeldre2; email@elever2
email@foraeldre3; email@elever3
';
$lang['C3_7_5_0']         = 'Problemer i linjen: ';
$lang['C3_7_5_1']         = 'Din fil har f&#248lgende indhold: <b> antal objekter, der oprettes:</b> ';
$lang['C3_7_5_2']         = '
<br /><br />
Du kan &#230ndre filen igen i tekstfeltet. Alle &#230ndringerne ville gemmes i en fil
i din profil. Desuden ville der opretes en log - fil i din profil.';
$lang['C3_7_6']           = 'Din uploadet csv - fil';

/***********************************************************************/


?>