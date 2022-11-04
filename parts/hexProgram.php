<section class="hexProgram" id="o-programie">
    <?php $data=get_field('hexprogram'); ?>

    <div class="container">
        <div class="hexProgram__title">
            <div class="hexProgram__title_title">
                <?php echo $data['title'] ?>
            </div>
            <div class="hexProgram__title_subtitle">
                <?php echo $data['subtitle'] ?>
            </div>
        </div>

        <div class="hexProgram__tiles">
            <?php foreach ($data['tiles'] as $key => $value): ?>
            <div class="hexProgram__tiles_hex">

                <?php echo wp_get_attachment_image( $value['icon']) ?>

                <div class="hexProgram__tiles_hex--title">
                    <?php echo $value['title'] ?>
                </div>
                <div class="hexProgram__tiles_hex--content">
                    <?php echo $value['content'] ?>
                </div>

                <?php echo wp_get_attachment_image( $value['sideimage'], null, null, 
                ["class"=>'hexProgram__tiles_hex--sideimage']) ?>

                <?php echo wp_get_attachment_image($value['bgimage'], null, null, 
                ["class"=>'hexProgram__tiles_hex--bg']) ?>

            </div>
            <?php endforeach; ?>
        </div>
    </div>

</section>