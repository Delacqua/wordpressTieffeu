<?php

class SubMenuSenzaTesto extends SubMenuBase {

	private function menuSenzaTesto($value) {
		$html = "";
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($value->ID), 'post');
		$html .= "<img src='".$this->checkImage($thumb)."'>";

		return $html;
	}
	
	public function __construct($post){
		parent::__construct( $post );
		$html = "";

	    foreach ($this->pages as $key => $value) {
	    	$html .= "<li><a href='".$value->guid."'>";
	    	$html .= $this->menuSenzaTesto($value);
	        $html .= "</a></li>";
	    }

	    $this->subMenu = $html;
	}
}