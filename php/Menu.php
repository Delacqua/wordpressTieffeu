<?php

class Menu {

	private static $linkImage = "http://www.tieffeu.com/wordpress/wp-content/uploads/2019/03/noImg.png";
	private static $linkImage404 = "http://www.tieffeu.com/wordpress/wp-content/uploads/2019/03/noImg2.jpg";

	private function checkImage($img){

	  if (empty($img) || $img === NULL) {
	    $string = self::$linkImage404;
	  }
	  else {
	    $string = $img[0];
	  }

	  return $string;
	}

	private function addItem($itemNumber) {
	    $_itemNumber = 0;
	    $linkImage = "<img src=".self::$linkImage.">";
	    $_html = "";
	    
	    while ($_itemNumber < $itemNumber) {
	        $_html .= "<li>{$linkImage}</li>";
	        $_itemNumber++;
	    }

	    return $_html;
	}


	private function checkMenuMinimo($arr) {

	    if (count($arr)<6) {
	        return self::addItem(6 - count($arr));
	    }

	    if (count($arr) % 3) {
	    	$repeat = 3 - (count($arr) % 3);
	      	return self::addItem($repeat);
	    }

	    return "";
	}

	private function closeMenu($_html) {
		return "<ul>{$_html}</ul>";
	}

	private function menuConImg($value) {
		$html = "";
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($value->ID), 'post');
		$html .= "<img src='".self::checkImage($thumb)."'>";
		$html .= "<h4><span>".$value->post_title."</span></h4>";

		return $html;
	}

	private function menuSenzaImg($value) {
		$html = "<h5><span>".$value->post_title."</span></h5>";
		return $html;
	}

	private function makeMenu($pages,$img) {

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

	public static function getMenuImg($pages) {
		return self::makeMenu($pages,true);
	}

	public static function getMenuSenzaImg($pages) {
		return self::makeMenu($pages,false);
	}

	public static function getMenuBack($post) {

	    if ($post->post_parent) {
	        //echo "<a href=".get_home_url().">< Home</a>";
	        return "<a href=".get_permalink( $post->post_parent ).">< Indietro</a>";
	    }
	    else {
	        return "<a href=".get_home_url().">< Home</a>";
	    }

	}
}