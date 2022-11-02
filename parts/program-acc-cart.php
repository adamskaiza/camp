<?php $acc_carts = $args['acc_cart'];
$cartCount = 1;
?>
<section id="acc-<?php echo $id;?>" class="acc">
    <form class="acc__container">
        <?php foreach($acc_carts as $acc_cart):?>

        <section class="acc__cart">
            <input type="checkbox" id="<?php echo $id;?>-<?php echo $cartCount;?>" name="cb"
                value="<?php echo $acc_cart['acc_title'];?>" <?php echo $cartCount == 1 ? 'checked' : '';?>>
            <label class="acc__cart-label"
                for="<?php echo $id;?>-<?php echo $cartCount;?>"><?php echo $acc_cart['acc_title'];?></label>
            <article class="acc__cart-content">
                <?php echo $acc_cart['acc_content'];?> </article>
        </section>
        <?php $cartCount++;?>
        <?php endforeach;?>
        <?php $id++;?>


    </form>
</section>