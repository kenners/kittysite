<?php
/**
 * Template Name: Front Page Template
 */

get_header(); ?>

	<!-- Content -->
	<div id="main" class="top-spacing row">
		<div id="content" class="nine columns centered" role="content">

			<h2 class="site-title"><?php bloginfo( 'name' ); ?></h2>
			<div class="hide-for-small contents-titles row">
				<div class="four columns site-title">
					<div class="four columns centered">
						<a title="Say hello" href="hello">
							<img src="<?php echo get_template_directory_uri(); ?>/images/hello-icon.png" class="site-icon">
						</a>
					</div>
					<h4><a title="Say hello" href="hello">Hello</a></h4>
				</div>
				<div class="four columns site-title">
					<div class="four columns centered">
						<a title="View my portfolio" href="portfolio">
							<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio-icon.png" class="site-icon">
						</a>
					</div>
					<h4><a title="View my portfolio" href="portfolio">Portfolio</a></h4>
				</div>
				<div class="four columns site-title">
					<div class="four columns centered">
						<a title="Read my blog" href="blog">
							<img src="<?php echo get_template_directory_uri(); ?>/images/blog-icon.png" class="site-icon">
						</a>
					</div>
					<h4><a title="Read my blog" href="blog">Blog</a></h4>
				</div>
			</div>
			<div class="show-for-small">
				<div class="row contents-titles">
					<div class="mobile-four columns site-title">
						<div class="four columns centered">
							<a title="Say hello" href="hello">
								<img src="<?php echo get_template_directory_uri(); ?>/images/hello-icon.png" class="site-icon-mobile">
							</a>
						</div>
						<h4><a title="Say hello" href="hello">Hello</a></h4>
					</div>
				</div>
				<div class="row contents-titles">
					<div class="mobile-four columns site-title">
						<div class="four columns centered">
							<a title="View my portfolio" href="portfolio">
								<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio-icon.png" class="site-icon-mobile">
							</a>
						</div>
						<h4><a title="View my portfolio" href="portfolio">Portfolio</a></h4>
					</div>
				</div>
				<div class="row contents-titles">
					<div class="mobile-four columns site-title">
						<div class="four columns centered">
							<a title="Read my blog" href="blog">
								<img src="<?php echo get_template_directory_uri(); ?>/images/blog-icon.png" class="site-icon-mobile">
							</a>
						</div>
						<h4><a title="Read my blog" href="blog">Blog</a></h4>
					</div>
				</div>
			</div>
<!--			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; // end of the loop. ?>
-->

		</div>
	</div>
	<!-- End Content -->

	<!-- Footer -->
	<footer class="row">
	</footer>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascripts/retina.js"></script>
	<?php wp_footer(); ?>
</body>
</html>