<?php

/**
 * Extends the default WordPress body class to denote:
 *
 * @param array Existing class values.
 * @return array Filtered class values.
 */
function kittysite_body_class( $classes ) {
	if ( is_page_template( 'front-page.php' ) ) {
		$classes[] = 'template-front-page';
	}
	return $classes;
}
add_filter( 'body_class', 'kittysite_body_class' );

/**
 * Creates a nicely formatted and more specific title element text
 * for output in head of document, based on current view.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string Filtered title.
 */
function kittysite_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'kittysite' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'kittysite_wp_title', 10, 2 );


if ( ! function_exists( 'kittysite_entry_meta' ) ) :
/**
 * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
 */
function kittysite_entry_meta() {
	
	$categories_list = get_the_category_list( __( ', ', 'kittysite' ) );

	$tag_list = get_the_tag_list( '', __( ', ', 'kittysite' ) );

	$date = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>',
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);

	$author = sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'kittysite' ), get_the_author() ) ),
		get_the_author()
	);
	
	if ( $tag_list ) {
		$utility_text = __( 'This entry was posted in %1$s and tagged %2$s on %3$s<span class="by-author"> by %4$s</span>.', 'kittysite' );
	} elseif ( $categories_list ) {
		$utility_text = __( 'This entry was posted in %1$s on %3$s<span class="by-author"> by %4$s</span>.', 'kittysite' );
	} else {
		$utility_text = __( 'This entry was posted on %3$s<span class="by-author"> by %4$s</span>.', 'kittysite' );
	}

	printf(
		$utility_text,
		$categories_list,
		$tag_list,
		$date,
		$author
	);
}
endif;

/**
 * Registers our main widget area and the front page widget areas.
 */
function kittysite_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'kittysite' ),
		'id' => 'sidebar-1',
		'description' => __( 'Appears on posts and pages when width >760px', 'kittysite' ),
		'before_widget' => '<aside id="%1$s" class="twelve columns widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );
	register_sidebar( array(
		'name' => __( 'Small Screen Sidebar', 'kittysite' ),
		'id' => 'sidebar-2',
		'description' => __( 'Appears on posts and pages when on small screen', 'kittysite' ),
		'before_widget' => '<aside id="%1$s" class="twelve columns widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );
}
add_action( 'widgets_init', 'kittysite_widgets_init' );

/**
*
* shortcode handler for columnization posts
* ex: [leftcol]content here...[/leftcol]
* Requires <?php remove_filter ('the_content', 'wpautop'); ?>
* in the page templates you want it work in
*/
function shortcode_columnize_left( $atts, $content = null ) {
	$content = wptexturize( $content );
	$content = wpautop( $content, false );
	$content = '<div class="four columns">' . $content . '</div>';
	return $content;
}
function shortcode_columnize_middle( $atts, $content = null ) {
	$content = wptexturize( $content );
	$content = wpautop( $content, false );
	$content = '<div class="four columns">' . $content . '</div>';
	return $content;
}
function shortcode_columnize_right( $atts, $content = null ) {
	$content = wptexturize( $content );
	$content = wpautop( $content, false );
	$content = '<div class="four columns">' . $content . '</div>';
	return $content;
}
function shortcode_columnize_doublecol( $atts, $content = null ) {
	$content = wptexturize( $content );
	$content = wpautop( $content, false );
	$content = '<div class="eight columns">' . $content . '</div>';
	return $content;
}
add_shortcode( 'leftcol', 'shortcode_columnize_left' );
add_shortcode( 'midcol', 'shortcode_columnize_middle' );
add_shortcode( 'rightcol', 'shortcode_columnize_right' );
add_shortcode( 'doublecol', 'shortcode_columnize_doublecol' );

?>