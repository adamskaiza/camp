<?php $role = get_terms('role');?>
<li class="crew-list__item crew-item <?php echo $args['modifier'] ?? null;?>">
    <article class="crew-item__block">
        <?php camp_post_thumbnail();?>
        <?php if(has_post_thumbnail()):?>
        <?php else : ?>
        <div class="post-thumbnail">
            <img src="<?php echo get_stylesheet_directory_uri() . '/src/img/avatar.jpg' ;?>" alt="avatar">
        </div>
        <?php endif;?>
        <article>
            <h3> <a href="<?php echo the_permalink();?>">
                    <?php the_title();?></a></h3>
            <?php the_excerpt();?>
            <p class="crew-item__firm--acc"><?php echo get_first_paragraph();?></p>

        </article>
    </article>

    <p class="crew-item__firm"><?php echo get_first_paragraph();?></p>
</li>