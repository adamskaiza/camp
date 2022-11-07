<?php $acc_carts = $args['acc_cart'];

?>

<section class="acc">
    <form class="acc__container">
        <?php if($acc_carts) : ?>
        <?php foreach($acc_carts as $acc_cart):?>
        <?php echo $cartCount;?>
        <section class="acc__cart">
            <input type="checkbox" id="<?php echo str_replace(' ', '-', $acc_cart['acc_title']);?>" name="cb"
                value="<?php echo $acc_cart['acc_title'];?>">
            <label class="acc__cart-label"
                for="<?php echo str_replace(' ', '-', $acc_cart['acc_title']);?>"><?php echo $acc_cart['acc_title'];?></label>
            <article class="acc__cart-content">

                <?php if($acc_cart['level']) :?>
                <p class="acc__level">Level:
                    <span><?php echo $acc_cart['level'];?></span>
                </p>
                <?php endif;?>

                <?php echo $acc_cart['acc_content'];?>

                <?php if($acc_cart['acc_speaker']) :?>
                <p>Speaker:</p>
                <ul class="acc__speaker">
                    <?php foreach($acc_cart['acc_speaker'] as $post) :?>
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