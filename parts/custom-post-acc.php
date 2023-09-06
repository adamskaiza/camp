<?php $acc_carts = $args['acc_cart']; ?>

<section class="acc">
    <form class="acc__container">
        <?php if($acc_carts) : ?>
        <?php foreach($acc_carts as $acc_cart):?>

        <section class="acc__cart">
            <input type="checkbox" id="<?php echo $acc_cart->post_name;?>" name="cb"
                value="<?php echo $acc_cart->post_title;?>">
            <label class="acc__cart-label"
                for="<?php echo $acc_cart->post_name;?>"><?php echo $acc_cart->post_title;?></label>
            <article class="acc__cart-content">

                <?php if(get_field('level', $acc_cart->ID)) :?>
                <p class="acc__level">Level:
                    <span><?php echo get_field('level', $acc_cart->ID);?></span>
                </p>
                <?php endif;?>

                <?php echo $acc_cart->post_content;?>

                <?php if(get_field('speaker', $acc_cart->ID)) :?>
                <p>Speaker:</p>
                <ul class="speaker speaker--acc">
                    <?php foreach(get_field('speaker', $acc_cart->ID) as $post) :?>
                    <?php setup_postdata( $post );?>
                    <?php get_template_part('parts/crew-item');?>
                    <?php wp_reset_postdata();?>
                    <?php endforeach;?>
                </ul>
                <?php endif;?>

            </article>
        </section>
        <?php endforeach;?>
        <?php endif;?>

    </form>
</section>