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

<?php $acf = get_fields(); ?>

<!-- Komponent z video YT i logo -->
<?php get_template_part('parts/homeVideo');?>

<div class="homeBgBlue" style="background-image: url(<?php 
    echo wp_get_attachment_image_url( $acf['home']['bgblue'], 'full');
    ?>); background-color: #1157c1;">

    <!-- Komponent idea -->
    <?php get_template_part('parts/idea');?>

    <!-- Komponent hexNumbers -->
    <?php get_template_part('parts/hexNumbers');?>

    <!-- Komponent hexProgram -->
    <?php get_template_part('parts/hexProgram');?>

</div>

<?php get_template_part('parts/feedback-slider');?>

<?php get_template_part('parts/crew-list', null, [
    'taxonomy_name' => 'Prelegenci',
]); ?>

<?php get_template_part('parts/partners', null, [
    'partners' => $acf['logotypes'],
]);?>