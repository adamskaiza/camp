<?php
$post_args = array(
  'numberposts' => 12,
  'post_type'   => $args['post_type']
);

$crew = get_posts($post_args);
?>
<section id="<?php echo $args['post_type'];?>" class="crew">
    <section class="crew__content container">
        <?php if(is_front_page() || is_singular())  :?>
        <h2><?php echo $args['post_type'];?></h2>
        <?php endif ;?>
        <ul class="crew__list crew-list">
            <?php foreach($crew as $post) :?>
            <?php setup_postdata($post); ?>
            <?php get_template_part('parts/crew-item');?>
            <?php wp_reset_postdata(); ?>
            <?php endforeach;?>
        </ul>
    </section>
</section>