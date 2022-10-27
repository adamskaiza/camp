<section class="hexnumbers container" id="hexnumbers">
    <?php $data=get_field('hexnumbers'); ?>

    
    <?php foreach ($data['tiles'] as $key => $value): ?>
        <div class="hexnumbers__tile">

            <div class="hexnumbers__tile_number">
                <?php echo $value['number'] ?>
            </div>
            <div class="hexnumbers__tile_caption">
                <?php echo $value['caption'] ?>
            </div>

        </div>
    <?php endforeach; ?>

    <div class="hexnumbers__tile--image">
        <?php echo wp_get_attachment_image($data['image']); ?>
    </div>

</section>