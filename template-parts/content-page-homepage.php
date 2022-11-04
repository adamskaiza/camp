<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package camp
 */

?>

<?php //get_template_part('parts/subpage-hero')?>

<!-- Komponent z video YT i logo -->
<?php get_template_part('parts/homeVideo');?>

<div class="homeBgBlue" style="background-image: url(<?php 
    echo wp_get_attachment_image_url( get_field('home')['bgblue'], 'full');
    ?>); background-color: #1157c1;">

    <!-- Komponent idea -->
    <?php get_template_part('parts/idea');?>

    <!-- Komponent hexNumbers -->
    <?php get_template_part('parts/hexNumbers');?>

    <!-- Komponent hexProgram -->
    <?php get_template_part('parts/hexProgram');?>

</div>

<?php // get_template_part('parts/feedback-slider');?>

<?php $role_models = get_the_terms($wyprawa->ID, 'rodzaje_wyprawy'); ?>

<?php get_template_part('parts/crew-list', null, [
    'post_type' => 'speakers',
    'taxonomy' => 'role-models',
    'heading' => 'role models',
    'numberposts' => 8
]);?>
<?php get_template_part('parts/crew-list', null, [
    'post_type' => 'speakers',
    'taxonomy' => 'mentorzy',
    'heading' => 'mentorzy',
    'numberposts' => 8
]);?>
<?php get_template_part('parts/crew-list', null, [
    'post_type' => 'speakers',
    'taxonomy' => 'trenerzy',
    'heading' => 'trenerzy',
    'numberposts' => 8
]);?>

<?php get_template_part('parts/organizator'); ?>

<?php $partners_arr = get_field('logotypes');?>
<?php get_template_part('parts/partners', null, [
    'partners' => $partners_arr,
]);?>