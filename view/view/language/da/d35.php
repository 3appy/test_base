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
require('menue_includes/D_left_menue.php');
require('menue_includes/D_top_menue.php');
require('menue_includes/D_right_menue.php');

$lang['info'] = "" .
"<p class=\"box info\">" .
"<img src=\"". $_SESSION['icons'] .  "info.png\" " . "/>" .
' Klick p&#229 et billede du ville inkludere i din artikel' .
 "</p>";
?>