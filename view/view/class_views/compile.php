<?php

$files =
[
"class.text_view.php",
"class.simple_text_view.php",
"class.message_view.php",
"class.article_view.php",
"class.comment_view.php",
"class.member_info_view.php",
"class.table_element_list.php",
"class.calender_day.php",
"class.calender_time_element.php",
"class.calender_week.php",
"class.calender_month.php",
"class.basic_calender.php",
"class.calender_month_view.php",
"class.calender_week_view.php",
"class.calender_day_view.php"
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