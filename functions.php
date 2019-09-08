<?php
function themebs_enqueue_styles() {

        wp_enqueue_style( 'bootstrap4', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
        wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );

      }
      add_action( 'wp_enqueue_scripts', 'themebs_enqueue_styles'); 