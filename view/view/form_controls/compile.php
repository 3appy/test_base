<?php

$files =
[
"class.basic_form.php",
"class.send_reset_form.php",
"class.member_registration_form.php",
"class.member_inviation_form.php",
"class.member_captscha_registration_form.php",
"class.password_change_form.php",
"class.article_comment_form.php",
"class.upload_form.php",
"class.team_registration_form.php",
"class.sub_team_registration_form.php",
"class.event_registration_form.php",
"class.sub_event_registration_form.php",
"class.standard_form.php",
"class.standard_button.php",
"class.ok_button.php",
"class.link_button.php",
"class.send_reset_button.php",
"class.article_form.php",
"class.standard_element_form.php",
"class.fbox_captscha_element.php",
"class.fbox_text_element.php",
"class.fbox_password_element.php",
"class.fbox_area_element.php",
"class.fbox_select_element.php",
"class.fbox_day_select_element.php",
"class.fbox_month_select_element.php",
"class.fbox_year_select_element.php",
"class.fbox_3_year_select_element.php",
"class.fbox_sex_select_element.php",
"class.fbox_select_salutation_element.php",
"class.fbox_link_select_element.php",
"class.main_data_form.php",
//"class.link_data_part.php",
"class.school_registration_form.php",
"class.group_link_data_part.php",
"class.member_link_data_part.php",
"class.team_link_data_part.php",
"class.event_link_data_part.php",
"class.member_data_form.php",
"class.address_data_part.php",
"class.private_data_part.php",
"class.fbox_country_select_element.php",
"class.team_data_form.php",
"class.toplevel_team_data_form.php" ,
"class.fbox_req_text_element.php" ,
"class.event_data_form.php",
"class.fbox_wrap_element.php",
"class.fbox_hidden_text_element.php",
"class.upload_data_form.php",
"class.nasty_word_form.php",
"class.message_form.php",
"class.task_form.php",
"class.fbox_duration_select_element.php",
"class.fbox_status_select_element.php",
"class.fbox_table_item_select_element.php",
"class.author_insert_all_task_form.php",
"class.author_insert_selected_task_form.php",
"class.author_update_task_form.php",
"class.view_task_form.php",
"class.author_view_task_form.php",
"class.receiver_update_task_form.php",
"class.receiver_view_task_form.php",
"class.follower_view_task_form.php",
"class.control_table_item_form.php",
"class.fbox_week_select_element.php",
"class.fbox_day_number_select_element.php",
"class.fbox_time_number_select_element.php",
//"class.fbox_member_select_element.php",
"class.fbox_check_element.php",
"class.fbox_check_list.php",
"class.fbox_check_member_list.php",
"class.fbox_radio_element.php",
"class.fbox_radio_list.php",
"class.fbox_radio_member_list.php",
"class.fbox_event_type_element.php",
"class.fbox_school_select_size.php",
"class.interview_form.php",
"class.fbox_date_element.php",
"class.fbox_time_element.php",
"class.date_time_data_part.php",
"class.prev_next_button.php",
"class.progress_bar.php",
"class.basic_questionaire.php",
"class.market_page1.php",
"class.market_page2.php",
"class.market_page3.php",
"class.market_page4.php",
"class.fbox_radio_school_size.php",
"class.fbox_radio_yes_no.php",
"class.fbox_radio_school_communication.php"
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