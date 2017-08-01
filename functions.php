<?php
if ( ! function_exists( 'crispshop_theme_setup' ) ) :

function crispshop_theme_setup() {
	load_theme_textdomain( 'crispshop', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'woocommerce' );

	register_nav_menus( array(
		'primary_menu' => esc_html__( 'Primary Menu', 'crispshop' ),
	) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	$GLOBALS['content_width'] = apply_filters( 'crispshop_content_width', 1000 );
}
endif;

add_action( 'after_setup_theme', 'crispshop_theme_setup' );

require get_template_directory() . '/inc/theme-sidebars.php';

require get_template_directory() . '/inc/theme-scripts.php';

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/extras.php';

require get_template_directory() . '/inc/customizer.php';