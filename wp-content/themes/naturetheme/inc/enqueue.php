<?php
/*
@package naturetheme
================================
			Admin Enqueue functions
================================
*/
function nature_load_admin_scripts($hook){
    if('toplevel_page_masum-nature' != $hook){return;}
    wp_register_style('nature_admin', get_template_directory_uri() . '/css/nature-admin.css',array(),'1.0.0','all');
    wp_enqueue_style('nature_admin');

    wp_enqueue_media();

    wp_register_script('nature-admin-script',get_template_directory_uri() . '/js/nature-admin.js',array('jquery'),'1.0.0',true);
    wp_enqueue_script('nature-admin-script');
}
add_action('admin_enqueue_scripts','nature_load_admin_scripts');

