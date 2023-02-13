<?php
function portfolio_supports() {
    add_theme_support('title-tag');
}


function theme_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
 }
 add_action( 'wp_enqueue_scripts', 'theme_styles' );