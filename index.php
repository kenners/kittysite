<?php get_header(); ?>
	<!-- Content -->
	<div id="main" class="row top-spacing">
		<!-- Sidebar -->
		<aside class="four columns">
			<header>
				<h2 class="sidebar-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
				
					<img src="<?php echo get_template_directory_uri(); ?>/images/blog.svg" alt="Logo for Katharine Turner's blog">
					
					<div class="row">
						<div class="eight columns">
							<h5 class="sidebar-subtitle">Sketches, thoughts, ideas</h5>
						</div>
					</div>
			</header>
			<?php get_sidebar(); ?>
		</aside>
		<!-- End Sidebar -->

		<!-- Content -->
		<div id="content" class="eight mobile-four columns" role="content">
			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>
				<?php kittysite_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">

				<?php if ( current_user_can( 'edit_posts' ) ) :
					// Show a different message to a logged-in user who can add posts.
				?>
					<header class="entry-header">
						<h3 class="entry-title"><?php _e( 'No posts to display', 'kittysite' ); ?></h3>
					</header>

					<div class="entry-content">
						<p><?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'kittysite' ), admin_url( 'post-new.php' ) ); ?></p>
					</div>

				<?php else :
					// Show the default message to everyone else.
				?>
					<header class="entry-header">
						<h3 class="entry-title"><?php _e( 'Nothing Found', 'kittysite' ); ?></h3>
					</header>

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'twentytwelve' ); ?></p>
						<?php get_search_form(); ?>
					</div>
				<?php endif; // end current_user_can() check ?>

				</article><!-- #post-0 -->

			<?php endif; // end have_posts() check ?>

		</div>
		<!-- End Content -->


<?php get_footer(); ?>