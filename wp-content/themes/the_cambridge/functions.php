<?php
//setup 

//includes
include(get_template_directory() . '/includes/front/enqueue.php'); 
include(get_template_directory() . '/includes/setup.php'); 
include(get_template_directory() . '/includes/widgets.php');  
//hooks
add_action( 'wp_enqueue_scripts', 'ju_enqueue'); 
add_action('after_setup_theme', 'ju_setup_theme'); 
add_action('widgets_init', 'ju_widgets'); 

