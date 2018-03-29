<?php

function ju_widgets(){
    register_sidebar(array(
        'name'              => __('Main Sidebar', 'the_cambridge'), 
        'id'                => 'ju_sidebar', 
        'description'       => __('Sidebar for the theme the cambridge', 'the_cambridge'), 
        'before_title'      => '<h4>', 
        'after_title'       => '</h4>'
    )); 
}