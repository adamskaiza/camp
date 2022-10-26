<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package camp
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php get_template_part('parts/crew-list', null, [
    'post_type' => get_post_type(),
]);?>

</article><!-- #post-<?php the_ID(); ?> -->