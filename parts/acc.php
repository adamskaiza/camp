<?php $acc_heading = get_field('acc_heading');?>

<section class="acc-block">

    <?php $id = $args['id'];?>
    <section id="<?php echo $id;?>" class="acc">
        <form class="acc__container">
            <h2 class="acc__heading"><?php echo $acc_heading;?> </h2>
            <?php if( have_rows('acc_cart') ):?>

            <?php $cartCount = 1;?>

            <?php while( have_rows('acc_cart') ) : the_row(); ?>

            <?php
            $acc_label = get_sub_field('acc_label');
            $acc_content = get_sub_field('acc_content');
            ?>
            <section class="acc__cart">
                <input type="checkbox" id="<?php echo $id;?>-<?php echo $cartCount;?>" name="cb"
                    value="<?php echo $acc_label;?>" <?php echo $cartCount == 1 ? 'checked' : '';?>>
                <label class="acc__cart-label"
                    for="<?php echo $id;?>-<?php echo $cartCount;?>"><?php echo $acc_label;?></label>
                <article class="acc__cart-content">
                    <?php echo $acc_content;?>
                </article>
            </section>
            <?php $cartCount++;?>
            <?php endwhile; ?>
            <?php endif;?>

        </form>
    </section>
</section>