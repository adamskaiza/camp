<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package camp
 */

?>
<?php
$program = get_field('program');?>
<?php get_template_part('parts/program-tabs', null, [
    'custom_field' => $program,
]);?>