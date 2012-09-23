<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<span>Germanistisches Magazin - Alle Rechte vorbehalten</span>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-1.8.1.min.js" type="text/javascript"></script>
<?php global $elasticSliderEnabled;Ê?>
<?php if($elasticSliderEnabled): ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.eislideshow.js" type="text/javascript"></script>
<script type="text/javascript">
            $(function() {
                $('#ei-slider').eislideshow({
					easing		: 'easeOutExpo',
					titleeasing	: 'easeOutExpo',
					titlespeed	: 1200
                });
            });
</script>
<?php endif; ?>
</html>