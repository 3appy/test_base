<?php

require_once('../../../code_generation/class.code_generation.php');

$files =
[
"class.basic_view.php"
];

foreach ($files as  $name )
{
    $code_generation = new code_generation();
    $code_generation->set_file( $name );
    
    $code_generation->open_read_file();
    $code_generation->read_file();
    $code_generation->close_read_file();

    $code_generation->generate();

    $code_generation->open_basic_write_file();
    $code_generation->write_header();
    $code_generation->write_attributes();
    $code_generation->write_functions();
    $code_generation->write_footer();
    $code_generation->close_basic_write_file();
}
?>