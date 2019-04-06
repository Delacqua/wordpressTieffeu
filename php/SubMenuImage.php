<?php

class SubMenuImage extends SubMenuBase {

	private function menuConImg($value) {
		$html = "";
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($value->ID), 'post');
		$html .= "<img src='".$this->checkImage($thumb)."'>";
		$title = $this->changeHtml($value->post_title, $this->hook1,'<br/>');
		$html .= "<h4><span class='textMenu'>".$title."</span></h4>";

		return $html;
	}
	
	public function __construct($post){
		parent::__construct( $post );
		$html = "";

	    foreach ($this->pages as $key => $value) {
	    	$html .= "<li><a href='".$value->guid."'>";
	    	$html .= $this->menuConImg($value);
	        $html .= "</a></li>";
	    }

	    $this->subMenu = $html;
	}
}