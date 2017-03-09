<?php
session_start();

//25  school connection
include_once 'class.C_basic_frame.php';
include_once 'C25_post_control.php';

$frame = new C_basic_frame();
$frame->set_control( new C25_post_control() );
$frame->set_frame_switch( 'default' );
$frame->set_next_frame( 'C25_frame.php' );

$next_frame = $frame->return_next_frame();
header("Location:" . $next_frame );
exit;
?>