<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package camp
 */

get_header();
?>

<main id="primary" class="archive-page">

    <?php if ( have_posts() ) : ?>

    <header class="archive-page__header">
        <div class="container">
            <h1 class="post-title">
                <?php echo is_tax() ? get_queried_object()->name : post_type_archive_title();?>
            </h1>
        </div>
    </header><!-- .page-header -->
    <section class="archive-page__content">
        <ul class="crew-list container">

            <?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', 'archive' );

	endwhile; ?>
        </ul>

        <?php the_posts_navigation();

else :

	get_template_part( 'template-parts/content', 'none' );

endif;
?>

    </section>

</main><!-- #main -->

<?php
get_footer();