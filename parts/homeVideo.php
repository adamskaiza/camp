<?php $data = get_field('homevideo'); ?>
<section class="homeVideo" id="homeVideo">
</section>

<script>
    if( window.innerWidth > 960 ) {
        document.getElementById('homeVideo').innerHTML = `
        <div class="iframe-container">
            <iframe
                src="https://www.youtube.com/embed/<?php echo $data['videoid']; ?>?autoplay=1&mute=1&modestbranding=1&autohide=1&showinfo=0&controls=0&version=3&loop=1&playlist=<?php echo $data['videoid']; ?>"
                title="Women in Tech Camp 2021" frameborder="0" allow="autoplay; picture-in-picture"></iframe>
        </div>
        `;
    } else {
        document.getElementById('homeVideo').innerHTML = `
        <div class="homeVideo__gif">
            <?php echo wp_get_attachment_image( $data['gif'], 'full') ?>
        </div>
        `;

    }
</script>