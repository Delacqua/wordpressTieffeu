<?php

class Config {

	private static function loadStyles() {
		wp_enqueue_style( 'reset-style', get_template_directory_uri() . '/css/reset.css', array());
		wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/style.css', array());
		wp_enqueue_style( 'content-style', get_template_directory_uri() . '/css/content.css', array());
	}

	private static function loadJavascript() {
		wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ());
	}

	public static function loadScripts() {
		self::loadStyles();
		self::loadJavascript();
	} 

	public static function loadShortcodes() {
	    add_shortcode('menu_image', array("Menu", 'getMenuImg'));
	    add_shortcode('menu_senza_image', array("Menu", 'getMenuSenzaImg'));
	    add_shortcode('menu_senza_testo', array("Menu", 'getMenuSenzaTesto'));
	    add_shortcode('back_menu_interno', array("Menu", 'getMenuBack'));
	} 
}