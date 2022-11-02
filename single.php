<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package camp
 */

get_header();
?>

<main id="primary" class="single-page">

    <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'single' );

		endwhile; // End of the loop.
	?>

	<?php 
		$post_type = get_post_type(get_the_ID());   
		$taxonomies = get_object_taxonomies($post_type);   
		$term = wp_get_object_terms(get_the_ID(), $taxonomies)[0];  
		// Dane powyżej ładnie sie wczytuja
		// Ale funkcja ponizej nie zwraca

		var_dump(get_taxonomy_posts(12, $term->taxonomy, $term->slug));
	?>

    <?php get_template_part('parts/crew-list', null, [
    'taxonomy_name' => $term,
]);?>

</main><!-- #main -->

<?php
get_footer();