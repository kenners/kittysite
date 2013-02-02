<?php
/**
 * Template Name: Hello Page Template
 */

get_header(); ?>
			<?php
			// Switch off auto paragraph tags.
			// This makes the shortcode columns work
			remove_filter ('the_content', 'wpautop');
			?>
			<?php while ( have_posts() ) : the_post(); ?>
				<!-- Header -->
				<header class="row">
					<div class="twelve columns">
					<h2 class="sidebar-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
					<h4><?php the_title(); ?></h4>
				</div>
				</header>
				<!-- End Header-->
				
				<div class="row body-content">
				<?php the_content(); ?>
				</div>
			<?php endwhile; // end of the loop. ?>
		
		</div>
		<!-- Footer -->
		<footer class="row">
		</footer>


	<?php wp_footer(); ?>
	</body>
	</html>