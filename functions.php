<?php
/**
 * Author: HoaiPhongIT
 * URL: http://wpsama.net
 *
 * WPBootstrap functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package WPBootstrap
 */


/** Various clean up functions */
require_once get_parent_theme_file_path( '/library/after_setup.php' );
require_once get_parent_theme_file_path( '/library/cleanup.php' );

/** Required for Foundation to work properly */
require_once get_parent_theme_file_path( '/library/bootstrap.php' );

/** Register all navigation menus */
require_once get_parent_theme_file_path( '/library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once get_parent_theme_file_path( '/library/menu-walkers.php' );

/** Create widget areas in sidebar and footer */
require_once get_parent_theme_file_path( '/library/widget-areas.php' );

/** Enqueue scripts */
require_once get_parent_theme_file_path( '/library/enqueue-scripts.php' );

/** Add theme support */
require_once get_parent_theme_file_path( '/library/theme-support.php' );

/** Change WP's sticky post class */
require_once get_parent_theme_file_path( '/library/sticky-posts.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once get_parent_theme_file_path( '/library/protocol-relative-theme-assets.php' );

if ( ! function_exists( 'wpbootstrap_entry_meta' ) ) :
	function wpbootstrap_entry_meta() {
		echo '<time class="updated" datetime="' . get_the_time( 'c' ) . '">' . sprintf( __( 'Posted on %1$s at %2$s.', 'wpbootstrap' ), get_the_date(), get_the_time() ) . '</time>';
		echo '<p class="byline author">' . __( 'Written by', 'wpbootstrap' ) . ' <a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" rel="author" class="fn">' . get_the_author() . '</a></p>';
	}
endif;