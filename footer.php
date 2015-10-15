<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sassy_Underscores
 */

?>

	</div><!-- #content -->

    <?php 
    if ( is_home() || is_archive() || is_category() ) {
        echo '<footer id="colophon" class="site-footer" role="contentinfo">';
    } else {
        echo '<footer id="colophon" class="site-footer site-footer-full" role="contentinfo">';
    }
    ?>    
	
	<?php get_sidebar('footer'); ?>
		<div class="site-info">
			
			
			<?php printf( esc_html__( 'The %1$s of %2$s is proudly powered by ', 'undersoressass' ), '2015 Portfolio', '<a href="http://www.press10.me" rel="designer">Preston Edmands</a>' ); ?>
			
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'undersoressass' ) ); ?>"><?php printf( esc_html__( ' %s', 'undersoressass' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
