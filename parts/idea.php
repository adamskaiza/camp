<section class="idea" id="idea">
    <div class="container">

        <?php $data=get_field('idea'); ?>

        <div class="idea__title">
            <h4><?php echo $data['title']['first']; ?></h4>
            <h5><?php echo $data['title']['second']; ?></h5> <h3><?php echo $data['title']['third']; ?></h3>
        </div>

        <article class="idea__content">
            <?php echo $data['content']; ?>
        </article>

    </div>
</section>