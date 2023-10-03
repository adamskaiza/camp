<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package camp
 */

?>
<section class="agenda-header container">
    <?php the_content();?>
</section>
<?php $agenda = get_field('agenda');?>
<?php get_template_part('parts/static-agenda-tabs', null, [
    'custom_field' => $agenda,
]);?>