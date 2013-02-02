<?php
/**
 * Template Name: Front Page Template
 */

get_header(); ?>

		<!-- Content -->
		<div id="content" class="twelve columns centered" role="content">
			
			<?php while ( have_posts() ) : the_post(); ?>

				<?php //get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>
		</div>
		<!-- End Content -->
	</div>
	<!-- Footer -->
	<footer class="row">
	</footer>


<?php wp_footer(); ?>
</body>
</html>