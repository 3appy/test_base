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

$lang['C3_userfile_disk'] = 'File from the computer';

$lang['C3_form_header']   = 'Import CSV file';
$lang['C3_0_1']           =
'<br />A CSV (comma seperated values) is a simple text file, in which the values are simply separated by semicolons. You can create a simple editor
, Or you use a spreadsheet program and save the file as CSV. It is important that the structure of the respective sample file is identical.
If special characters are used, the file must be saved in UTF-8 format.';

$lang['C3_1_0']           = 'Import school structure';
$lang['C3_1_1']           = 'All classes - , subjects - , parent -  and teacher - groups can be imported here.';
$lang['C3_1_2']           =
'<b>[ topgroup; group; grouptye ]</b> <br />
Each individual group must be entered individually. In this example, the group my school has 2 subgroups named 
Class1 and Class2, Class1 again has two subgroups named Math and English. We differ
between an organizational group [2], and a pedagogical group [3]. <br /> <br />
The file you upload will be saved in your profile.';

$lang['C3_1_3']           = 'Example of a school structure csv file';
$lang['C3_1_4']           =
'my school;Class1;2
my school;Class2;2
Class1;Math;3
Class1;English;3
';
$lang['C3_1_5_0']         = 'Problems in line: ';
$lang['C3_1_5_1']         = 'Your file has the following content: <b> Number of objects created:</b> ';
$lang['C3_1_5_2']         = 
'<br /><br /> By activating the "send" button, the objects will be created and you are entered as admin.
You can change the uploaded file again in the text field, the changes are also saved as a file in
your profile. In addition, a log file is created and saved in your profile.';
$lang['C3_1_6']           = 'Your uploaded csv file';

/***********************************************************************/

$lang['C3_2_0']           = 'Import rooms';
$lang['C3_2_1']           = 'All rooms of the school can be imported here.';
$lang['C3_2_2']           =
'<b>[ room; description ]</b><br />
Each room is defined by a short description. 
This short description will be displayed later in the timetable. <br /><br />
The file you upload will be saved in your profile.';

$lang['C3_2_3']           = 'Example of a room csv file';
$lang['C3_2_4']           =
'C1; Classroom of 1. class
C2; Classroom of 2. class
C3; Classroom of 3. class
';
$lang['C3_2_5_0']         = 'Problems in line: ';
$lang['C3_2_5_1']         = 'Your file has the following content: <b> Number of objects created:</b> ';
$lang['C3_2_5_2']         = '
<br /><br />
You can change the uploaded file again in the text field, the changes are also saved as a file in
your profile. In addition, a log file is created and saved in your profile.';
$lang['C3_2_6']           = 'Your uploaded csv file';

/***********************************************************************/

$lang['C3_3_0']           = 'Import timetable';
$lang['C3_3_1']           = 'All school lessons of the individual subjects can be imported here.';
$lang['C3_3_2']           =
'<b>[ class; subject; room; starting week; starting year; final week; final year; day; hour ]</b><br />
Each individual hour must be entered individually. In the example, the math timetable of class 1 has 5 hours per week. <br /> <br />
In the organizational group of class1 exist the educational group math.
The first school lesson is defined from week 35 in 2016 up to week 29 in 2017, the first day of the week (monday)
in the 4th hour. All further math lessons have to be defined analogously. <br /><br />
The file you upload will be saved in your profile.';
$lang['C3_3_3']           = 'Example of a timetable csv file';
$lang['C3_3_4']           =
'class1;math;C1;35;2016;29;2017;1;4
class1;math;C1;35;2016;29;2017;1;5
class1;math;C1;35;2016;29;2017;2;2
class1;math;C1;35;2016;29;2017;3;4
class1;math;C1;35;2016;29;2017;4;1
';
$lang['C3_3_5_0']         = 'Problems in line: ';
$lang['C3_3_5_1']         = 'Your file has the following content: <b> Number of objects created:</b> ';
$lang['C3_3_5_2']         = '
<br /><br />
You can change the uploaded file again in the text field, the changes are also saved as a file in
your profile. In addition, a log file is created and saved in your profile.';
$lang['C3_3_6']           = 'Your uploaded csv file';

/***********************************************************************/

