<?php $blog_prev_data = $args['blog_prev_data'];?>
<section class="blog-prev">
    <section class="blog-prev__grid container">
        <section class="blog-prev__content">
            <?php get_template_part('parts/desc', null, [
            'heading' => $blog_prev_data['blog_prev_heading'],
            'content' => $blog_prev_data['blog_prev_content'],
            'link' => $blog_prev_data['blog_prev_link'],
        ])
?>
        </section>
        <section class="blog-prev__posts-grid posts-grid">
            <?php
            if($args['relation'] ?? null){
                $last_posts = $args['relation'];
            } else{
                $last_posts =  get_posts([
                    'post_type'   => 'post',
                    'numberposts'      => 4,
                        ]);
                    }
                ?>

            <?php
            foreach ( $last_posts as $post ) :
                setup_postdata( $post );  
                ?>

            <?php get_template_part('parts/post-block') ;?>
            <?php
            endforeach; 
            wp_reset_postdata();
            ?>
        </section>
        <a class="blog-prev__link-mobile site-button" href="<?php echo $blog_prev_data['blog_prev_link'];?>">Zobacz
            więcej</a>
    </section>
</section>