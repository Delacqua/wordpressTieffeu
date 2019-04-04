<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
	<head>

		<meta charset="utf-8">
		<meta name="description" content="TIEFFEU, Teatro Figura Umbro">

	    <meta name="viewport" content="width=device-width">

	    <!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137729994-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-137729994-1');
		</script>

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