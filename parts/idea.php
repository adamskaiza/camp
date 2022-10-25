    <section class="idea" id="idea">
        <div class="container">

            <?php $data=get_field('idea'); ?>

            <div class="idea__title">
                <?php echo $data['title']; ?>
            </div>

            <article class="idea__content">
                <?php echo $data['content']; ?>
            </article>

        </div>
    </section>