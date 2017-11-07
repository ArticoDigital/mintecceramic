<?php
/**
 * mintecceramic functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mintecceramic
 */

if (!function_exists('mintecceramic_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function mintecceramic_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on mintecceramic, use a find and replace
         * to change 'mintecceramic' to the name of your theme in all the template files.
         */
        load_theme_textdomain('mintecceramic', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'mintecceramic'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('mintecceramic_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'mintecceramic_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mintecceramic_content_width()
{
    $GLOBALS['content_width'] = apply_filters('mintecceramic_content_width', 640);
}

add_action('after_setup_theme', 'mintecceramic_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mintecceramic_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'mintecceramic'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'mintecceramic'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'mintecceramic_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function mintecceramic_scripts()
{
    wp_enqueue_style('mintecceramic-style', get_stylesheet_uri());

    wp_enqueue_script('mintecceramic-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

    wp_enqueue_script('mintecceramic-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'mintecceramic_scripts');

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
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}
function get_excerpt($count){
    $permalink = get_permalink($post->ID);
    $excerpt = get_the_content();
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $count);
    $excerpt = $excerpt.'...';
    return $excerpt;
}

function banner_init()
{
    $labels = array(
        'name' => _x('Banner', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Banner', 'post type general name', 'your-plugin-textdomain'),
        'menu_name' => _x('Banner', 'admin menu', 'your-plugin-textdomain'),
        'name_admin_bar' => _x('Banner', 'add new on admin bar', 'your-plugin-textdomain'),
        'add_new' => _x('Añadir nuevo', 'Banner', 'your-plugin-textdomain'),
        'add_new_item' => __('Añadir nuevo Banner', 'your-plugin-textdomain'),
        'new_item' => __('Nuevo Banner', 'your-plugin-textdomain'),
        'edit_item' => __('Editar Banner', 'your-plugin-textdomain'),
        'view_item' => __('Ver Banner', 'your-plugin-textdomain'),
        'all_items' => __('Todos los Banner', 'your-plugin-textdomain'),
        'search_items' => __('Buscar Banner', 'your-plugin-textdomain'),
        'parent_item_colon' => __('Banner padre', 'your-plugin-textdomain'),
        'not_found' => __('No hemos encontrado Banner.', 'your-plugin-textdomain'),
        'not_found_in_trash' => __('No hemos encontrado Banner en la papelera', 'your-plugin-textdomain'),
    );

    $args = array(
        'labels' => $labels,
        'description' => __('Description', 'your-plugin-textdomain'),
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'banner'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-images-alt',
        'supports' => array('title', 'editor', 'author', 'thumbnail')
    );

    register_post_type('banner', $args);
}

add_action('init', 'banner_init');


function servicios_init()
{
    $labels = array(
        'name' => _x('Servicios', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Servicios', 'post type general name', 'your-plugin-textdomain'),
        'menu_name' => _x('Servicios', 'admin menu', 'your-plugin-textdomain'),
        'name_admin_bar' => _x('Servicios', 'add new on admin bar', 'your-plugin-textdomain'),
        'add_new' => _x('Añadir nuevo', 'Servicio', 'your-plugin-textdomain'),
        'add_new_item' => __('Añadir nuevo Servicio', 'your-plugin-textdomain'),
        'new_item' => __('Nuevo Servicio', 'your-plugin-textdomain'),
        'edit_item' => __('Editar Servicio', 'your-plugin-textdomain'),
        'view_item' => __('Ver Servicio', 'your-plugin-textdomain'),
        'all_items' => __('Todos los Servicios', 'your-plugin-textdomain'),
        'search_items' => __('Buscar Servicio', 'your-plugin-textdomain'),
        'parent_item_colon' => __('Servicio padre', 'your-plugin-textdomain'),
        'not_found' => __('No hemos encontrado Servicio.', 'your-plugin-textdomain'),
        'not_found_in_trash' => __('No hemos encontrado Servicio en la papelera', 'your-plugin-textdomain'),
    );

    $args = array(
        'labels' => $labels,
        'description' => __('Description', 'your-plugin-textdomain'),
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'servicios'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-list-view',
        'supports' => array('title', 'editor', 'author', 'thumbnail')
    );

    register_post_type('servicios', $args);
}

add_action('init', 'servicios_init');

function clientes_init()
{
    $labels = array(
        'name' => _x('Clientes', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Clientes', 'post type general name', 'your-plugin-textdomain'),
        'menu_name' => _x('Clientes', 'admin menu', 'your-plugin-textdomain'),
        'name_admin_bar' => _x('Clientes', 'add new on admin bar', 'your-plugin-textdomain'),
        'add_new' => _x('Añadir nuevo', 'Cliente', 'your-plugin-textdomain'),
        'add_new_item' => __('Añadir nuevo Cliente', 'your-plugin-textdomain'),
        'new_item' => __('Nuevo Cliente', 'your-plugin-textdomain'),
        'edit_item' => __('Editar Cliente', 'your-plugin-textdomain'),
        'view_item' => __('Ver Cliente', 'your-plugin-textdomain'),
        'all_items' => __('Todos los Cliente', 'your-plugin-textdomain'),
        'search_items' => __('Buscar Cliente', 'your-plugin-textdomain'),
        'parent_item_colon' => __('Cliente padre', 'your-plugin-textdomain'),
        'not_found' => __('No hemos encontrado Cliente.', 'your-plugin-textdomain'),
        'not_found_in_trash' => __('No hemos encontrado Cliente en la papelera', 'your-plugin-textdomain'),
    );

    $args = array(
        'labels' => $labels,
        'description' => __('Description', 'your-plugin-textdomain'),
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'clientes'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-groups',
        'supports' => array('title', 'editor', 'author', 'thumbnail')
    );

    register_post_type('clientes', $args);
}

add_action('init', 'clientes_init');