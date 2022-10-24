<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package camp
 */

?>

<section class="blog-prev">
    <?php
    $blog_prev = get_field('blog_prev');
    ?>
    <?php get_template_part('parts/blog-prev', null, [
        'blog_prev_data' => $blog_prev,
    ]);?>
</section>