<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div class="row site-foot">
	
	<div class="column small-12">
		<p>Website copyright <?php echo date('Y');?>. All rights reser-- Nah, I'm just playing with ya, the whole thing is up on an open repo on <a href="https://github.com/haa-gg/TastesLikeNeonThrashMetal">github!</a></p>

		<p>Feel free to use it, break it, fix it, trash it, change it, mail, upgrate it.</p>
	</div>

</div>

		</section>
		<!-- <div class="footer-container" data-sticky-footer>
			<footer class="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div> -->

		<?php do_action( 'foundationpress_layout_end' ); ?>


		</div><!-- Close off-canvas content -->
	</div><!-- Close off-canvas wrapper -->


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
