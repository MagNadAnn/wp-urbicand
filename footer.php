<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 */
?>

	<footer class="footer-site">

		<?php if ( is_active_sidebar( 'widget-footer-area' ) ) : ?>
			<div id="widget-footer-area" class="widget-footer widget-area" role="complementary">
			<?php dynamic_sidebar( 'widget-footer-area' ); ?>
			</div>
		<?php endif; ?>

	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
