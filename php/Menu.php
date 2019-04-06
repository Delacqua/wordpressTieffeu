<?php

class Menu {

	private static function checkIsAdmin() {
		if ( is_admin()){ return false;}		
		global $post;
		return $post;
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

	    if ($post->post_parent) {
	        //echo "<a href=".get_home_url().">< Home</a>";
	        echo "<a href=".get_permalink( $post->post_parent ).">< Indietro</a>";
	    }
	    else {
	        echo "<a href=".get_home_url().">< Home</a>";
	    }

	}
}