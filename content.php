<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'kittysite' ); ?>
		</div>
		<?php endif; ?>
		
		<!-- Header for standard view-->
		<header class="entry-header row hide-for-small">
			<div class="six columns">
				<h4 class="entry-date"><?php the_time('l jS F, Y') ?></h4>
			</div>
			<div class="six columns">
			<?php the_post_thumbnail(); ?>
			<?php if ( is_single() ) : ?>
			<h4 class="entry-title"><?php the_title(); ?></h4>
			<?php else : ?>
			<h4 class="entry-title">
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'kittysite' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h4>
			<?php endif; // is_single() ?>
			</div>
		</header>
		<!-- Header for mobile view  -->
		<header class="entry-header show-for-small">
			<div class="row">
				<div class="twelve columns">
					<?php the_post_thumbnail(); ?>
					<?php if ( is_single() ) : ?>
						<h4 class="entry-title frontandcenter"><?php the_title(); ?></h4>
					<?php else : ?>
						<h4 class="entry-title frontandcenter">
							<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'kittysite' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
						</h4>
					<?php endif; // is_single() ?>
				</div>
			</div>
			<div class="row">
				<div class="twelve columns">
					<h5 class="entry-date frontandcenter"><?php the_time('l jS F, Y') ?></h5>
				</div>
			</div>
		</header>

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'kittysite' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'kittysite' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>

		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'kittysite' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
