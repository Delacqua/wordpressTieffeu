<?php

class Shortcodes {

	private $post;

    function __construct($post) {
    	$this->post = $post;
    	echo $post;
        add_shortcode('say_hello',  array($this, 'sayHelloShortcode'));
        add_shortcode('say_something_else',  array($this, 'saySomethingElseShortcode'));
    }
 
    function sayHelloShortcode($atts, $content = null) 
    {
        return "teste";
    }
 
    function saySomethingElseShortcode($atts, $content = null) 
    {
        return 'Something else';
    }
}