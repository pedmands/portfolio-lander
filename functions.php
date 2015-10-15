<?php
/*
* Functions file for lander child theme
*/
 function lander_scripts() {
 	if (is_front_page() || is_page() ) {
 		wp_enqueue_style('lander-styles', get_stylesheet_directory_uri() . '/lander-style.css');
 	}
 }

 add_action('wp_enqueue_scripts', 'lander_scripts');