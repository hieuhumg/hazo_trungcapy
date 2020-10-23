<?php
/**
 * ws247 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ws247
 */

if ( ! function_exists( 'ws247_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ws247_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ws247, use a find and replace
		 * to change 'ws247' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ws247', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'ws247' ),
		) );

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
add_action( 'after_setup_theme', 'ws247_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ws247_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'ws247_content_width', 640 );
}
add_action( 'after_setup_theme', 'ws247_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ws247_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Tin tức', 'ws247' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ws247' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Sản phẩm', 'ws247' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'ws247' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Ngôn ngữ', 'ws247' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add widgets here.', 'ws247' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ws247_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ws247_scripts() {
	wp_enqueue_style( 'ws247-style', get_stylesheet_uri() );
	wp_enqueue_style('css_bs4', get_template_directory_uri() . '/assets/plusgin/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('css_awesome', get_template_directory_uri() . '/assets/plusgin/fonts/font-awesome-4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('css_text', get_template_directory_uri() . '/assets/plusgin/fonts/text/stylesheet.css');
	wp_enqueue_style('css_fancybox', get_template_directory_uri() . '/assets/plusgin/box/jquery.fancybox.min.css');
	wp_enqueue_style('css_animate', get_template_directory_uri() . '/assets/plusgin/animation/animate.css');
	wp_enqueue_style('css_slick', get_template_directory_uri() . '/assets/plusgin/slick/slick.css');
	wp_enqueue_style('css_slicktheme', get_template_directory_uri() . '/assets/plusgin/slick/slick-theme.css');
	wp_enqueue_style('css_carousel', get_template_directory_uri() . '/assets/plusgin/carousel/owl.carousel.min.css');
	wp_enqueue_style('css_cdefault', get_template_directory_uri() . '/assets/plusgin/carousel/owl.theme.default.min.css');
	wp_enqueue_style('css_mobile', get_template_directory_uri() . '/assets/plusgin/menu-mobile/demo.css');
	wp_enqueue_style('css_style', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style('css_responsive', get_template_directory_uri() . '/assets/css/responsive.css');

	/* ================================================================================= */

	wp_enqueue_script( 'ws247-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '20151215', true );
	wp_enqueue_script( 'ws247-bootstrap', get_template_directory_uri() . '/assets/plusgin/bootstrap/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'ws247-fancybox', get_template_directory_uri() . '/assets/plusgin/box/jquery.fancybox.min.js', array(), '20151215', true );
	wp_enqueue_script( 'ws247-animation', get_template_directory_uri() . '/assets/plusgin/animation/wow.min.js', array(), '20151215', true );
	wp_enqueue_script( 'ws247-slick', get_template_directory_uri() . '/assets/plusgin/slick/slick.js', array(), '20151215', true );
	wp_enqueue_script( 'ws247-carousel', get_template_directory_uri() . '/assets/plusgin/carousel/owl.carousel.min.js', array(), '20151215', true );
	wp_enqueue_script( 'ws247-offcanvas', get_template_directory_uri() . '/assets/plusgin/menu-mobile/hc-offcanvas-nav.js', array(), '20151215', true );
	wp_enqueue_script( 'ws247-index', get_template_directory_uri() . '/assets/js/main.js', array(), '20151215', true );

	wp_enqueue_script( 'ws247-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'ws247-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ws247_scripts' );


/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Customizer Navbar
 */
require get_template_directory() . '/inc/custom/custom-navbar.php';

/**
 * Customizer Wordpress
 */
require get_template_directory() . '/inc/custom/custom-wp.php';

/**
 * Customizer Widgets
 */
require get_template_directory() . '/inc/custom/custom-widgets.php';

/**
 * Customizer Woo
 */
require get_template_directory() . '/inc/custom/custom-woo.php';




/**
 * Remove medium_large size
 */
function ws247_remove_image_sizes( $sizes) {
	unset( $sizes['large'] );
	unset( $sizes['medium_large'] );
	unset( $sizes['medium'] );
	return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'ws247_remove_image_sizes');

/**
* ACF
*/
// 1. customize ACF path
add_filter('acf/settings/path', 'willgroup_acf_settings_path');
function willgroup_acf_settings_path( $path ) {
	$path = get_stylesheet_directory() . '/inc/acf/';
	return $path;
}

// 2. customize ACF dir
add_filter('acf/settings/dir', 'willgroup_acf_settings_dir');
function willgroup_acf_settings_dir( $dir ) {
	$dir = get_stylesheet_directory_uri() . '/inc/acf/';
	return $dir;
}

// 3. Hide ACF field group menu item
// add_filter('acf/settings/show_admin', '__return_false');

// 4. Include ACF
include_once( get_stylesheet_directory() . '/inc/acf/acf.php' );


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_filter('use_block_editor_for_post', '__return_false');

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );
# MIME type correction for SVG files.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){
	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	else
		$dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );
// mime type has been reset, fix it
// and also check the user right
	if( $dosvg ){
		// allow
		if( current_user_can('manage_options') ){
			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// Block
		else {
			$data['ext'] = $type_and_ext['type'] = false;
		}
	}
	return $data;
}
/* show_svg_in_media_library
*===============================================================*/
add_filter( 'wp_prepare_attachment_for_js', 'show_svg_in_media_library' );
function show_svg_in_media_library( $response ) {
    if ( $response['mime'] === 'image/svg+xml' ) {
        $response['sizes'] = [
            'medium' => [
                'url' => $response['url'],
            ],
        ];
    }
    return $response;
}

//thêm single bài viết theo chuyên mục (đào tạo)
add_filter('single_template', 'check_for_category_single_template');
function check_for_category_single_template( $t )
{
       foreach( (array) get_the_category() as $cat )
       {
              if ( file_exists(TEMPLATEPATH . "/single-cat-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-cat-{$cat->slug}.php";
              if($cat->parent)
              {
                     $cat = get_the_category_by_ID( $cat->parent );
                     if ( file_exists(TEMPLATEPATH . "/single-cat-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-cat-{$cat->slug}.php";
              }
       }
       return $t;
}
//cài theme option
if( function_exists('acf_add_options_page') ) {
       acf_add_options_page(array(
              'page_title' 	=> 'Theme options', // Title hiển thị khi truy cập vào Options page
              'menu_title'	=> 'Theme options', // Tên menu hiển thị ở khu vực admin
              'menu_slug' 	=> 'theme-settings', // Url hiển thị trên đường dẫn của options page
              'capability'	=> 'edit_posts',
              'redirect'	=> false
       ));
}