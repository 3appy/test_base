<?php
/*
------------------
Language: Danish
------------------
*/

// � = &#198
// � = &#230
// � = &#197
// � = &#229
// � = &#216
// � = &#248

$lang = array();

require('menue_includes/top_menue.php');
require('menue_includes/C_left_menue.php');
require('menue_includes/C_top_menue.php');
require('menue_includes/C_right_menue.php');
require('general/send_receive_button.php');

$lang['info'] = "" .
"<p class=\"box info\">" .
"<img src=\"". $_SESSION['icons'] .  "warning.png\" " . "/>" .
' upload af dokumenter er i format pdf, doc, docx, xls, xlsx, ppt, pptx, odt, ods, odp og txt muligt' .
 "</p>";

$lang['C3_form_header']        = 'upload et nyt dokument ind i din gruppe';
$lang['C3_header']             = 'Dokument overskrift';
$lang['C3_userfile']           = 'Selekter en fil';
$lang['C3_description']        = 'Dokument beskrivelse';
?>
