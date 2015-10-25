<?php


// Websites
$websites = array(
	'post_type' => 'showcases',
	'tax_query' => array(
		array(
			'taxonomy' => 'project-type',
			'field' => 'slug',
			'terms' => 'website',
			),),
	'posts_per_page' => 6,
	'orderby' => 'rand'
	);

$portfolio_sites = new WP_Query($websites);
echo '<aside id="websites" class="clear tab">';
while ( $portfolio_sites->have_posts() ) : $portfolio_sites->the_post();
    echo '<div class="portfolio">';
    echo '<a href="' . get_permalink() . '" title="Learn more about ' . get_the_title() . '">';
    the_post_thumbnail();
    echo '<div class="entry-content">';
    echo '<h1 class="entry-title">' . get_the_title() . '</h1>';
    echo '</a>';
    echo '</div>';
    echo '</div>';
endwhile;
echo '</aside>';

wp_reset_query();

// Print
$print = array(
	'post_type' => 'showcases',
	'tax_query' => array(
		array(
		'taxonomy' => 'project-type',
		'field' => 'slug',
		'terms' => 'print'
		),),
	'post_per_page' => 3,
	'orderby' => 'rand'
	);

$portfolio_print = new WP_Query($print);
echo '<aside id="print" class="clear tab">';
while ( $portfolio_print->have_posts() ) : $portfolio_print->the_post();
    echo '<div class="portfolio">';
    the_post_thumbnail();
    echo '<div class="entry-content">';
    echo '<h1 class="entry-title">' . get_the_title() . '</h1>';
    echo '</div>';
    echo '</div>';
endwhile;
echo '</aside>';

wp_reset_query();

// Identity
$identity = array(
	'post_type' => 'showcases',
	'tax_query' => array(
		array(
		'taxonomy' => 'project-type',
		'field' => 'slug',
		'terms' => 'identity'
		),),
	'post_per_page' => 3,
	'orderby' => 'rand'
	);

$portfolio_identity = new WP_Query($identity);
echo '<aside id="identity" class="clear tab">';
while ( $portfolio_identity->have_posts() ) : $portfolio_identity->the_post();
    echo '<div class="portfolio">';
    the_post_thumbnail();
    echo '<div class="entry-content">';
    echo '<h1 class="entry-title">' . get_the_title() . '</h1>';
    echo '</div>';
    echo '</div>';
endwhile;
echo '</aside>';

wp_reset_query();
?>