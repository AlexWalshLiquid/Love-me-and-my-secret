<?php
/** Adding TM Menu in admin panel. */
function my_plugin_menu() {	
	add_theme_page( esc_html__('Theme Settings','shine-fashion'), esc_html__('TM Theme Settings','shine-fashion'), 'manage_options', 'tm_theme_settings', 'templatemela_theme_settings_page' );		
	add_theme_page( esc_html__('Hook Manager','shine-fashion'), esc_html__('TM Hook Manager','shine-fashion'), 'manage_options', 'tm_hook_manage', 'templatemela_hook_manage_page');	
}
?>