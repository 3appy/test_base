<?php

require_once('../../../../code_generation/class.basic_db_file.php');

$files =
[
"class.image_link.php",
"class.standard_table_presentation.php"
];

foreach ($files as  $name )
{
    $code_generation = new basic_db_file();
    $code_generation->set_filename( $name );
    
    $code_generation->open_read_file();
    $code_generation->read_file();
    $code_generation->close_read_file();
    $code_generation->generate();
    $code_generation->open_write_basic_file();
    $code_generation->write_basic_header();
    $code_generation->write_attributes();
    $code_generation->write_functions();
    $code_generation->write_footer();
    $code_generation->close_write_basic_file();
}
?>