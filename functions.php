<?php
/**
 * KnowledgeCenter functions and definitions
 *
 * @package KnowledgeCenter
 * @subpackage KnowledgeCenter
 * @since KnowledgeCenter 1.0
 */

if ( ! defined( '_KnowledgeCenter_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_KnowledgeCenter_VERSION', '1.1' );
}

if ( ! function_exists( 'knowledgecenter_setup' ) ) :
	function knowledgecenter_setup() {

		/*
			* Make theme available for translation.
			* Translations can be filed in the /languages/ directory.
		*/
		load_theme_textdomain( 'knowledgecenter', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
			 * Let WordPress manage the document title.
			 * By adding theme support, we declare that this theme does not use a
			 * hard-coded <title> tag in the document head, and expect WordPress to
			 * provide it for us.
			 */
		add_theme_support( 'title-tag' );

		// Enable Excerpt for pages
		add_post_type_support( 'page', 'excerpt' );

		// Enable support for Custom Logo for site.
		add_theme_support( 'custom-logo', array(
			'height' => 28,
			'width'  => 280,
		) );

		/*
			* Enable support for Post Thumbnails on posts and pages.
		*/
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'first-menu'  => esc_attr__( 'First Menu', 'knowledgecenter' ),
			'second-menu' => esc_attr__( 'Second Menu', 'knowledgecenter' ),
			'footer-menu' => esc_attr__( 'Footer Menu', 'knowledgecenter' ),
		) );

		// Enable support for HTML5 markup.
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		) );
	}
endif;
add_action( 'after_setup_theme', 'knowledgecenter_setup' );
