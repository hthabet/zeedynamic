<?php
/**
 * The template for displaying the footer.
 *
 * Contains all content after the main content area and sidebar
 *
 * @package zeeDynamic
 */
 
?>
	
	</div><!-- #content -->
	
	<?php do_action( 'zeedynamic_before_footer' ); ?>

	<div id="footer" class="footer-wrap">
	
		<footer id="colophon" class="site-footer clearfix" role="contentinfo">

			<div id="footer-text" class="site-info">
				<?php do_action( 'zeedynamic_footer_text' ); ?>
				<span class="footer-disclaimer">Disclaimer: the opinions and views expressed at or through this blog are the opinions of the designated authors and do not reflect the opinions or views of the university.</span>
			</div><!-- .site-info -->
			
			<?php do_action( 'zeedynamic_footer_menu' ); ?>

		</footer><!-- #colophon -->
		
	</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>