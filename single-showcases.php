<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Sassy_Underscores
 */

get_header(); ?>


	
		<?php while ( have_posts() ) : the_post(); ?>
<div id="showcase-left">
	<?php get_template_part( 'template-parts/content', 'showcases' ); ?>
</div>

	<?php 
            if (has_post_thumbnail()) {
                echo '<div id="showcase-right">';
                echo the_post_thumbnail('large-thumb');
                echo '</div>';
            }
	?>

			

		<?php endwhile; // End of the loop. ?>

<a href="../../#portfolio" class="back-to">< Back to the portoflio</a>
<?php get_footer(); ?>
