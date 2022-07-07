<?php
/*
@package naturetheme
================================
			Admin page
================================
*/


function nature_add_admin_page(){

	/** /// Generate Nature admin page
	 * add_menu_page( string $page_title, string $menu_title, string $capability, string $menu_slug, callable $callback = '', string $icon_url = '', int|float $position = null )
	 */

	add_menu_page('nature_theme_options','Nature','manage_options','masum-nature','nature_theme_create_page','dashicons-palmtree',110);

	/** /// Generate Nature Admin Sub page
	 * add_submenu_page( string $parent_slug, string $page_title, string $menu_title, string $capability, string $menu_slug, callable $callback = '', int|float $position = null )
	 */
	add_submenu_page('masum-nature','Nature Sidebar Options','Sidebar','manage_options','masum-nature','nature_theme_create_page');
	add_submenu_page('masum-nature','Nature Theme Options','Theme options','manage_options','masum_nature_theme','masum_theme_support_page');
	add_submenu_page('masum-nature','Nature CSS','CSS Options','manage_options','masum-nature-css','nature_theme_css_page');
	

	
}

add_action('admin_menu','nature_add_admin_page');

//Activate cuustom Settings
add_action('admin_init','nature_custom_settings');

function nature_custom_settings(){
	//Sidebar Options
	register_setting('nature_settings_group','profile_picture');
	register_setting('nature_settings_group','first_name');
	register_setting('nature_settings_group','last_name');
	register_setting('nature_settings_group','user_description');
	register_setting('nature_settings_group','twitter_handler','nature_sanitize_twitter_handler');
	register_setting('nature_settings_group','facebook_handler');
	register_setting('nature_settings_group','gplus_handler');

	add_settings_section('nature-sidebar-options','Sidebar Option','nature_sidebar_options','masum-nature');

	add_settings_field('sidebar-profile-picuture','Profile Picture','nature_sidebar_profile','masum-nature','nature-sidebar-options');
	add_settings_field('sidebar-name','Full Name','nature_sidebar_name','masum-nature','nature-sidebar-options');
	add_settings_field('sidebar-description','Description','nature_sidebar_description','masum-nature','nature-sidebar-options');
	add_settings_field('sidebar-twitter','Twitter handler','nature_sidebar_twitter','masum-nature','nature-sidebar-options');
	add_settings_field('sidebar-facebook','Facebook handler','nature_sidebar_facebook','masum-nature','nature-sidebar-options');
	add_settings_field('sidebar-gplus','Google Plus handler','nature_sidebar_gplus','masum-nature','nature-sidebar-options');

	//Theme Support Options
	register_setting('nature-theme-support','post_formats','nature_post_formats_callback');
	add_settings_section('nature-theme-options','Theme Options','nature_theme_options','masum_nature_theme');
	add_settings_field('post-formats','Post Formats','nature_post_formats','masum_nature_theme','nature-theme-options');
	
}
//Post Formats Callback Function
function nature_post_formats_callback($input){
	return $input;
}
function nature_theme_options(){
	echo 'Activate and Deactivate Specifiq Theme Support Options';
}
function nature_post_formats()
{
	$options = get_option('post_formats');
	$formats = array('aside','gallery','Link','image','quote','status','video','audio','chat');
	$output = '';
	foreach ($formats as $format) {
		$checked =  ( @$options[$format] ==1 ? 'checked' : '' );
		$output .= '<label><input type="checkbox" id="'.$format.'" name="post_formats['.$format.']" value="1" '.$checked.'/>'.$format.'</label><br>';
	}
	echo $output;

}

//Sidebar Options Functions
function nature_sidebar_options(){
	echo 'Customize your Sidebar Information';
}

function nature_sidebar_profile(){
	$ProfilePicture = esc_attr( get_option('profile_picture'));
	echo '<input type="button" class="button button-secondary" value="upload Profile picture" id="upload-button"><input type="hidden" id="profile-picture" name="profile_picture" value="'.$ProfilePicture.'">';
}		

function nature_sidebar_name(){
	$firstName = esc_attr( get_option('first_name'));
	$lastName = esc_attr( get_option('last_name'));
	echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name"> <input type="text" name="last_name" value="'.$lastName.'" placeholder="Last Name">';
}
function nature_sidebar_description(){
	$description = esc_attr( get_option('user_description'));
	echo '<input type="text" name="user_description" value="'.$description.'" placeholder="Description"><p class="description">Write something!</p>';
}
function nature_sidebar_twitter(){
	$twitter = esc_attr( get_option('twitter_handler'));
	echo '<input type="text" name="twitter_handler" value="'.$twitter.'" placeholder="Twitter handler"><p class="description">Input your Twitter username without the @ character.</p> ';	
}
function nature_sidebar_facebook(){
	$facebook = esc_attr( get_option('facebook_handler'));
	echo '<input type="text" name="facebook_handler" value="'.$facebook.'" placeholder="facebook handler">';
}
function nature_sidebar_gplus(){
	$gplus = esc_attr( get_option('gplus_handler'));
	echo '<input type="text" name="gplus_handler" value="'.$gplus.'" placeholder="Google+ handler">';
}

//Sanitization Settings
function nature_sanitize_twitter_handler( $input ){
	$output = sanitize_text_field($input);
	$output = str_replace('@','',$output);
	return $output;
}

//Template Menu/Submenu Funcions

function nature_theme_create_page(){
	//generation of our admin page

	require_once(get_template_directory() . '/inc/templates/nature-admin.php');

}
function masum_theme_support_page(){
	require_once(get_template_directory() . '/inc/templates/nature-theme-support.php');
}
function nature_theme_css_page(){
	echo '<h1>Custom CSS</h1>';

}