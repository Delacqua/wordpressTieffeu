<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
	<head>

		<meta charset="utf-8">
		<meta name="description" content="TIEFFEU, Teatro Figura Umbro">

	    <meta name="viewport" content="width=device-width">

		<?php $home = get_template_directory_uri(); ?>


		<title>Tieffeu<?php 
			if(!is_front_page())
				{ echo " - ";the_title(); } 
				else {
					 echo " - Teatro Figura Umbro";
				}
			?>
		</title>

		<?php wp_head(); ?>

	</head>

	<body>