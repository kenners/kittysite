<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 */
?>


	</div>
	<!-- End Sidebar and Content -->
	<!-- Sidebar for small screens -->
	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		<div class="show-for-small widget-area row">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>
	<!-- Footer -->
	<footer class="row">
		<div class="twelve mobile-four columns">
			<hr />
				<p>&copy; 2013 Katharine Turner</p>
		</div>
	</footer>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascripts/retina.js"></script>
<?php wp_footer(); ?>
</body>
</html>