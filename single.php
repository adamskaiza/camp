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

    <?php $queried_object = get_queried_object () ;?>


    <?php get_template_part('parts/crew-list', null, [
    'post_type' => 'speakers',
    'taxonomy' => 'role-models',
    'heading' => 'role models',
]);?>
    <?php get_template_part('parts/crew-list', null, [
    'post_type' => 'speakers',
    'taxonomy' => 'mentors',
    'heading' => 'mentors',
]);?>
    <?php get_template_part('parts/crew-list', null, [
    'post_type' => 'speakers',
    'taxonomy' => 'trainers',
    'heading' => 'trainers',
]);?>

</main><!-- #main -->

<?php
get_footer();