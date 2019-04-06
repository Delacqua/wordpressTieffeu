<?php

class MenuBack {
	
	public function getMenu($post){
		
		if ($post->post_parent) {
	        //echo "<a href=".get_home_url().">< Home</a>";
	        return "<a href=".get_permalink( $post->post_parent ).">< Indietro</a>";
	    }
	    else {
	        return "<a href=".get_home_url().">< Home</a>";
	    }
	}

}