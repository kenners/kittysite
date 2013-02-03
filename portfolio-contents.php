<?php
/**
 * Template Name: Portfolio Contents Template
 */

get_header(); ?>

	<!-- Content -->
	<div id="main" class="top-spacing row">
		<div id="content" class="nine columns centered" role="content">
			<h2 class="site-title sidebar-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
			<h4 class="site-title">Portfolio</h4>
			<div class="row">
				<div class="seven columns centered portfolio-contents">
					<?php
						// Find all the child posts and their thumbnails
						// Get current page ID
						$the_id = get_the_ID();
						
						$args = array(
						'child_of'     => $the_id,
						'title_li'     => '',
						'depth'			=> 0,
						'sort_order'	=> 'DESC',
						'sort_column'	=> 'post_column'
						);

						$pages = get_pages( $args );
						$output = '';
						foreach($pages as $value){
							$thumb = get_the_post_thumbnail( $value->ID, array(100,100), $attr = '' );
							$output .= "<li class=\"page_item\">";
							$output .= "<a href=\"" . $value->post_name . "\" >" . $thumb . "</a><br />";
							$output .= "<h6 class=\"contents-titles\"><a href=\"" . $value->post_name . "\" >" .  $value->post_title . "</a></h6>";
							$output .= "</li>";
						} 
					?>
					<ul class="block-grid three-up mobile frontandcenter">	
					<?php echo $output; ?>
					</ul>
					</div>
				</div>
			</div>
		<!-- End Content -->
	</div>
	<!-- Footer -->
	<footer class="row">
	</footer>


<?php wp_footer(); ?>
</body>
</html>