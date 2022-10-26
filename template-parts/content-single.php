<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package camp
 */

?>

<section id="post-<?php the_ID(); ?>" class="single-page__content">
    <article class="single-page__grid container">

        <?php camp_post_thumbnail(); ?>
        <article class="single-page__info">
            <?php the_title( '<h1 class="entry-title">', '</h1>' );?>
            <?php the_excerpt();?>
            <?php the_content();?>

        </article>
    </article>

</section>