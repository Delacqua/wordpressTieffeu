<?php

class Shortcode {

	private $slug;
	private $call;
	
	function __construct($slug,$class,$call) {
		$this->slug = $slug;
		$this->class = $class;
		$this->call = $call;	
	}

	public function getSlug() {
		return $this->slug;
	}

	public function getCall() {
		return $this->call;
	}

	public function getShortcode() {
		return add_shortcode( $this->slug, array( $this->class, $this->call ) );
	}

}