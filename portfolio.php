<?php
/**
 * Template Name: Portfolio Page Template
 */

 // *** ESSENTIALLY A CLONE OF HELLO.PHP

get_header(); ?>
		<!-- Content -->
		<div id="main" class="top-spacing">
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
					<h4 class="sidebar-title"><a href="<?php echo esc_url( home_url( '/portfolio' ) );?>" title="Return to Portfolio">Portfolio</a></h4>
					<h5><?php the_title(); ?></h5>
				</div>
				</header>
				<!-- End Header-->
				
				<div class="row body-content">
				<?php the_content(); ?>
				</div>
			<?php endwhile; // end of the loop. ?>
		
			<!-- Footer -->
			<footer class="row">
				<div class="twelve mobile-four columns">
					<hr />
						<p>&copy; 2013 Katharine Turner</p>
				</div>
			</footer>
			
	<?php wp_footer(); ?>
	</body>
	</html>