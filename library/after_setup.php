<?php

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wpbootstrap_content_width() {

	$content_width = 700;

	//if ( wpbootstrap_is_frontpage() ) {
		$content_width = 1120;
	//}

	/**
	 * Filter Twenty Seventeen content width of the theme.	 	
	 *
	 * @param $content_width integer
	 */
	$GLOBALS['content_width'] = apply_filters( 'wpbootstrap_content_width', $content_width );
}
add_action( 'after_setup_theme', 'wpbootstrap_content_width', 0 );

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function wpbootstrap_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'wpbootstrap-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'wpbootstrap_resource_hints', 10, 2 );

function wpbootstrap_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'wpbootstrap_javascript_detection', 0 );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function wpbootstrap_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
}
add_action( 'wp_head', 'wpbootstrap_pingback_header' );