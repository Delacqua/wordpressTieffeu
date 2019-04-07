<?php

class SubMenuSenzaTesto extends SubMenuBase {

	protected function setMenu($value) {
		$html = "";
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($value->ID), 'post');
		$html .= "<img src='".$this->checkImage($thumb)."'>";

		return $html;
	}

}