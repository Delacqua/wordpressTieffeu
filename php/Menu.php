<?php

class Menu {

	private static function checkIsAdmin() {
		if ( is_admin()){ return false;}		
		global $post;
		return $post;
	}

	public static function getShortcodes() {
		$shortcodes = array( $shortcode1 = new Shortcode('menu_image','Menu','getMenuImg'), 
						$shortcode2 = new Shortcode('menu_senza_image','Menu','getMenuSenzaImg'),
						$shortcode3 = new Shortcode('menu_senza_testo','Menu','getMenuSenzaTesto'),
						$shortcode4 = new Shortcode('back_menu_interno','Menu','getMenuBack'),
						$shortcode5 = new Shortcode('menu_progetti','Menu','getMenuProgetti'));
		
		return $shortcodes;
	}

	public static function getMenuImg() {
		if (!$post = self::checkIsAdmin()) {return;}
		$subMenu = new SubMenuImage($post);

		echo $subMenu->getSubMenu();
	}

	public static function getMenuSenzaImg() {
		if (!$post = self::checkIsAdmin()) {return;}
		$subMenu = new SubMenuSenzaImage($post);
		echo $subMenu->getSubMenu();
	}

	public static function getMenuSenzaTesto() {
		if (!$post = self::checkIsAdmin()) {return;}
		$subMenu = new SubMenuSenzaTesto($post);

		echo $subMenu->getSubMenu();
	}

	public static function getMenuBack() {
		if (!$post = self::checkIsAdmin()) {return;}
		$menu = new MenuBack();

		echo $menu->getMenu($post);
	}

	public static function getMenuProgetti( $atts, $content = null) {
		if (!$post = self::checkIsAdmin()) {return;}
		$subMenu = new SubMenuProgetti();

		return $subMenu->getSubMenu($atts, $content);

	}
}