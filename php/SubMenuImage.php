<?php

class SubMenuImage extends SubMenuBase {

	protected function setMenu($value) {
		$html = "";
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($value->ID), 'post');
		$html .= "<img src='".$this->checkImage($thumb)."'>";
		$title = $this->changeHtml($value->post_title, $this->hook1,'<br/>');
		$html .= "<h4><span class='textMenu'>".$title."</span></h4>";

		return $html;
	}
	
}