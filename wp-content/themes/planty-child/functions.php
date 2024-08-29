<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'astra-theme-css' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );


// function add_admin_link_to_menu($items, $args) {
//     if ( is_user_logged_in() && $args->theme_location == 'primary' ) {
//         $items .= '<li><a href="http://planty.local/admin/" class="hfe-menu-item">Admin</a></li>';
//     }
//     return $items;
// }
// add_filter('wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2);





function custom_admin_menu_link( $items, $args ) {
    // Vérifiez si l'utilisateur est connecté
    if ( is_user_logged_in() ) {
        // Ajoutez un lien "Admin" si l'utilisateur est connecté
        $items .= '<li><a href="' . admin_url() . '">Admin</a></li>';
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'custom_admin_menu_link', 10, 2 );















// END ENQUEUE PARENT ACTION
