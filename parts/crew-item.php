<li class="crew-list__item crew-item">
    <a href="<?php echo the_permalink();?>">
        <?php camp_post_thumbnail();?>
        <div>
            <h3><?php the_title();?></h3>
            <?php the_excerpt();?>
        </div>
    </a>
</li>