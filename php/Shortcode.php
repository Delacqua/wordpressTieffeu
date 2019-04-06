<?php 

class Shortcode {

	protected $slug;
	protected $class;
	protected $call;
	
	function __construct($slug, $class, $call) {
		$this->slug = $slug;
		$this->class = $class;
		$this->call = $call;
	}

	public function getSlug() {
		return $this->slug;
	}

	public function getClass() {
		return $this->class;
	}

	public function getCall() {
		return $this->call;
	}
}