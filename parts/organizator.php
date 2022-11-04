<?php $data=get_field('organizator'); ?>
<section class="organizator">
    <div class="organizator__left">
        <h2 class="organizator__title h2">
            <?php echo $data['title'] ?>
        </h2>

        <div class="organizator__image">
            <?php echo wp_get_attachment_image($data['image'], 'full'); ?>
        </div>
    </div>
    <div class="organizator__right">
        <?php echo $data['content']; ?>
    </div>
</section>