<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package potsnpans
 */

?>

	<footer id="colophon" class="site-footer">
		
		<div class="bg-primary">
			<div class="container">
				<div class="row">
					<div class="col-md-3 pt-4 pb-4">
						<?php dynamic_sidebar('footer-widget-col-one'); ?>
					</div>
					<div class="col-md-3 pt-4 pb-4">
						<?php dynamic_sidebar('footer-widget-col-two'); ?>
					</div>
					<div class="col-md-3 pt-4 pb-4">
						<?php dynamic_sidebar('footer-widget-col-three'); ?>
					</div>
					<div class="col-md-3 pt-4 pb-4">
						<?php dynamic_sidebar('footer-widget-col-four'); ?>
					</div>
				</div>
			</div>
		</div>


	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
