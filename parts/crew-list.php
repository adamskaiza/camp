<?php add_filter( 'posts_orderby' , 'posts_orderby_lastname' );?>

<?php
$post_args = array(
  'numberposts' => $args['numberposts'] ?? null,
  'post_type'   => $args['post_type'],
  'orderby' => 'wpse_last_word',
  'order' => 'ASC',

  'tax_query' => array(
    array(
        'taxonomy' => 'role',
        'field'    => 'slug',
        'terms'    => $args['taxonomy']
    )
)
);

$crew = get_posts($post_args);
?>
<section id="<?php echo $args['post_type'];?>" class="crew">
    <section class="crew__content container">
        <?php if(is_front_page() || is_singular() || is_archive())  :?>
        <h2 class="h2"><?php echo $args['heading'] ?? null;?></h2>
        <?php endif ;?>
        <ul class="crew__list crew-list">
            <?php foreach($crew as $post) :?>
            <?php setup_postdata($post); ?>
            <?php get_template_part('parts/crew-item', null, [
                'modifier' => 'crew-item--' . $args['taxonomy'],
            ]);?>
            <?php wp_reset_postdata(); ?>
            <?php endforeach;?>
        </ul>
        <?php if(is_front_page())  :?>
        <a href="<?php echo get_site_url() . '/role/' . $args['taxonomy'];?>" class="crew__link">zobacz
            wszystkich</a>
        <?php endif ;?>
        <?php if(is_tax())  :?>
        <a href="<?php echo get_site_url() . '/speakers';?>" class="crew__link">zobacz
            wszystkich</a>
        <?php endif ;?>

    </section>
</section>