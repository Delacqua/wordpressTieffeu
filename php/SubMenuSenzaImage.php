<?php


class SubMenuSenzaImage extends SubMenuBase {

	private function menuSenzaImg($value) {
		$title = $this->changeHtml($value->post_title,$this->hook1,'<br/>');
		$html = "<h5><span class='textMenu'>".$title."</span></h5>";
		return $html;
	}
	
	public function __construct($post) {
		parent::__construct( $post );
		$html = "";

	    foreach ($this->pages as $key => $value) {
	    	$html .= "<li><a href='".$value->guid."'>";
	        $html .= $this->menuSenzaImg($value);
	        $html .= "</a></li>";
	    }

	    $this->subMenu = $html;
	}
}