<?php 

// Add Scripts
function rsffl_add_scripts(){
	wp_enqueue_style( 'rsffl-main-style', plugins_url('/css/style.css', __FILE__ ) );
	wp_enqueue_script( 'rsffl-main-script', plugins_url('/js/main.js', __FILE__ ) );
}

add_action('wp_enqueue_scripts', 'rsffl_add_scripts');