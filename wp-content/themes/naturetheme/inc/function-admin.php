<?php
/*
@package naturetheme
================================
			Admin page
================================
*/


function nature_add_admin_page(){

	/**
	 * add_menu_page( string $page_title, string $menu_title, string $capability, string $menu_slug, callable $callback = '', string $icon_url = '', int|float $position = null )
	 */

	add_menu_page('nature_theme_options','Nature','manage_options','masum-nature','nature_theme_create_page','dashicons-palmtree',110);

	/**
	 * add_submenu_page( string $parent_slug, string $page_title, string $menu_title, string $capability, string $menu_slug, callable $callback = '', int|float $position = null )
	 */
	add_submenu_page('masum-nature','nature_theme_options','Settings','manage_options','masum-nature','nature_theme_create_page');

	add_submenu_page('masum-nature','nature_CSS','CSS Options','manage_options','masum-nature-css','nature_theme_css_page');
}

add_action('admin_menu','nature_add_admin_page');

function nature_theme_create_page(){
	//generation of our admin page

	require_once(get_template_directory() . '/inc/templates/nature-admin.php');

}

function nature_theme_css_page(){


}