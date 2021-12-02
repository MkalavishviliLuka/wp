<?php 
function add_wp_styles()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), filemtime(get_template_directory() .  '/assets/css/bootstrap.css'), false, 'all');
    wp_enqueue_style('maicons', get_template_directory_uri() . '/assets/css/maicons.css', array(), filemtime(get_template_directory() .  '/assets/css/maicons.css'), false, 'all');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/vendor/animate/animate.css', array(), filemtime(get_template_directory() .  '/assets/vendor/animate/animate.css'), false, 'all');
    wp_enqueue_style('owlCar', get_template_directory_uri() . '/assets/vendor/owl-carousel/css/owl.carousel.css', array(), filemtime(get_template_directory() .  '/assets/vendor/owl-carousel/css/owl.carousel.css'), false, 'all');
    wp_enqueue_style('jqueryy', get_template_directory_uri() . '/assets/vendor/fancybox/css/jquery.fancybox.css', array(), filemtime(get_template_directory() .  '/assets/vendor/fancybox/css/jquery.fancybox.css'), false, 'all');
    wp_enqueue_style('theme', get_template_directory_uri() . '/assets/css/theme.css', array(), filemtime(get_template_directory() .  '/assets/css/theme.css'), false, 'all');
}
add_action('wp_enqueue_scripts', 'add_wp_styles');

function add_wp_scripts()
{
    wp_enqueue_script('jquery-main', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', array(), '3.5.1', true, 'all');
    wp_enqueue_script('bootstrap-boundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0', true, 'all');
    wp_enqueue_script('owl-carousel-js', get_template_directory_uri() . '/assets/vendor/owl-carousel/js/owl.carousel.min.js', array(), '1.0', true, 'all');
    wp_enqueue_script('wow-js', get_template_directory_uri() . '/assets/vendor/wow/wow.min.js', array(), '1.0', true, 'all');
    wp_enqueue_script('fancy-js', get_template_directory_uri() . '/assets/vendor/fancybox/js/jquery.fancybox.min.js', array(), '1.0', true, 'all');
    wp_enqueue_script('isotope-js', get_template_directory_uri() . '/assets/vendor/isotope/isotope.pkgd.min.js', array(), '1.0', true, 'all');
    wp_enqueue_script('maps-js', get_template_directory_uri() . '/assets/js/google-maps.js', array(), '1.0', true, 'all');
    wp_enqueue_script('theme-js', get_template_directory_uri() . '/assets/js/theme.js', array(), '1.0', true, 'all');
}

add_action('wp_enqueue_scripts', 'add_wp_scripts');

add_action('init', 'all_menus');
function all_menus(){
  $menus = array(
      'main-menu' =>'header-main',
      'footer-menu' =>'footer-main',
      'footer-contact' =>'footer-contact',
  ) ;
  register_nav_menus($menus);
};

add_theme_support('post-thumbnails');
add_theme_support('screenshot');