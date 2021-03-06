<?php

$files =
[
"class.member_presentation.php",
"class.team_presentation.php",
"class.event_presentation.php",

"class.member_list_presentation.php",
"class.event_member_list_presentation.php",
"class.team_member_list_presentation.php",
"class.search_member_list_presentation.php",

"class.team_list_presentation.php",
"class.search_team_list_presentation.php",
"class.event_list_presentation.php",
"class.search_event_list_presentation.php",

"class.price_list_presentation.php",
"class.control_time_table_item_list_presentation.php",
"class.task_list_presentation.php",
"class.task_list_author_presentation.php",
"class.task_list_receiver_presentation.php",
"class.task_list_author_receiver_presentation.php",
"class.news_list_presentation.php",
"class.nasty_word_list_presentation.php",
"class.unread_mail_member_presentation.php",
"class.member_kontakt_message_list_presentation.php",
"class.document_list_presentation.php",
"class.video_list_presentation.php",
"class.image_list_presentation.php",
"class.invited_interview_member_presentation.php",
"class.invited_interview_admin_presentation.php"
];

foreach ($files as  $name )
{
    echo $name . "<br />";
    write_file( $name );
}

function write_file( $name )
{
$myFile = $name;
$buffer;
$file_array = array();
$function_array = array();
$comment_array = array();
$string_line;
$pos;
$before_operaton = TRUE;
$first_run = FALSE;

$handle = fopen($myFile, 'r') or die("can't open file");

// read the complete file into a buffer named file_array
while (($buffer = fgets($handle, 4096)) !== false)
{
if ( strpos($buffer, '#') !== false )
    $first_run = TRUE;

$file_array[] = $buffer;
}
fclose($handle);

$handle = fopen($myFile, 'w') or die("can't open file");
foreach ($file_array as $string_line)
{
    if ( $first_run )
    {
        if ( $before_operaton )
        {
            fwrite($handle, $string_line );
            if ( strpos($string_line, 'OPERATIONS') !== false )
            {
                $before_operaton = FALSE;
            }
        }
        else
        {
            // handle after operation
            if ( strpos($string_line, '#') !== false )
            {
                $pos = strpos($string_line, '#');
                $function_array[] = substr( $string_line, $pos + 1 );
            }

            elseif ( strpos($string_line, '*') == 5 )
            {
                $comment_array[] = $string_line;
            }

            elseif ( strpos($string_line, 'function') !== false )
            {
                fwrite($handle, "" );
                foreach ($comment_array as $comment_line)
                {
                    fwrite($handle, $comment_line );
                }
                fwrite($handle, $string_line );
                fwrite($handle, "    {" . "\n" );
                foreach ($function_array as $string_line)
                {
                    fwrite($handle, "     " . $string_line );
                }
                fwrite($handle, "    }" . "\n" );

                unset( $comment_array );
                unset( $function_array );
            }
            else
            {
            echo "...."; // do nothing
            }
        }
    }
    else
    {
        fwrite($handle, $string_line );
    }
}
if ( $first_run )
{
fwrite($handle, "}" );
fwrite($handle, "?>" );
}

fclose($handle);
}

?>