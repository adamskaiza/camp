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


    <?php get_template_part('parts/crew-list', null, [
    'post_type' => get_post_type(),
	'taxonomy' => array( 'role-models', 'trenerzy', 'mentorzy' ),
    'heading' => 'Inni'
]);?>

</main><!-- #main -->

<?php
get_footer();