<ol class="header__socials socials <?php echo $args && $args['modifier'] ? 'socials--' . $args['modifier'] : null;?>">
    <li>
        <a href="<?php echo get_field('facebook', 'options');?>">
            <?php get_template_part('/svg/facebook');?>
        </a>
    </li>
    <li>
        <a href="<?php echo get_field('linkedin', 'options');?>">
            <?php get_template_part('/svg/linkedin');?>
        </a>
    </li>
</ol>