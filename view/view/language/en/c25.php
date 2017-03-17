<?php
/*
------------------
Language: English
------------------
*/

$lang = array();

require('menue_includes/top_menue.php');
require('menue_includes/C_left_menue.php');
require('menue_includes/C_top_menue.php');
require('menue_includes/C_right_menue.php');
require('general/send_receive_button.php');

$lang['C3_form_header']   = 'Export CSV file';
$lang['C3_0_1']           =
'<br />A CSV (comma seperated values) file is a simple text file, in which the values are simply separated by semicolons.
You can simply read the status of your organization into a CSV file. This is saved in your personal profile.
You can modify this file until it meets your desired organization. Through the CSV import you will be able to read the
file into the system. All changes are then traced to the database.';


$lang['C3_1_0']           = 'Export school structure';
$lang['C3_1_1']           = 
'All classes, subject-, parents- and teacher-groups are exported here. 
You will find the file in your personal profile under the name: schoolstructure_';

/***********************************************************************/

$lang['C3_2_0']           = 'Export spaces';
$lang['C3_2_1']           = 
'All the spaces of the school are exported here. 
You will find the file in your personal profile under the name: room_';

/***********************************************************************/

$lang['C3_3_0']           = 'Export timetables';
$lang['C3_3_1']           = 
'All timetables of the individual subject are exported here. 
You will find the file in your personal profile under the name: timetable_';

/***********************************************************************/

$lang['C3_4_0']           = 'Export members';
$lang['C3_4_1']           = 
'All members (teachers, pupils, parents, ...) are exported here. 
You will find the file in your personal profile under the name: member_';

/***********************************************************************/

$lang['C3_5_0']           = 'Export teacher-groups connections';
$lang['C3_5_1']           = 
'All connections of the administrators (school staff) to groups are exported here. 
You will find the file in your personal profile under the name: adm_team_con_';

/***********************************************************************/

$lang['C3_6_0']           = 'Export member-groups connections';
$lang['C3_6_1']           = 
'All connections of the members ( partents, pupils ) to groups are exported here.
You will find the file in your personal profile under the name: member_team_con.';

/***********************************************************************/

$lang['C3_7_0']           = 'Export member-member connections';
$lang['C3_7_1']           = 
'All connections from parents to pupils are exported here. 
You will find the file in your personal profile under the name: member_member_con_';
?>
