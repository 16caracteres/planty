<?php
   function planty_theme() {
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
   }
   add_action( 'wp_enqueue_scripts', 'planty_theme' );