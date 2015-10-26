<?php
/*
* Functions file for lander child theme
*/
 function lander_scripts() {
 	if (is_front_page()) {
 		wp_enqueue_style('lander-styles', get_stylesheet_directory_uri() . '/lander-style.css');
 		wp_enqueue_script('jqueryUI', get_stylesheet_directory_uri() . '/scripts/jquery-ui.min.js');
 		wp_enqueue_script('portfolio-script', get_stylesheet_directory_uri() . '/portfolio.js');
 	}
 	if (is_archive()) {
 		wp_enqueue_style('archive-styles', get_stylesheet_directory_uri() . '/archive.css');
 	}
 }

 add_action('wp_enqueue_scripts', 'lander_scripts');

 add_image_size('portfolio-thumb', 300, 175, true);
