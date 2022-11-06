<section class="homeVideo" id="homeVideo">
    <?php $data = get_field('homevideo'); ?>
    <?php /* ?>
    <div class="video-container">
        <video muted autoplay="autoplay" loop>
            <source src="https://perspektywy.org/womenintechcamp/wp-content/uploads/Women-in-Tech-Camp-2021_2.mp4"
                type="video/mp4">
        </video>
        <video autoplay loop muted playsinline onloadeddata="this.muted=true;this.play();">
            <source src="https://perspektywy.org/womenintechcamp/wp-content/uploads/Women-in-Tech-Camp-2021_2.mp4"
                type="video/mp4">
        </video>
    </div>

    <?php */ ?>
    <?php 
        if(isset($data['gif'])) :
    ?>

    <div class="homeVideo__gif">
        <?php echo wp_get_attachment_image( $data['gif'], 'full') ?>
    </div>

    <?php
        elseif(isset($data['videoid'])) :
    ?>
    <div class="iframe-container">
        <?php $videoId= $data['videoid']; ?>
        <iframe
            src="https://www.youtube.com/embed/<?php echo $videoId; ?>?autoplay=1&mute=1&modestbranding=1&autohide=1&showinfo=0&controls=0&version=3&loop=1&playlist=<?php echo $videoId; ?>"
            title="Women in Tech Camp 2021" frameborder="0" allow="autoplay; picture-in-picture"></iframe>
    </div>
    <?php
        endif;
    ?>
</section>