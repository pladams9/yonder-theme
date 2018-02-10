<?php

function add_yonder_styles() {
  // Enqueue style.css
  wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'add_yonder_styles' );

?>
