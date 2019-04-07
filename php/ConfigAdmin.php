<?php


class ConfigAdmin {

	private static function componenti() {
		add_theme_support( 'post-thumbnails' );
		add_filter( 'use_default_gallery_style', '__return_false' );
	}

	private static function nuovoMenu() {
		register_nav_menus(
			array(
			  'menuIndex' => __( 'Menu Index' ),
			  'menuProgetti' => __( 'Menu Progetti' )
			)
		);
	}
	
	private static function removeMenu() {
		remove_menu_page('edit.php'); //post
		remove_menu_page( 'edit-comments.php' );//Comments
		remove_menu_page( 'tools.php' ); //Tools
	}

	private static function registerWidget() {

		if (function_exists('register_sidebar')) {
			  register_sidebar(array(
			    'name' => 'Widgetized Area',
			    'id'   => 'widgetized-area',
			    'description'   => 'This is a widgetized area.',
			    'before_widget' => '<div id="%1$s" class="widget %2$s">',
			    'after_widget'  => '</div>',
			    'before_title'  => '<h4>',
			    'after_title'   => '</h4>'
			  ));

			}
	}


	public static function loadInit() {
		self::componenti();
		self::nuovoMenu();
	}

	public static function loadAdmin() {
		self::removeMenu();
	}

	public static function loadWidget() {
		self::registerWidget();
	}
}