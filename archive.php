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

    <?php $roles = get_terms( 'role' ); ?>

    <ul class="roles-list container">

        <?php foreach ( $roles as $role ) :?>

        <?php $role_link = get_term_link( $role );?>

        <?php if ( is_wp_error( $role_link ) ) : 
            continue;
        endif;?>
        <li>
            <a href="<?php echo esc_url( $role_link );?>"><?php echo $role->name;?></a>
        </li>
        <?php endforeach;?>

    </ul>

    <?php if(is_archive() && !is_tax()):?>
    <?php get_template_part('parts/crew-list', null, [
    'post_type' => 'speakers',
    'taxonomy' => 'role-models',
    'heading' => 'role models'

]);?>
    <?php get_template_part('parts/crew-list', null, [
    'post_type' => 'speakers',
    'taxonomy' => 'mentorzy',
    'heading' => 'mentorzy'

]);?>
    <?php get_template_part('parts/crew-list', null, [
    'post_type' => 'speakers',
    'taxonomy' => 'trenerzy',
    'heading' => 'trenerzy'

]);?>
    <?endif;?>

    <?php if(is_tax('role', 'role-models')) : ?>
    <section class="archive-page__content">
        <?php get_template_part('parts/crew-list', null, [
    'post_type' => 'speakers',
    'taxonomy' => 'role-models',

]);?>
        <?php endif;?>

        <?php if(is_tax('role', 'mentorzy')) : ?>
        <?php get_template_part('parts/crew-list', null, [
    'post_type' => 'speakers',
    'taxonomy' => 'mentorzy',

]);?>
        <?php endif;?>

        <?php if(is_tax('role', 'trenerzy')) : ?>
        <?php get_template_part('parts/crew-list', null, [
    'post_type' => 'speakers',
    'taxonomy' => 'trenerzy',

]);?>
        <?php endif;?>


        <?php
else :

	get_template_part( 'template-parts/content', 'none' );

endif;
?>

    </section>

</main><!-- #main -->

<?php
get_footer();