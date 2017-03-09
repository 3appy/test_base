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
require('menue_includes/B_left_menue.php');
require('menue_includes/B_top_menue.php');
require('menue_includes/B_right_menue.php');
require('general/send_receive_button.php');

$lang['info'] = "" .
"<p class=\"box info\">" .
"<img src=\"". $_SESSION['icons'] .  "warning.png\" " . "/>" .
' upload af billeder er kun i format jpg muligt' .
 "</p>";

$lang['C3_form_header']        = 'upload et nyt billede ind i din private profil';
$lang['C3_header']             = 'Billedes overskrift';
$lang['C3_userfile']           = 'Selekter en fil';
$lang['C3_description']        = 'Billedes beskrivelse';
?>
