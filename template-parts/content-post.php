<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package camp
 */

?>

<article id="post-<?php the_ID(); ?>" class="post">
    <?php get_template_part('parts/subpage-hero');?>

    <section id="startread" class="gut-content">
        <section class="gut-content__content container">
            <?php the_content();?>
        </section>
    </section>


</article><!-- #post-<?php the_ID(); ?> -->