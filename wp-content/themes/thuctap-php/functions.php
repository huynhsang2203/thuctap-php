<?php

//SET UP - DEFINE
define('THEME_URI',get_theme_file_uri());
define('THEME_PATH',get_theme_file_path());


//INCLUDES
include('includes/enqueue.php');

//HOOK ACTION - FILTER
add_action('wp_enqueue_scripts','thuctap_enqueue');

//SHORT CODE