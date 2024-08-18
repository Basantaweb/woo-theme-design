<?php
/**
 * woo-theme-design functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package woo-theme-design
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function woo_theme_design_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on woo-theme-design, use a find and replace
		* to change 'woo-theme-design' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'woo-theme-design', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'woo-theme-design' ),
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
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'woo_theme_design_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'woo_theme_design_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function woo_theme_design_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'woo_theme_design_content_width', 640 );
}
add_action( 'after_setup_theme', 'woo_theme_design_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function woo_theme_design_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'woo-theme-design' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'woo-theme-design' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'woo_theme_design_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function woo_theme_design_scripts() {
	wp_enqueue_style( 'woo-theme-design-style', get_stylesheet_uri(), array(), _S_VERSION );
	//wp_enqueue_style( 'woo-theme-design-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', array(), '5.15.3' );
	wp_enqueue_style( 'woo-theme-design-bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css', array(), '5.0.0' );
	wp_enqueue_style( 'woo-theme-design-LineIcons', get_template_directory_uri() .'/assets/css/LineIcons.3.0.css', array(), '3.0' );
	wp_enqueue_style( 'woo-theme-design-tiny-slider', get_template_directory_uri() .'/assets/css/tiny-slider.css', array(), '3.0' );
	wp_enqueue_style( 'woo-theme-design-glightbox', get_template_directory_uri() .'/assets/css/glightbox.min.css', array(), '3.0' );
	wp_enqueue_style( 'woo-theme-design-main', get_template_directory_uri() .'/assets/css/main.css', array(), '1.0' );
	//wp_enqueue_style( 'woo-theme-design-tiny-slider', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css', array(), '2.9.4' );
	wp_enqueue_style( 'woo-theme-design-style', get_template_directory_uri() . '/style.css', array(), _S_VERSION );
	wp_style_add_data( 'woo-theme-design-style', 'rtl', 'replace' );

	wp_enqueue_script( 'woo-theme-design-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'woo-theme-design-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'woo-theme-design-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'woo-theme-design-tiny-slider', get_template_directory_uri() . '/assets/js/tiny-slider.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'woo-theme-design-glightbox', get_template_directory_uri() . '/assets/js/glightbox.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'woo-theme-design-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'woo_theme_design_scripts' );

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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}


// Add custom menu walker
class Bootstrap_Nav_Walker extends Walker_Nav_Menu {
    // Start Level
    function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"sub-menu collapse\">\n";
    }

    // Start Element
    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $indent = ( $depth ) ? str_repeat("\t", $depth) : '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'nav-item'; // Add Bootstrap's nav-item class

        // Check if this menu item has children
        $has_children = !empty($args->has_children) && $args->has_children;

        if ($has_children) {
            $classes[] = 'dropdown'; // Add dropdown class for parent items
        }

        // Check if this menu item is the current page
        if (in_array('current-menu-item', $classes) || in_array('current-menu-ancestor', $classes) || in_array('current-page-parent', $classes) || in_array('current-page-ancestor', $classes)) {
            $classes[] = 'active';
        }

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names .'>';

        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';

        // Add Bootstrap classes for links
        if ($has_children) {
            $atts['href'] = '#'; // Prevent link navigation
            $atts['data-bs-toggle'] = 'collapse';
            $atts['data-bs-target'] = '#submenu-' . $item->ID;
            $atts['aria-controls'] = 'submenu-' . $item->ID;
            $atts['aria-expanded'] = 'false';
            $atts['class'] = 'dd-menu collapsed nav-link'; // Add classes for parent items with submenus
        } else {
            $atts['href'] = ! empty( $item->url ) ? $item->url : '';
            $atts['class'] = 'nav-link'; // Class for regular menu items

            // Add 'active' class to the <a> tag if the menu item is the current page
            if (in_array('active', $classes)) {
                $atts['class'] .= ' active';
            }
        }

        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args);

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters('the_title', $item->title, $item->ID);

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . $title . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    // End Element
    function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= "</li>\n";
    }

    // End Level
    function end_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }
}


//

function my_woocommerce_cart_count() {
    $count = WC()->cart->get_cart_contents_count();
    return $count;
}

//
function add_to_wishlist($product_id) {
    // Retrieve the existing wishlist items
    $wishlist_items = isset($_COOKIE['woo_webapp_wishlist']) ? unserialize($_COOKIE['my_custom_wishlist']) : array();

    // Add the new item to the array if it's not already there
    if (!in_array($product_id, $wishlist_items)) {
        $wishlist_items[] = $product_id;
    }

    // Store the updated wishlist back in the cookie
    setcookie('woo_webapp_wishlist', serialize($wishlist_items), time() + (86400 * 30), "/"); // 30 days
}

function my_custom_wishlist_count() {
    // Retrieve the wishlist items stored in a cookie or session
    $wishlist_items = isset($_COOKIE['my_custom_wishlist']) ? unserialize($_COOKIE['my_custom_wishlist']) : array();
    return count($wishlist_items);
}


