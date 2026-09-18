<?php
/**
 * Northview Property Management Theme
 * functions.php
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/* ---------- Theme Setup ---------- */
function northview_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption' ) );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'northview' ),
        'footer-company'     => __( 'Footer - Company', 'northview' ),
        'footer-services'    => __( 'Footer - Services', 'northview' ),
        'footer-destinations'=> __( 'Footer - Destinations', 'northview' ),
    ) );
}
add_action( 'after_setup_theme', 'northview_setup' );

/* ---------- Enqueue Styles & Fonts ---------- */
function northview_enqueue_assets() {
    wp_enqueue_style( 'northview-google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap', array(), null );
    wp_enqueue_style( 'northview-style', get_stylesheet_uri(), array(), '1.0.0' );
    wp_enqueue_script( 'northview-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'northview_enqueue_assets' );

/* ---------- Register Widget Areas (footer columns are menus, but keep a sidebar just in case) ---------- */
function northview_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer Newsletter', 'northview' ),
        'id'            => 'footer-newsletter',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'northview_widgets_init' );

/* ---------- Customizer: Hero / Getaway content & images, pricing, rating ---------- */
function northview_customize_register( $wp_customize ) {

    $wp_customize->add_section( 'northview_hero_section', array(
        'title'    => __( 'Hero Section', 'northview' ),
        'priority' => 30,
    ) );

    // Hero background image
    $wp_customize->add_setting( 'northview_hero_image', array( 'default' => get_template_directory_uri() . '/assets/images/hero.svg' ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'northview_hero_image', array(
        'label'   => __( 'Hero Background Image', 'northview' ),
        'section' => 'northview_hero_section',
    ) ) );

    $fields = array(
        'northview_hero_location'   => 'Pacific Northwest, USA',
        'northview_hero_title_1'    => 'Luxury Living',
        'northview_hero_title_2'    => 'in Perfect Places',
        'northview_hero_text'       => 'Discover breathtaking rentals and exceptional property management services across the most beautiful destinations.',
        'northview_hero_price'      => '189',
        'northview_hero_rating'     => '4.9',
        'northview_hero_reviews'    => '1250+ Reviews',
    );
    foreach ( $fields as $id => $default ) {
        $wp_customize->add_setting( $id, array( 'default' => $default, 'sanitize_callback' => 'sanitize_text_field' ) );
        $wp_customize->add_control( $id, array(
            'label'   => ucwords( str_replace( array( 'northview_', '_' ), array( '', ' ' ), $id ) ),
            'section' => 'northview_hero_section',
            'type'    => 'text',
        ) );
    }

    // Getaway section
    $wp_customize->add_section( 'northview_getaway_section', array(
        'title'    => __( 'Featured Getaway Section', 'northview' ),
        'priority' => 31,
    ) );
    $wp_customize->add_setting( 'northview_getaway_image', array( 'default' => get_template_directory_uri() . '/assets/images/getaway.svg' ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'northview_getaway_image', array(
        'label'   => __( 'Getaway Background Image', 'northview' ),
        'section' => 'northview_getaway_section',
    ) ) );

    $getaway_fields = array(
        'northview_getaway_price'   => '189',
        'northview_getaway_guests'  => '4',
        'northview_getaway_beds'    => '2',
        'northview_getaway_baths'   => '2',
    );
    foreach ( $getaway_fields as $id => $default ) {
        $wp_customize->add_setting( $id, array( 'default' => $default, 'sanitize_callback' => 'sanitize_text_field' ) );
        $wp_customize->add_control( $id, array(
            'label'   => ucwords( str_replace( array( 'northview_', '_' ), array( '', ' ' ), $id ) ),
            'section' => 'northview_getaway_section',
            'type'    => 'text',
        ) );
    }
}
add_action( 'customize_register', 'northview_customize_register' );

/* ---------- Newsletter form handler (AJAX-ready stub) ---------- */
function northview_handle_newsletter() {
    if ( isset( $_POST['northview_email'] ) ) {
        $email = sanitize_email( $_POST['northview_email'] );
        // Hook your mailing list provider here (Mailchimp, etc.)
        do_action( 'northview_newsletter_signup', $email );
        wp_send_json_success( array( 'message' => 'Subscribed!' ) );
    }
    wp_send_json_error();
}
add_action( 'wp_ajax_northview_newsletter', 'northview_handle_newsletter' );
add_action( 'wp_ajax_nopriv_northview_newsletter', 'northview_handle_newsletter' );
