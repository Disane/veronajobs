<?php
/**
 * VeronaJobs Theme functions and definitions.
 */

if ( ! defined( 'VERONAJOBS_VERSION' ) ) {
    define( 'VERONAJOBS_VERSION', '1.0.0' );
}

add_action( 'after_setup_theme', function () {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'assets/css/main.css' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 160,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'veronajobs' ),
    ) );
} );

function veronajobs_default_menu() {
    echo '<ul class="nav-menu">';
    echo '<li><a href="#about">' . esc_html__( 'Rólunk', 'veronajobs' ) . '</a></li>';
    echo '<li><a href="#services">' . esc_html__( 'Szolgáltatások', 'veronajobs' ) . '</a></li>';
    echo '<li><a href="#candidates">' . esc_html__( 'Munkavállalóknak', 'veronajobs' ) . '</a></li>';
    echo '<li><a href="#contact">' . esc_html__( 'Kapcsolat', 'veronajobs' ) . '</a></li>';
    echo '</ul>';
}

add_action( 'wp_enqueue_scripts', function () {
    $theme_uri = get_template_directory_uri();

    wp_enqueue_style( 'veronajobs-fonts', 'https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600&family=Montserrat:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap', array(), VERONAJOBS_VERSION );
    wp_enqueue_style( 'veronajobs-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0' );
    wp_enqueue_style( 'veronajobs-style', get_stylesheet_uri(), array( 'veronajobs-fonts', 'veronajobs-fontawesome' ), VERONAJOBS_VERSION );

    wp_enqueue_script( 'veronajobs-script', $theme_uri . '/assets/js/main.js', array(), VERONAJOBS_VERSION, true );
} );

add_action( 'enqueue_block_editor_assets', function () {
    wp_enqueue_style( 'veronajobs-editor-fonts', 'https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600&family=Montserrat:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap', array(), VERONAJOBS_VERSION );
    wp_enqueue_style( 'veronajobs-editor-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0' );
} );

add_action( 'init', function () {
    $labels = array(
        'name'               => __( 'Jobs', 'veronajobs' ),
        'singular_name'      => __( 'Job', 'veronajobs' ),
        'add_new_item'       => __( 'Add New Job', 'veronajobs' ),
        'edit_item'          => __( 'Edit Job', 'veronajobs' ),
        'new_item'           => __( 'New Job', 'veronajobs' ),
        'view_item'          => __( 'View Job', 'veronajobs' ),
        'view_items'         => __( 'View Jobs', 'veronajobs' ),
        'search_items'       => __( 'Search Jobs', 'veronajobs' ),
        'all_items'          => __( 'All Jobs', 'veronajobs' ),
        'archives'           => __( 'Job Archives', 'veronajobs' ),
        'item_published'     => __( 'Job published', 'veronajobs' ),
        'item_updated'       => __( 'Job updated', 'veronajobs' ),
    );

    register_post_type( 'job', array(
        'labels'            => $labels,
        'public'            => true,
        'has_archive'       => true,
        'show_in_rest'      => true,
        'menu_icon'         => 'dashicons-id-alt',
        'supports'          => array( 'title', 'editor', 'thumbnail', 'excerpt', 'author', 'revisions' ),
        'rewrite'           => array( 'slug' => 'jobs' ),
    ) );

    register_taxonomy( 'job_location', 'job', array(
        'labels' => array(
            'name'          => __( 'Job Locations', 'veronajobs' ),
            'singular_name' => __( 'Job Location', 'veronajobs' ),
        ),
        'public'       => true,
        'hierarchical' => true,
        'show_in_rest' => true,
        'rewrite'      => array( 'slug' => 'job-location' ),
    ) );

    register_taxonomy( 'job_category', 'job', array(
        'labels' => array(
            'name'          => __( 'Job Categories', 'veronajobs' ),
            'singular_name' => __( 'Job Category', 'veronajobs' ),
        ),
        'public'       => true,
        'hierarchical' => true,
        'show_in_rest' => true,
        'rewrite'      => array( 'slug' => 'job-category' ),
    ) );

    register_block_pattern_category( 'veronajobs', array( 'label' => __( 'VeronaJobs', 'veronajobs' ) ) );
} );

