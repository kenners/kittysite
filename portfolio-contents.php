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
						$children = wp_list_pages("title_li=&child_of=".$post->ID."&link_before=<img src=\"http://placehold.it/100\"><br/><h6>&link_after=</h6>&sort_column=post_date&sort_order=DESC&echo=0");
						if ($children) { 
							// Use Zurb Foundation's useful block grids
							// http://foundation.zurb.com/docs/grid.php#fourBlockCode
							?>
							<ul class="block-grid three-up mobile frontandcenter">
								<?php echo $children; ?>
							</ul>
						<?php } ?>
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