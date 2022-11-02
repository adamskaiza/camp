<?php


    $taxonomy_name = $args['taxonomy_name'];


    $post_args = array(
        'post_type' => 'osoby',
        'tax_query' => array(
                    array(
                        'taxonomy' => 'role',
                        'field' => 'slug',
                        'terms' => 'prelegenci' // roboczo perlegentow wrzucam
                    )
                )
        );
        

    $crew = get_posts($post_args);

?>
<section id="<?php echo $taxonomy_name;?>" class="crew">
    <section class="crew__content container">
        <?php if(is_front_page() || is_singular())  :?>
        <h2 class="h2"><?php echo $taxonomy_name;?></h2>
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