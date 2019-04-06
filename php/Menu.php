<?php

class Menu {

	private static function checkIsAdmin() {
		if ( is_admin()){ return;}		
		global $post;
		return $post;
	}

	public static function getMenuImg() {
		$post = self::checkIsAdmin();
		$subMenu = new SubMenuImage($post);

		echo $subMenu->getSubMenu();
	}

	public static function getMenuSenzaImg() {
		$post = self::checkIsAdmin();
		$subMenu = new SubMenuSenzaImage($post);

		echo $subMenu->getSubMenu();
	}

	public static function getMenuSenzaTesto() {
		$post = self::checkIsAdmin();
		$subMenu = new SubMenuSenzaTesto($post);

		echo $subMenu->getSubMenu();
	}

	public static function getMenuBack() {
		$post = self::checkIsAdmin();

	    if ($post->post_parent) {
	        //echo "<a href=".get_home_url().">< Home</a>";
	        echo "<a href=".get_permalink( $post->post_parent ).">< Indietro</a>";
	    }
	    else {
	        echo "<a href=".get_home_url().">< Home</a>";
	    }

	}
}