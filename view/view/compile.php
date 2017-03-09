<?php

$files =
[
"class.three_column_basic_view.php",
//"class.Yaml_framework.php",
//"class.A_view.php",
"A0_view.php",
"A1_view.php",
"A2_view.php",
"A3_view.php",
"A4_view.php",
"A5_view.php",
"A6_view.php",
"A7_view.php",
"A8_view.php",
"A10_view.php",
"A11_view.php",
"class.A_view_presentation.php",
"A15_view.php",
"A16_view.php",
"A17_view.php",
"A18_view.php",
"A19_view.php",
"A20_view.php",
"A21_view.php",
"A24_view.php",
"A25_view.php",
//"class.B_view.php",
"B2_view.php",
"B4_view.php",
"B5_view.php",
"B6_view.php",
"B7_view.php",
"B8_view.php",
"B9_view.php",
"B10_view.php",
"B11_view.php",
"B12_view.php",
"B13_view.php",
"B14_view.php",
"B15_view.php",
"B16_view.php",
"B17_view.php",
"B18_view.php",
"B19_view.php",
"B20_view.php",
"B24_view.php",
"B25_view.php",
"B26_view.php",
"B29_view.php",
"B30_view.php",
"B31_view.php",
"B32_view.php",
"B33_view.php", 
"B34_view.php",
"B35_view.php",
"B36_view.php",
"B37_view.php",
"B38_view.php",
"B39_view.php",
//"class.C_view.php",
"C2_view.php",
"C3_view.php",
"C4_view.php",
"C5_view.php",
"C7_view.php",
"C9_view.php",
"C10_view.php",
"C11_view.php",
"C12_view.php",
"C13_view.php",
"C14_view.php",
"C15_view.php",
"C16_view.php",
"C17_view.php",
"C18_view.php",
"C24_view.php",
"C25_view.php",
"C26_view.php",
"C27_view.php",
"C28_view.php",
"C29_view.php",
"C30_view.php",
"C31_view.php",
"C32_view.php",
"C33_view.php",
"C34_view.php",
"C35_view.php",
"C36_view.php",
"C37_view.php",
"C38_view.php",
"C39_view.php",
//"class.D_view.php",
"D2_view.php",
"D3_view.php",
"D4_view.php",
"D5_view.php",
"D7_view.php",
//"D9_view.php",
"D10_view.php",
"D11_view.php",
"D12_view.php",
"D13_view.php",
"D14_view.php",
"D15_view.php",
"D16_view.php",
"D17_view.php",
"D20_view.php",
"D26_view.php",
"D18_view.php",
"D30_view.php",
"D35_view.php",
"D36_view.php",
"D37_view.php"
//"class.simple_html_header.php",
//"class.simple_html_footer.php",
//"class.carousel_html_header.php"
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