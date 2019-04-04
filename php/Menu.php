<?php

class Menu {

	private static $linkImage = linkImage;
	private static $linkImage404 = linkImage404;
	private static $hook1 = hook1;

	private static function checkImage($img){

	  if (empty($img) || $img === NULL) {
	    $string = self::$linkImage404;
	  }
	  else {
	    $string = $img[0];
	  }

	  return $string;
	}

	private static function addItem($itemNumber) {
	    $_itemNumber = 0;
	    $linkImage = "<img src=".self::$linkImage.">";
	    $_html = "";
	    
	    while ($_itemNumber < $itemNumber) {
	        $_html .= "<li>{$linkImage}</li>";
	        $_itemNumber++;
	    }

	    return $_html;
	}


	private static function checkMenuMinimo($arr) {

	    if (count($arr)<6) {
	        return self::addItem(6 - count($arr));
	    }

	    if (count($arr) % 3) {
	    	$repeat = 3 - (count($arr) % 3);
	      	return self::addItem($repeat);
	    }

	    return "";
	}

	private static function closeMenu($_html) {
		return "<ul>{$_html}</ul>";
	}

	private static function changeHtml($phrase,$hook,$html) {
		return str_replace($hook,$html,$phrase);
	}

	private static function menuConImg($value) {
		$html = "";
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($value->ID), 'post');
		$html .= "<img src='".self::checkImage($thumb)."'>";
		$title = self::changeHtml($value->post_title, self::$hook1,'<br/>');
		$html .= "<h4><span class='textMenu'>".$title."</span></h4>";

		return $html;
	}

	private static function menuSenzaImg($value) {
		$title = self::changeHtml($value->post_title,self::$hook1,'<br/>');
		$html = "<h5><span class='textMenu'>".$title."</span></h5>";
		return $html;
	}

	private static function makeMenu($pages,$img) {

		$html = "";

	    foreach ($pages as $key => $value) {
	    	$html .= "<li><a href='".$value->guid."'>";
	    	if ($img) { $html .= self::menuConImg($value); }
	        else { $html .= self::menuSenzaImg($value); }
	        $html .= "</a></li>";
	    }

	    $html .= self::checkMenuMinimo($pages);
	    $html = self::closeMenu($html);

	    return $html;
	   
	}

	public static function getMenuImg() {
		if ( is_admin()){ return;}
		
		global $post;
    	$mypages = get_pages('parent='.$post->ID.'&sort_column=menu_order');

		echo self::makeMenu($mypages,true);
	}

	public static function getMenuSenzaImg() {
		if ( is_admin()){ return;}

		global $post;
    	$mypages = get_pages('parent='.$post->ID.'&sort_column=menu_order');

		echo self::makeMenu($mypages,false);
	}

	public static function getMenuBack() {
		if ( is_admin()){ return;}

		global $post;

	    if ($post->post_parent) {
	        //echo "<a href=".get_home_url().">< Home</a>";
	        echo "<a href=".get_permalink( $post->post_parent ).">< Indietro</a>";
	    }
	    else {
	        echo "<a href=".get_home_url().">< Home</a>";
	    }

	}
}