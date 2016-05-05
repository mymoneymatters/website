<?php
	/**
	 * Template Name: Blog
	 */

	ob_start();
?>

<?php get_header(); ?>

<div class="page-header" xmlns="http://www.w3.org/1999/html">
	<h1>Welcome to our Blog</h1>
</div>

<?php

	$args = array(
		'post_type' => 'post'
	);

	$post_query = new WP_Query($args);
	if($post_query->have_posts() ) {
		while($post_query->have_posts() ) {
			$post_query->the_post();

			get_template_part( 'template-parts/content-single', 'page' );

			?>
			<h2><?php the_title(); ?></h2>
			<?php
		}
	}

?>

<?php get_footer(); ?>

<?php ob_flush(); ?>
