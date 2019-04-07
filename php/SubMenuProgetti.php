<?php

class SubMenuProgetti extends SubMenuBase {

	private $hook2;
	private $subMenuTop;

	public	function __construct(){
		$this->hook2 = hook2;
		$this->linkImage = linkImage;
		$this->linkImage404 = linkImage404;
		parent::__construct('');
	}

	protected function checkSeparerei($obj) {

		foreach ($obj->classes as $value) {
			if ($value == $this->hook2) {
				$this->subMenuTop[] = $obj;
				
				return true;
			}
		}

		return false;
	}

	protected function setPages($post) {
		$menuLocations = get_nav_menu_locations();
        $menuID = $menuLocations['menuProgetti'];
        $menu = wp_get_nav_menu_items($menuID);

		$this->pages = $menu;
		$html = "";
		$htmlTop = "";

	    foreach ($this->pages as $value) {
	    	if ($this->checkSeparerei($value)) {
		    	$htmlTop .= $this->setMenuTop($value);
	    	}
	    	else {
		    	$html .= $this->setMenu($value);
	    	}
	    }

	    $this->subMenuTop = $htmlTop;
	    $this->subMenu = $html;
	}

	protected function setMenu($value) {
		$html = "";
		$html .= "<li><a href='".$value->url."'>";
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($value->object_id), 'post');
		$html .= "<img src='".$this->checkImage($thumb)."'>";
		$html .= "</a></li>";

		return $html;
	}

	protected function setMenuTop($value) {
		$htmlTop = "";
		$htmlTop .= "<li><a href='".$value->url."'>";
		$htmlTop .= "<div class='iconeMenuProgetto'></div>";
		$htmlTop .= $value->title;
		$htmlTop .= "</a></li>";

		return $htmlTop;
	}

	protected function setTitolo() {
		global $post;

		$html = "<div class='titoloPage titoloPageProgetti'>";
		$html .= "<h1>".$post->post_title."</h1>";
		$html .= "</div>";

        return $html;                    
	}

	protected function closeMenuTop() {
		$html = "<div class='menuProgetto'><ul>".$this->subMenuTop."</ul></div>";
		
		return $html;
	}


	public function getSubMenu() {
		$html = $this->closeMenuTop();
		$html .= $this->setTitolo();
		$this->subMenu .= $this->checkMenuMinimo($this->pages);
	    $this->subMenu = $this->closeMenu($this->subMenu);
	    $html .= $this->subMenu;

		return $html;
	}

}

 
