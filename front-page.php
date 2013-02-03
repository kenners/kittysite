<?php
/**
 * Template Name: Front Page Template
 */

get_header(); ?>

	<!-- Content -->
	<div id="main" class="top-spacing row">
		<div id="content" class="nine columns centered" role="content">
			
			<h2 class="site-title"><?php bloginfo( 'name' ); ?></h2>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; // end of the loop. ?>
			
			
		</div>
	</div>
	<!-- End Content -->
	
	<!-- Footer -->
	<footer class="row">
	</footer>
	<?php wp_footer(); ?>
</body>
</html>