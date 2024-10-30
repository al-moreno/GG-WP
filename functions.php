<?php

function company_files()
{
    wp_enqueue_style('company_main_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'company_files');

?>