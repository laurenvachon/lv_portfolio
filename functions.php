<?php

// add menu to theme
  add_theme_support( 'menus' );
  function register_theme_menus() {
    register_nav_menus(
      array(
        'primary-menu' => __( 'Primary Menu' )
      )
    );
  }
  add_action( 'init', 'register_theme_menus' );

// add theme support for post thumbnails
  add_theme_support( 'post-thumbnails' );


// custom css
  function lv_theme_styles() {
    wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
    wp_enqueue_style( 'fontawesome_css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'fancybox_css', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
  }
  add_action( 'wp_enqueue_scripts', 'lv_theme_styles');


// custom js
  function lv_theme_js () {
    // nickname, command to get template, filename, array of dependents, specific version, true if you want it to appear in footer
    wp_enqueue_script( 'jquery_js' , 'https://code.jquery.com/jquery-2.2.4.min.js', ' ', '', false );
    wp_enqueue_script( 'bootstrap_js' , 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', '', '', false );
    wp_enqueue_script( 'fancybox_js' , 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js', '', '', false );
    wp_enqueue_script( 'typekit_js' , 'https://use.typekit.net/gzj6slz.js', '', '', false );
    wp_enqueue_script( 'typekitalso_js' , 'try{Typekit.load({ async: true });}catch(e){}', '', '', false );
    wp_enqueue_script( 'script_js' , get_template_directory_uri() . '/js/script.js', '', '', false );
  }
  add_action( 'wp_enqueue_scripts', 'lv_theme_js' );



// add page name to body_class
  function add_slug_body_class( $classes ) {
  global $post;
  if ( isset( $post ) ) {
  $classes[] = $post->post_type . '-' . $post->post_name;
  }
  return $classes;
  }
  add_filter( 'body_class', 'add_slug_body_class' );


 ?>
