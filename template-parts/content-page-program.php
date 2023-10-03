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
    <h1><?php the_title();?></h1>
    <section><?php the_content();?></section>
</section>
<?php
$program = get_field('program');?>
<?php get_template_part('parts/program-tabs', null, [
        'custom_field' => $program,
    ]);
?>