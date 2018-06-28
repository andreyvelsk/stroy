<?php 
// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'invest_theme_styles' );
add_action( 'wp_footer', 'invest_theme_styles_footer' );
add_action( 'wp_enqueue_scripts', 'jquery_lib' );

function jquery_lib(){
	// необходимо разрегистрировать jquery  от wordpress  и подключить CDN
	wp_deregister_script( 'jquery-core' ); 
	wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/slick/slick.js', array('jquery'), null, true);
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function invest_theme_styles() {
	wp_enqueue_style( 'main', get_stylesheet_uri() ); //подклюение style.css
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css');
}

function invest_theme_styles_footer() {
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css'); 
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/slick/slick.css');
}


add_theme_support( 'custom-logo' );
 ?>