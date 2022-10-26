<?php
$post_args = array(
  'numberposts' => 12,
  'post_type'   => $args['post_type']
);

$crew = get_posts($post_args);
?>
<section id="<?php echo $args['post_type'];?>" class="crew">
    <section class="crew__content container">
        <h2><?php echo $args['post_type'];?></h2>
        <ul class="crew__list">
            <?php foreach($crew as $post) :?>
            <li class="crew__item">
                <?php setup_postdata($post); ?>
                <a href="<?php echo the_permalink();?>">
                    <?php the_post_thumbnail('medium');?>
                    <h3><?php the_title();?></h3>
                    <?php the_excerpt();?>
                </a>
                <?php wp_reset_postdata(); ?>
            </li>
            <?php endforeach;?>
        </ul>
    </section>
</section>