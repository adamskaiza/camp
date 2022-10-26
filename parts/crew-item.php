<li class="crew-list__item">
    <a href="<?php echo the_permalink();?>">
        <?php the_post_thumbnail('medium');?>
        <h3><?php the_title();?></h3>
        <?php the_excerpt();?>
    </a>
</li>