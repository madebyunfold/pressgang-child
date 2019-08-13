<?php

/**
 * PressGang Configuration
 *
 * This is the main setup file for any PressGang child theme. File always resides in child-theme core folder.
 *
 * Sections are loaded via PressGang's core/loader.php
 * https://github.com/benedict-w/pressgang/blob/master/core/loader.php
 *
 * @package PressGang https://github.com/benedict-w/pressgang
 *
 */
return array (

    /*
     * Includes
     *
     * Array of files (can be filename minus .php extension) to include in the theme from the '/inc' directory,
     * of the theme. Checks first for files in child theme then parent (PressGang).
     *
     * This folder is used for adding generic(or child theme specific) PHP extension to WordPress
     * - de-clutter functions.php!
     *
     * Note:- fails silently if file not found!
     *
     * @var array
     *
     */
    'inc' => array(
        'admin-logo',
        'customizer',
        'emojicons',
        'filters',
        'gallery',
        'google-analytics',
        'opengraph',
        'permalinks',
        'title',
    ),

    /*
     * Widget Includes
     *
     * See - https://codex.wordpress.org/Widgets_API
     *
     * Array of files (can be filename minus .php extension) to include in the theme from the '/widgets' directory,
     * of the theme. Checks first for files in child theme then parent (PressGang).
     *
     * This folder should be specifically reserved for WordPress widgets included in the theme.
     *
     * Widgets can be extended from PressGang base class
     * https://github.com/benedict-w/pressgang/blob/master/classes/widget.php
     *
     * Note:- fails silently if file not found!
     *
     * @var array
     *
     */
    'widgets' => array(),

    /*
     * Shortcode Includes
     *
     * See - https://codex.wordpress.org/Shortcode_API
     *
     * Array of files (can be filename minus .php extension) to include in the theme from the '/shortcodes' directory,
     * of the theme. Checks first for files in child theme then parent (PressGang).
     *
     * This folder should be specifically reserved for WordPress shortcodes included in the theme.
     *
     * Shortcodes can be extended from PressGang base class
     * https://github.com/benedict-w/pressgang/blob/master/classes/shortcode.php
     *
     * Note:- fails silently if file not found!
     *
     * @var array
     *
     */
    'shortcodes' => array(),

    /*
     * Menus
     *
     * See - https://codex.wordpress.org/WordPress_Menu_User_Guide
     *
     * Associative array representing each Menu in used the theme.
     *
     * This is a proxy to the WordPress register_nav_menu function
     * https://codex.wordpress.org/Navigation_Menus#Register_Menus
     *
     * @var array ['key' => 'description']
     */
    'menus' => array(
        'primary' => "Primary Navigation",
    ),

    /*
     * Sidebars
     *
     * See - https://codex.wordpress.org/Sidebars
     *
     * Array representing each Widget Sidebar used in the theme.
     *
     * This is a proxy to the WordPress register_sidebar function.
     *
     * https://codex.wordpress.org/Function_Reference/register_sidebar
     *
     * See params - https://codex.wordpress.org/Function_Reference/register_sidebar#Parameters
     *
     * @var array
     *
     * [
     *   'key' => [
     *      'id' => '',
     *      'name' => __("", THEMENAME),,
     *      'description' => __("", THEMENAME),,
     *      'class' => '',
     *      'before_widget' => '',
     *      'after_widget' => '',
     *      'before_title' => '',
     *      'after_title' => '',
     *   ], ...
     * ]
     *
     */
    'sidebars' => array(),

    /*
     * ACF Gutenberg Blocks
     *
     * See - https://www.advancedcustomfields.com/resources/blocks/
     *
     * Array of files (can be filename minus .php extension) to include in the theme from the '/blocks' directory,
     * of the theme. Checks first for files in child theme then parent (PressGang).
     *
     * See the AcfBlocks class (which is a proxy for acf_register_block) for instantiation details:
     * https://github.com/benedict-w/pressgang/blob/master/core/acf-blocks.php
     * https://www.advancedcustomfields.com/resources/acf_register_block_type/
     *
     * Blocks can be extended from the PressGang base class, in which case set the correct render_callback.
     * https://github.com/benedict-w/pressgang/blob/master/classes/block.php
     *
     * The PressGang/Block class automatically sends ACF fields to the Timber context.
     *
     * Loader will automatically add new Block categories which appear in the admin UI for adding Gutenberg blocks.
     *
     * @var array
     *
     * [
     *   'key' => array(
     *      'name' => '',
     *      'title' => __("", THEMENAME),
     *      'description' => __("", THEMENAME),
     *      'render_callback' => array('PressGang\Block', 'render'),
     *      'category' => array('slug' => '', 'title' => __("", THEMENAME)),
     *      'icon' => '', // see dashicons https://developer.wordpress.org/resource/dashicons/#align-right
     *      'keywords' => array(''),
     *   ),
     */
    'acf-blocks' => array(),

    /*
     * ACF Options Page
     *
     * See - https://www.advancedcustomfields.com/add-ons/options-page/
     *
     * Array representing each ACF Options Page used in the theme.
     *
     * This is a proxy to the acf_add_options_page function.
     *
     * @var array
     *
     */
    'options' => array(
        array(
            'page_title' => __("Site Options", THEMENAME),
        ),
    ),

    /*
     * Scripts
     *
     * See - https://github.com/benedict-w/pressgang/blob/master/core/scripts.php
     *
     * Array of scripts on $handle => $args array where $args match wp_register_script arguments see:
     * https://developer.wordpress.org/reference/functions/wp_register_script/
     *
     * An additional 'hook' parameter is available to specify the the action used to enqueue the script on
     * (default = wp_enqueue_scripts).
     *
     * Also additional boolean params for deferring and async loading scripts.
     *
     * @var array
     *
     * [
     *   'key' => [
     *      'handle' => '',
     *      'src' => '',
     *      'deps' => '',
     *      'ver' => '',
     *      'in_footer' => true,
     *      // pressgang additional params
     *      'hook' => '',
     *      'async' => true,
     *      'defer' => true,
     *   ],...
     * ]
     *
     */
    'scripts' => array(),
    
        /*
     * Styles
     *
     * See - https://github.com/benedict-w/pressgang/blob/master/core/styles.php
     *
     * Array of stylesheets on $handle => $args array where $args match wp_register_script arguments see:
     * https://developer.wordpress.org/reference/functions/wp_register_style/
     *
     * An additional 'hook' parameter is available to specify the the action used to enqueue the script on
     * (default = wp_enqueue_scripts).
     *
     * @var array
     *
     * [
     *   'key' => [
     *      'handle' => '',
     *      'src' => '',
     *      'deps' => '',
     *      'ver' => '',
     *      'media' => 'all',
     *      // pressgang additional params
     *      'hook' => '',
     *   ],...
     * ]
     *
     */
    'styles' => array(),

    /*
     * Custom Post Types
     *
     * Array of custom_post_types to be registered, indexed on post_type.
     *
     * See: - https://codex.wordpress.org/Function_Reference/register_post_type
     *
     * - label (string|plural:post_type)
     * - labels (array|name)
     * - description (string|null)
     * - public (boolean|false)
     * - exclude_from_search (boolean|!public)
     * - publicly_queryable (boolean|public)
     * - show_ui (boolean|public)
     * - show_in_nav_menus (boolean|public)
     * - show_in_menu (boolean|show_ui)
     * - menu_position (integer|null)
     * - menu_icon (string|null)
     * - capability_type (string or array|post)
     * - capabilities (array|capability_type)
     * - map_meta_cap (boolean|null)
     * - hierarchical (boolean|false)
     * - supports (array|title,editor,author,thumbnail,excerpt,trackbacks,custom-fields,comments,revisions,page-attributes,post-formats)
     * - register_meta_box_cb (callback|null)
     * - taxonomies (array|null)
     * - has_archive (boolean|false)
     * - rewrite (array|bool+post_type)
     * - permalink_epmask (string,EP_PERMALINK)
     * - query_var (boolean or string|true)
     * - can_export (boolean|true)
     * - delete_with_user (boolean|false)
     * - show_in_rest (boolean|false)
     * - rest_base (string|post_type)
     * - rest_controller_class (class|WP_REST_Posts_Controller)
     */
    'custom-post-types' => array(),

   /*
    * Custom Taxonomies
    *
    * Array of custom taxonomies indexed on taxonomy name.
    *
    * https://codex.wordpress.org/Function_Reference/register_taxonomy
    *
    * - label (string|plural:post_type)
    * - labels (array|name)
    * - public (boolean|false)
    * - publicly_queryable (boolean|public)
    * - show_ui (boolean|public)
    * - show_in_menu (boolean|show_ui)
    * - show_in_nav_menus (boolean|public)
    * - show_in_rest (boolean|false)
    * - rest_base (string|post_type)
    * - rest_controller_class (class|WP_REST_Posts_Controller)
    * - show_tagcloud (boolean|show_ui)
    * - show_in_quick_edit(boolean|show_ui)
    * - meta_box_cb (callback|null)
    * - show_admin_column (boolean|false)
    * - description (string|null)
    * - hierarchical (boolean|false)
    * - update_count_callback (callback|null)
    * - query_var (boolean or string|true)
    * - rewrite (array or boolean|true)
    * - capabilities (array|null)
    * - sort (boolean|null)
    *
    */
    'custom-taxonomies' => array(),

    /*
     * Actions
     *
     * Array representing functions to hook on given actions
     *
     * @var array
     */
    'actions' => array(),

    /*
     * Support
     *
     * See - https://developer.wordpress.org/reference/functions/add_theme_support/
     *
     * Proxies add_theme_support
     *
     * @var array
     */
    'support' => array(
        'html5',
        'post-thumbnails',
    ),

    /*
     * Plugins
     *
     * Array of plugins required by the theme (displays admin warning if plugin not activated)
     *
     * Use names of the plugin sub-directory/file.
     * See http://codex.wordpress.org/Function_Reference/is_plugin_active
     *
     * Optionally array values supply the admin warning message
     *
     */
    'plugins' => array(
        'Timber',  // Timber is required for the theme templating!
    ),
);
