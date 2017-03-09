<?php

$files =
[
"class.standard_button.php",
"class.send_reset_button_group.php",
"class.link_button.php",
"class.fbox_wrap_element.php",
"class.standard_element.php",
"class.fbox_text_element.php",
"class.fbox_date_element.php",
"class.fbox_time_element.php",
"class.fbox_text_hidden_element.php",
"class.fbox_text_area_element.php",
"class.fbox_select_element.php",
"class.fbox_select_salutation_element.php",
"class.fbox_select_school_size.php",
"class.fbox_select_country_element.php",
"class.fbox_select_filetype_element.php",
"class.fbox_select_time_slice_element.php",
"class.fbox_select_team_type_element.php",
"class.fbox_select_table_item_element.php",
"class.fbox_select_duration_element.php",
"class.fbox_select_status_element.php",
"class.fbox_multiple_upload_element.php",
"class.fbox_model.php",
"class.fbox_model_element.php",
"class.fbox_check_element.php",
"class.fbox_check_list.php",
"class.fbox_check_pupil_list.php",
"class.fbox_check_condition_list.php"
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