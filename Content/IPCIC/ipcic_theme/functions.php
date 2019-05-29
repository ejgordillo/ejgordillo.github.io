<?php 
/**
* Theme functions and definitions
*@link https://developer.wordpress.org/themes/basics/theme-functions/
*
*@package WordPress
*@subpackage ipcic
*@since 1.0.0
*@version 1.0.0
*/

// $styles

function ipcic_styles() {
  wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.3.1');
  wp_register_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css', array(), '5.8.1');
  wp_register_style('fonts', 'https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:600,700', array(), '1.0.0');
  wp_register_style('style', get_stylesheet_directory_uri() . '/style.css', array('bootstrap'), '1.0.0');
  wp_register_style('ipcic', get_stylesheet_directory_uri() . '/assets/css/ipcic.css', array('bootstrap'), '1.0.0');
	wp_enqueue_style('bootstrap');
  wp_enqueue_style('fontawesome');
  wp_enqueue_style('fonts');
  wp_enqueue_style('style');
  wp_enqueue_style('ipcic');

    //Registrar js
  wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',array('jquery'),'4.3.1',true);
  wp_enqueue_script('bootstrap-bundle', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js',array('bootstrap'),'4.3.1',true);
	wp_enqueue_script('script', get_stylesheet_directory_uri().'/assets/js/script.js',array('bootstrap'),false,true);
}

add_action( 'wp_enqueue_scripts', 'ipcic_styles');

// $navs
function ipcic_nav_menus() {
	register_nav_menus(
		array(
			'header-one-menu' => 'Menú principal',
			'footer-menu' => 'Menú del footer',
			'social-menu' => 'Menú social'
		)
	);
}
add_action( 'init', 'ipcic_nav_menus' );
function add_additional_class_on_li($classes, $item, $args) {
  if($args->add_li_class) {
      $classes[] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

add_filter( 'nav_menu_link_attributes', 'class_main_nav', 10, 3);
function class_main_nav ($atts, $item, $args) {
	if( $args->theme_location == 'footer-menu' ) {
		$class = 'nav__link nav-link hover-white t-darkblue t__hover-white';
	} else if ( $args->theme_location == 'social-menu' ) {
		$class = 'nav__link nav-link hover-white t-darkblue t__hover-white';
	} else {
		$class = 'nav-link';
	}
	$atts['class'] = $class;
	return $atts;
}

// post thumbnails

if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 1200, 784 );
}


// $desactivar gutenberg
add_filter('use_block_editor_for_post_type', '__return_false', 100);
