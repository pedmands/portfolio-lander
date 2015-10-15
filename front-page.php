<?php
/*
Front page
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section id="who">
				<div class="indent clear">
				<?php 
				$query = new WP_Query( 'pagename=who' );
				// The Loop
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
						echo '<h2 class="section-title">' . get_the_title() . '</h2>';
						echo '<div class="entry-content">';
						the_content();
						echo '</div>';
					}
				}
				
				/* Restore original Post Data */
				wp_reset_postdata();
				?>
				</div><!-- .indent -->
			</section><!-- who -->
			
			<section id="what">
				<div class="indent clear"><?php 
					$query = new WP_query('pagename=what-i-do');
					$what_id = $query->queried_object->ID;
					// The Loop
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							echo '<h2 class="section-title">';
							the_title();
							echo '</h2>';
							echo '<div class="entry-content">';
							the_content();
							echo '</div>';
						}// while
					} // if
					
					wp_reset_postdata();

					/* Get the children of the What I Do page */
					$args = array(
						'post_type' => 'page',
						'post_parent' => $what_id
						);
					$what_query = new WP_query($args);

					// The Loop
					if ($what_query->have_posts()) {
						echo '<ul class="what-list">';
						while ( $what_query->have_posts()){
							$what_query->the_post();
							echo '<li class="clear">';
							echo '<a href="' . get_permalink() . '" title="Learn more about ' . get_the_title() . '">';
							echo '<h3 class="what-title">' . get_the_title() . '</h3>';
							echo '</a>';
							echo '<div class="what-lede">';
							the_content('READ ON <i class="fa fa-angle-double-right"></i>');
							echo '</div>';
							echo '</li>';
						}
						echo '</ul>';
					}

					wp_reset_postdata();
					?>
				</div><!-- indent -->
			</section><!-- what -->

			<section id="portfolio">
				<div class="indent clear"><h2 class="section-title">Work // Portfolio</h2>
					Portfolio Posts.</div>
			</section><!-- work -->

			<section id="resume">
			Like what you see?
				<a href="#">View my CV</a>
			</section>

			<section id="why">
				<div class="indent clear">
					<h2 class="section-title">Why // Hire Me</h2>
					Why work with me?
					<ul>
						
						<li>
							<i class="fa fa-bolt"></i>
							<h3 class="quality-title">Creative Vision</h3>
						</li>
						<li>
							<i class="fa fa-fire-extinguisher"></i>
							<h3 class="quality-title">Problem-Solving Skills</h3>
						</li>
						<li>
							<i class="fa fa-tachometer"></i>
							<h3 class="quality-title">Inner Drive</h3>
						</li>
						<li>
							<i class="fa fa-sliders"></i>
							<h3 class="quality-title">Self-Moderation</h3>
						</li>
						<li>
							<i class="fa fa-hand-peace-o"></i>
							<h3 class="quality-title">Universal Friendliness</h3>
						</li>
						<li>
							<i class="fa fa-diamond"></i>
							<h3 class="quality-title">Professional Class</h3>
						</li>
					</ul>
				</div>
			</section><!-- qualities -->

			<section id="contact">
				<div class="indent clear"><?php 
					$query = new WP_query('pagename=contact'); 
					// The Loop
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							echo '<h2 class="section-title">' . get_the_title() . '</h2>';
							echo '<div class="entry-content">';
							the_content();
							echo '</div>';
						}// while
					} // if
					
					wp_reset_postdata();
					?></div>
			</section><!-- contact -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>