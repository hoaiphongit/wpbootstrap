<?php
/**
 * Register widget areas
 *
 * @package wpbootstrap
 */

if ( ! function_exists( 'wpbootstrap_sidebar_widgets' ) ) :
function wpbootstrap_sidebar_widgets() {
	register_sidebar(array(
	  'id' => 'sidebar-widgets',
	  'name' => __( 'Sidebar widgets', 'wpbootstrap' ),
	  'description' => __( 'Drag widgets to this sidebar container.', 'wpbootstrap' ),
	  'before_widget' => '<article id="%1$s" class="widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));

	register_sidebar(array(
	  'id' => 'footer-widgets',
	  'name' => __( 'Footer widgets', 'wpbootstrap' ),
	  'description' => __( 'Drag widgets to this footer container', 'wpbootstrap' ),
	  'before_widget' => '<article id="%1$s" class="large-4 columns widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));
}

add_action( 'widgets_init', 'wpbootstrap_sidebar_widgets' );
endif;
