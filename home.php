<?php get_header(); ?>

<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
	}
}
?>

<h2>A change</h2>

<?php get_footer(); ?>
