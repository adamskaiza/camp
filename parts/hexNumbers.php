<section class="hexNumbers container" id="hexNumbers">
    <?php $data=get_field('hexnumbers'); ?>

    
    <?php foreach ($data['tiles'] as $key => $value): ?>
        <div class="hexNumbers__tile">

            <div class="hexNumbers__tile_number">
                <?php echo $value['number'] ?>
            </div>
            <div class="hexNumbers__tile_caption">
                <?php echo $value['caption'] ?>
            </div>

        </div>
    <?php endforeach; ?>

    <div class="hexNumbers__tile--image">
        <?php echo wp_get_attachment_image($data['image'], 'full'); ?>
    </div>

</section>