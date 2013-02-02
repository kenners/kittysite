<?php
/**
 * Template Name: Front Page Template
 */

get_header(); ?>

		<!-- Content -->
		<div id="content" class="nine columns centered" role="content">
			<h2 class="site-title">Katharine Turner</h2>
			<div class="row contents-titles">
				<div class="four columns site-title"><h4><a href="hello" title="Say hello">Hello</a></h3></div>
				<div class="four columns site-title"><h4><a href="portfolio" title="View my portfolio">Portfolio</a></h3></div>
				<div class="four columns site-title"><h4><a href="blog" title="Read my blog">Blog</a></h3></div>
			</div>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

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