$lang['C3_4_0']           = 'Import members';
$lang['C3_4_1']           = 'All members can be imported here.';
$lang['C3_4_2']           =
'<b>[ firstname, surname, email, password ]</b> <br />
The system needs only the first name, the last name and the email address.
The system generated password will be sent to the specified e-mail address.
If the email address is not a correct email address, character "@" is missing, 
the profile needs a temporary password.<br /><br />
The file you upload will be saved in your profile.';
$lang['C3_4_3']           = 'Example of a member csv file';
$lang['C3_4_4']           =
'firstname1;surname1; my@test.xx; your_password
firstname2;surname2; your@email.com; XXX
';
$lang['C3_4_5_0']         = 'Problems in line: ';
$lang['C3_4_5_1']         = 'Your file has the following content: <b> Number of objects created:</b> ';
$lang['C3_4_5_2']         = '
<br /><br />
You can change the uploaded file again in the text field, the changes are also saved as a file in
your profile. In addition, a log file is created and saved in your profile.';
$lang['C3_4_6']           = 'Your uploaded csv file';

/***********************************************************************/

$lang['C3_5_0']           = 'Import teacher-groups connections';
$lang['C3_5_1']           = 'All teachers and administrators (school staff) can be connected to the appropriate groups.';
$lang['C3_5_2']           =
'<b>[ topgroup; group; email ]</b> <br />
The administrator of a school should be an authorized person such as headmaster or IT resonsible person.
The administrator of a class is usually the class teacher, the administrator of a subject is the appropriate 
specialist teacher. Several teachers (administrators) can also be assigned to a group.
This, however, is blocked in the top group, the school.
The email of the administrator is entered as a unique identification. <br /><br />
The file you upload will be saved in your profile.';
$lang['C3_5_3']           = 'Example of a teacher-groups connections csv file';
$lang['C3_5_4']           =
'school;class1;email@teacher
school;class2;email@teacher2
class1;math;email@teacher1
class1;english;email@teacher2
';
$lang['C3_5_5_0']         = 'Problems in line: ';
$lang['C3_5_5_1']         = 'Your file has the following content: <b> Number of objects created:</b> ';
$lang['C3_5_5_2']         = '
<br /><br />
You can change the uploaded file again in the text field, the changes are also saved as a file in
your profile. In addition, a log file is created and saved in your profile.';
$lang['C3_5_6']           = 'Your uploaded csv file';

/***********************************************************************/

$lang['C3_6_0']           = 'Import member-groups connections';
$lang['C3_6_1']           = 'All members (parents, pupil) can be connected to the appropriate groups.';
$lang['C3_6_2']           =
'<b>[ topgroup; group; email ]</b> <br />
The members of a group are assigned to a class or group.
These may be pupils, parents or project participants.
This, however, is blocked in the top group, the school.
The email of the member is entered as a unique identification. <br /><br />
The file you upload will be saved in your profile.';
$lang['C3_6_3']           = 'Example of a member-groups connections csv file';
$lang['C3_6_4']           =
'school;class1;email@member1
school;class2;email@member2
class1;math;email@member1
class1;english;email@member1
';
$lang['C3_6_5_0']         = 'Problems in line: ';
$lang['C3_6_5_1']         = 'Your file has the following content: <b> Number of objects created:</b> ';
$lang['C3_6_5_2']         = '
<br /><br />
You can change the uploaded file again in the text field, the changes are also saved as a file in
your profile. In addition, a log file is created and saved in your profile.';
$lang['C3_6_6']           = 'Your uploaded csv file';

/***********************************************************************/

$lang['C3_7_0']           = 'Import member-member connections';
$lang['C3_7_1']           = 'All connections from parents to pupils can be imported here.';
$lang['C3_7_2']           =
'<b>[ email@parents; email@pupil ]</b> <br />
The connection between a parent profile and the pupil profile can be made here. 
It is enough to define the email of the parent profile with the email of the pupil profile.<br /><br />
The file you upload will be saved in your profile.';
$lang['C3_7_3']           = 'Example of a member csv file';
$lang['C3_7_4']           =
'email@parents1; email@pupil1
email@parents2; email@pupil2
email@parents3; email@pupil3
';
$lang['C3_7_5_0']         = 'Problems in line: ';
$lang['C3_7_5_1']         = 'Your file has the following content: <b> Number of objects created:</b> ';
$lang['C3_7_5_2']         = '
<br /><br />
You can change the uploaded file again in the text field, the changes are also saved as a file in
your profile. In addition, a log file is created and saved in your profile.';
$lang['C3_7_6']           = 'Your uploaded csv file';

/***********************************************************************/


?>
