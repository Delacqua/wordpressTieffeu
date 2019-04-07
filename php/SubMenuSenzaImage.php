<?php


class SubMenuSenzaImage extends SubMenuBase {

	protected function setMenu($value) {
		$title = $this->changeHtml($value->post_title,$this->hook1,'<br/>');
		$html = "<h5><span class='textMenu'>".$title."</span></h5>";
		return $html;
	}
}