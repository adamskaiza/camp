<?php $partners = $args['partners'];?>
<section id="partnerzy" class="partners">
    <article class="partners__content container">
        <h2 class="h2">Partnerzy</h2>
        <ul class="partners__list">
            <?php if($partners):?>
            <?php foreach($partners as $partner): ?>
            <li class="partners__item">
                <a href="<?php echo $partner['link'];?>" target="_blank">
                    <?php echo wp_get_attachment_image($partner['logo'] , 'medium');?>
                </a>
            </li>
            <?php endforeach;?>
            <?php endif;?>
        </ul>

    </article>
</section>