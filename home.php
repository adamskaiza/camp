<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 */

get_header();
?>

<main id="primary" class="site-main blog-page">
    <?php get_template_part('parts/subpage-hero');?>

    <section id="startread" class="container">
        <section class="blog-page__posts-grid posts-grid">

            <?php
		if ( have_posts() ) :

			while ( have_posts() ) :
				the_post();

				get_template_part('parts/post-block');

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
        </section>

    </section>

</main><!-- #main -->

<?php
get_footer();