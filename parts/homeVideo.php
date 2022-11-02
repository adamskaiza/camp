<section class="homeVideo" id="homeVideo">
    <div class="video-container">
        <video muted autoplay="autoplay" loop>
            <source src="https://perspektywy.org/womenintechcamp/wp-content/uploads/Women-in-Tech-Camp-2021_2.mp4" type="video/mp4">
        </video>
        <video autoplay loop muted playsinline onloadeddata="this.muted=true;this.play();">
            <source src="https://perspektywy.org/womenintechcamp/wp-content/uploads/Women-in-Tech-Camp-2021_2.mp4" type="video/mp4">
        </video>
    </div>

    <?php /* ?>
    <div class="iframe-container">
        <?php $videoId=get_field('homevideo')['videoid']; ?>
        <iframe
            src="https://www.youtube.com/embed/<?php echo $videoId; ?>?autoplay=1&mute=1&modestbranding=1&autohide=1&showinfo=0&controls=0&version=3&loop=1&playlist=<?php echo $videoId; ?>"
            title="Women in Tech Camp 2021" frameborder="0" allow="autoplay; picture-in-picture"></iframe>
    </div>
    <?php */ ?>
</section>
