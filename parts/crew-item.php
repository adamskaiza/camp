<?php $role = get_terms('role');?>
<li class="crew-list__item crew-item <?php echo $args['modifier'] ?? null;?>">
    <a href="<?php echo the_permalink();?>">
        <?php camp_post_thumbnail();?>
        <?php if(has_post_thumbnail()):?>
        <?php else : ?>
        <img src="<?php echo get_stylesheet_directory_uri() . '/src/img/avatar.jpg' ;?>" alt="avatar">
        <?php endif;?>
        <div>
            <h3><?php the_title();?></h3>
            <?php the_excerpt();?>
            <p class="crew-item__firm"><?php echo get_first_paragraph();?></p>
        </div>
    </a>
</li>