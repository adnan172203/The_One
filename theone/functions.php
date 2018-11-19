<?php
/**
 * TheOne functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package TheOne
 */

if ( ! function_exists( 'theone_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function theone_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on TheOne, use a find and replace
		 * to change 'theone' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'theone', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'theone' ),
			'menu-2' => esc_html__( 'Footer', 'theone' ),
			'menu-3' => esc_html__( 'Mobile', 'theone' ),
			'menu-4' => esc_html__( 'Sidebar', 'theone' ),
		) );

		// Add theme support for images siza.
		add_image_size('theone-770-410', 770, 400, true );
		add_image_size('theone-95-85', 93, 83, true );
		add_image_size('theone-370-270', 370, 270, true );
		add_image_size('theone-480-480', 480, 480, true );
		add_image_size('theone-260-290', 260, 290, true );
		add_image_size('theone-360-315', 360, 315, true );
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'theone_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'theone_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function theone_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'theone_content_width', 640 );
}
add_action( 'after_setup_theme', 'theone_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function theone_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'theone' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'theone' ),
		'before_widget' => '<div id="%1$s" class="widget widget-element %2$s">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<div class="widget-title"><h5>',
		'after_title'   => '</h5></div><div class="widget-wrapper">',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Service Page Sidebar', 'theone' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'theone' ),
		'before_widget' => '<div id="%1$s" class="widget widget-element %2$s">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<div class="widget-title"><h5>',
		'after_title'   => '</h5></div><div class="widget-wrapper">',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'theone' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add widgets here.', 'theone' ),
		'before_widget' => '<div id="%1$s" class="footer-widget-element %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="footer-widget-heading"><h4>',
		'after_title'   => '</h4></div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'WooCommerce Widget', 'theone' ),
		'id'            => 'sidebar-4',
		'description'   => esc_html__( 'Add widgets here.', 'theone' ),
		'before_widget' => '<div id="%1$s" class="widget-element %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="shop-widget-heading"><h6>',
		'after_title'   => '</h6></div>',
	) );
}
add_action( 'widgets_init', 'theone_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function theone_scripts() {
	wp_enqueue_style( 'theone-style', get_stylesheet_uri() );

	wp_enqueue_style( 'theone-swiper', get_template_directory_uri() . '/assets/css/swiper.min.css', array(), '', false );
	wp_enqueue_style( 'theone-lightcase', get_template_directory_uri() . '/assets/css/lightcase.css', array(), '', false );
	wp_enqueue_style( 'theone-animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '', false );
	wp_enqueue_style( 'theone-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '', false );
	wp_enqueue_style( 'theone-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '', false );
	wp_enqueue_style( 'theone-custom-style', get_template_directory_uri() . '/assets/css/style.css', array(), '', false );
	wp_enqueue_style( 'theone-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '', false );
//Enqueue Script
	 //wp_register_script('jquery', get_stylesheet_directory_uri() . '/assets/js/jquery-3.1.1.min.js', false);
	wp_enqueue_script( 'theone-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'theone-easing', get_template_directory_uri() . '/assets/js/easing.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'theone-waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.js', array('jquery'), false, true );
	wp_enqueue_script( 'theone-counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'theone-isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'theone-function', get_template_directory_uri() . '/assets/js/isotope.function.js', array('jquery'), false, true );
	wp_enqueue_script( 'theone-masonry', get_template_directory_uri() . '/assets/js/isotope.masonry.js', array('jquery'), false, true );
	wp_enqueue_script( 'theone-flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js', array('jquery'), false, true );
	wp_enqueue_script( 'theone-lightcase', get_template_directory_uri() . '/assets/js/lightcase.js', array('jquery'), false, true );
	wp_enqueue_script( 'theone-nstSlider', get_template_directory_uri() . '/assets/js/jquery.nstSlider.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'theone-swiper-jquery', get_template_directory_uri() . '/assets/js/swiper.jquery.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'theone-circle-progress', get_template_directory_uri() . '/assets/js/circle.progress.js', array('jquery'), false, true );
	wp_enqueue_script( 'theone-preloader', get_template_directory_uri() . '/assets/js/preloader.js', array('jquery'), false, true );
	wp_enqueue_script( 'thewrweone-custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), false, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theone_scripts' );


/**
 * Enqueue scripts and styles Backend.
 */
function theone_admin_pannel_scripts() {
 //wp_register_style('theone-admin-style', get_template_directory_uri() .'assets/css/admin-style.css',false);
 //wp_enqueue_style( 'theone-admin-style' );
 wp_register_script( 'admin-script',  get_template_directory_uri() . '/assets/js/admin-script.js',array('jquery'));
 wp_enqueue_script( 'admin-script' );
}
 add_action('admin_enqueue_scripts', 'theone_admin_pannel_scripts', 90);

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Braedcrumb additions.
 */
require get_template_directory() . '/inc/braedcrumbs.php';


/**
 * woo-hooks additions.
 */
require get_template_directory() . '/inc/woo-hooks.php';

/**
 * Require tgm plugin activation file
 */
require get_template_directory() . '/inc/tgm-plugin-activation/tgm-plugin-setup.php';

/**
 * Hooks additions.
 */
require get_template_directory() . '/inc/hooks.php';

/**
 * Typography file(static.php)
 */
require get_template_directory() . '/inc/static.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
/**
 * Require wp-bootstrap-navwalker file
 */
require get_template_directory() . '/inc/wp-bootstrap-navwalker.php';
/**
/**
 * Require Comment template
 */
require get_template_directory() . '/inc/includes/comment-template.php';
/**
 * Require widgets file
 */
require get_template_directory() . '/inc/widgets/categories/theone-widget-categories.php';
require get_template_directory() . '/inc/widgets/popular-post/theone-widget-popular-post.php';
require get_template_directory() . '/inc/widgets/advertisement/theone-widget-advertisement.php';
require get_template_directory() . '/inc/widgets/about/theone-widget-about.php';
require get_template_directory() . '/inc/widgets/footer-menu/theone-widget-footer-menu.php';
require get_template_directory() . '/inc/widgets/sidebar-menu/theone-widget-sidebar-menu.php';
require get_template_directory() . '/inc/widgets/footer-newslatter/theone-widget-footer-newslatter.php';
require get_template_directory() . '/inc/widgets/sidebar-newslatter/theone-widget-sidebar-newslatter.php';
require get_template_directory() . '/inc/widgets/woo-category/theone-widget-woo-category.php';

//TheOne move comment fields
function theone_move_comment( $fields ) {
    $comment_field = $fields[ 'comment' ];
    unset( $fields[ 'comment' ] );
    $fields[ 'comment' ] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'theone_move_comment' );

//WooCommerce Support
function theone_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
	add_theme_support('wc-product-gallery-zoom');
	add_theme_support('wc-product-gallery-lightbox');
	add_theme_support('wc-product-gallery-slider');
}
add_action( 'after_setup_theme', 'theone_add_woocommerce_support' );