<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sassy_Underscores
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="taxonomies">
		<div class="project-types">
				<?php echo get_the_term_list($post->ID, 'project-type', '<h3>', '</h3><h3>', '</h3>' ); ?>
			</div>
			<div class="languages">
				<?php echo get_the_term_list($post->ID, 'languages', '<h3>Languages</h3>', ',', '' ); ?>
			</div>
			<div class="software">
				<?php echo get_the_term_list($post->ID, 'software', '<h3>Software</h3>', ',', '' ); ?>
			</div>
		</div><!-- taxonomies -->
	</header><!-- .entry-header -->
		
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
		

</article><!-- #post-## -->

