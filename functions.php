<?php
/**
 * hoanganh functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hoanganh
 */
session_start();
if ( ! function_exists( 'hoanganh_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hoanganh_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on hoanganh, use a find and replace
		 * to change 'hoanganh' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'hoanganh', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'hoanganh' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'hoanganh_custom_background_args', array(
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
add_action( 'after_setup_theme', 'hoanganh_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hoanganh_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'hoanganh_content_width', 640 );
}
add_action( 'after_setup_theme', 'hoanganh_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hoanganh_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'hoanganh' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'hoanganh' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'hoanganh_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hoanganh_scripts() {
	wp_enqueue_style( 'hoanganh-style', get_stylesheet_uri() );

	wp_enqueue_script( 'hoanganh-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'hoanganh-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hoanganh_scripts' );

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
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

require get_template_directory() . '/includes/Bootstrap.php';
function translate_i18n($text) {
    return \includes\Bootstrap::bootstrap()->language->translateText($text);
}

function translateText($text) {
    return \includes\Bootstrap::bootstrap()->language->translateText($text);
}

function get_breadcrumb() {
    ?>
    <div class="container">
        <nav class="breadcrumb-wapper">
            <ul class="breadcrumb">
                <?php
                echo '<li class="breadcrumb__item"><a class="breadcrumb__link" href="'.home_url().'">home</a></li>';
                if (is_category() || is_single()) {
                    $cat = get_the_category();
                    if (!empty($cat)) {
                        echo "<i class=\"fas fa-angle-right\"></i>";
                        echo $cat . ' &bull; ';
                    }

                    if (is_single()) {
                        echo '<i class="fas fa-angle-right"></i>';
                        echo '<li class="breadcrumb__item active">
                                <a class="breadcrumb__link active" href="#">'.get_the_title().'</a>
                                </li>';
                    }
                } elseif (is_page()) {
                    echo '<i class="fas fa-angle-right"></i>';
                    echo '<li class="breadcrumb__item active">
                            <a class="breadcrumb__link active" href="#">'.get_the_title().'</a>
                           </li>';
                } elseif (is_search()) {
                    echo '<i class="fas fa-angle-right"></i>Search Results for... ';
                    echo '"<em>';
                    echo the_search_query();
                    echo '</em>"';
                }
                ?>
            </ul>
        </nav>
    </div>
    <?php
}

/**
 * import acf 
 */
define('KEY_MAP', 'AIzaSyC_5pPy8mvpqkeABmBfEMMqSCdLhEwDMO4');
require get_template_directory() . '/acfs/scripts.php';
function my_acf_init() {
    acf_update_setting('google_api_key', KEY_MAP);
}

add_action('acf/init', 'my_acf_init');

if (!isset($_SESSION['i18n'])) {
    $_SESSION['i18n'] = [];
}

if (isset($_GET['i18n']) && $_GET['i18n'] == base64_encode('i18n')) {
    echo json_encode($_SESSION['i18n'], JSON_UNESCAPED_UNICODE);
    die;
}