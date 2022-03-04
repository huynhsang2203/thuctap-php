<?php 
/**
@Khai báo hằng giá trị
 **/

define('THEME_URL', get_stylesheet_directory());
define('CORE', THEME_URL."/core");

/*Nhúng vào file /core/init.php*/
require_once(CORE."/init.php");

function thuctap_theme_setup() {
	//Load textdomain thiết lập
	load_theme_textdomain( 'thuctap' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*Chuyển về trình soạn thảo phiên bản cũ*/
	add_filter('use_block_editor_for_post', '__return_false');

	// Custom background color.
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'f5efe0',
		)
	);

	//Tạo sidebar
	/**
	 * Creates a sidebar
	 * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
	 */
	$args = array(
		'name'          => __( 'Main Sidebar', 'thuctap' ),
		'id'            => 'main-sidebar',
		'description'   => __('Default sidebar'),
		'class'         => 'main-sidebar',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	);
	
	register_sidebar( $args );
	

	/*Tự động thêm link RSS lên <head>*/
	add_theme_support( 'automatic-feed-links' );

		// Thiết lập chiều rộng nội dung
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 620;
	}

	// Ảnh đại diện bài viết - post
	add_theme_support( 'post-thumbnails' );

	//Post format
	add_theme_support( 'post-formats', array(
		'image',
		'video',
		'gallery',
		'quote',
		'link'
	) );

		// Set post thumbnail size.
	set_post_thumbnail_size( 1200, 9999 );

	/*Đăng kí menu cho website*/
	register_nav_menu('menu-header',__( 'Menu header', 'thuctap' ));

	// Tự động thêm tiêu đề cho mỗi trang
	add_theme_support( 'title-tag' );

	// Add custom image size used in Cover Template.
	add_image_size( 'twentytwenty-fullscreen', 1980, 9999 );

	// Custom logo.
	$logo_width  = 120;
	$logo_height = 90;

	add_theme_support(
		'custom-logo',
		array(
			'height'      => $logo_height,
			'width'       => $logo_width,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
			'navigation-widgets',
		)
	);	

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );


}
add_action( 'init', 'thuctap_theme_setup' );
