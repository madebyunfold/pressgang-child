<?php

/**
 * Pressgang configuration
 *
 */
return array (

    /*
     * files
     *
     * Array of files to include in the theme from the '/inc' directory using the Loader class
     *
     */
    'inc' => array(
        // 'addthis',
        'admin-logo',
        // 'breadcrumbs',
        'customizer',
        'emojicons',
        'filters',
        'gallery',
        'google-analytics',
        'images',
        // 'infinitepagination',
        'opengraph',
        'permalinks',
        'sitemap',
        // 'slider',
        'title',
    ),

    /*
     * widget includes
     *
     * Array of files to include in the theme from the '/widgets' directory using the Loader class
     *
     */
    'widgets' => array(
    ),

    /*
    * shortcodes includes
    *
    * Array of files to include in the theme from the '/shortcodes' directory using the Loader class
    *
    */
    'shortcodes' => array(
    ),

    /*
     * menus
     *
     * Associative array representing each Menu in the theme.
     *
     * [$key => $description]
     *
     * @var array
     */
    'menus' => array(
        'primary' => "Primary Navigation",
    ),

    /*
     * sidebars
     *
     * Array representing each widget sidebar used in the theme.
     *
     * @var array
     */
    'sidebars' => array(),

    /*
     * actions
     *
     * Array representing functions to hook on given actions
     *
     * @var array
     */
    'actions' => array(),

    /*
     * scripts
     *
     * Array of scripts on $handle => $args array where $args match wp_register_script, wit additional 'hook' param
     * for the action to enque the script on (default = wp_enqueue_scripts)
     *
    */
    'scripts' => array(
        'bootstrap' => array(
            'src' => get_template_directory_uri() . '/js/min/bootstrap.min.js',
            'deps' => array('jquery'),
            'version' => '3.2.0',
            'in_footer' => true
        ),
    ),

    /*
     * custom-post-types
     *
     * Array of custom_post_types to be registered
     *
     */
    'custom-post-types' => array(),

    /*
     * custom-taxonomies
     *
     * Array of custom taxonomies to be registered
     *
     */
    'custom-taxonomies' => array(),

    /*
     * support
     *
     * Include theme support
     *
     * @var array
     */
    'support' => array(
        'html5',
        'post-thumbnails',
    ),

    /*
     * plugins
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
