<article class="post-block <?php echo $args['modifier'] ?? null; ?>">
    <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
    <div class="post-block__info">
        <p class="post-block__date"><?php echo get_the_date('', $post); ?></p>
        <div>
            <h4 class="post-block__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <a class="post-block__link" href="<?php the_permalink(); ?>">Czytaj więcej</a>
        </div>
    </div>
</article>