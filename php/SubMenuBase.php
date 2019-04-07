<?php

abstract class SubMenuBase {

	protected $linkImage;
	protected $linkImage404;
	protected $hook1;

	protected $pages;
	protected $subMenu;

	public	function __construct($post){
		$this->linkImage = linkImage;
		$this->linkImage404 = linkImage404;
		$this->hook1 = hook1;
		$this->setPages($post);

	}

	abstract protected function setMenu($value);

	protected function setPages($post) {
		$this->pages = get_pages('parent='.$post->ID.'&sort_column=menu_order');
		$html = "";

	    foreach ($this->pages as $key => $value) {
	    	$html .= "<li><a href='".$value->guid."'>";
	    	$html .= $this->setMenu($value);
	        $html .= "</a></li>";
	    }

	    $this->subMenu = $html;
	}

	protected function checkImage($img){

	  if (empty($img) || $img === NULL || !$img) {
	    $string = $this->linkImage404;
	  }
	  else {
	    $string = $img[0];
	  }

	  return $string;
	}

	protected function addItem($itemNumber) {
	    $_itemNumber = 0;
	    $linkImage = "<img src=".$this->linkImage.">";
	    $_html = "";
	    
	    while ($_itemNumber < $itemNumber) {
	        $_html .= "<li>{$linkImage}</li>";
	        $_itemNumber++;
	    }

	    return $_html;
	}

	protected function checkMenuMinimo($arr) {

	    if (count($arr)<6) {
	        return $this->addItem(6 - count($arr));
	    }

	    if (count($arr) % 3) {
	    	$repeat = 3 - (count($arr) % 3);
	      	return $this->addItem($repeat);
	    }

	    return "";
	}

	protected function changeHtml($phrase,$hook,$html) {
		return str_replace($hook,$html,$phrase);
	}

	protected function closeMenu($_html) {
		$html = "<div class='submenu'><ul>{$_html}</ul></div>";
		$html .= "<script type='text/javascript'> checkMisure(); </script>";
		return $html;
	}

	public function getSubMenu() {
		$this->subMenu .= $this->checkMenuMinimo($this->pages);
	    $this->subMenu = $this->closeMenu($this->subMenu);

		return $this->subMenu;
	}


}